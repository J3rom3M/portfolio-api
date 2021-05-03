<?php

namespace App\Controller;

use App\Entity\Projects;
use App\Repository\ProjectsRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use Symfony\Component\Serializer\Normalizer\AbstractNormalizer;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ProjectController extends AbstractController
{
    /**
     * Get projects
     * 
     * @Route("/api/projects", name="api_projects_get", methods="GET")
     */
    public function getAll(ProjectsRepository $projectsRepository): Response
    {
        $projects = $projectsRepository->findAll();

        return $this->json($projects, Response::HTTP_OK, [], ['groups' => 'projects_get']);
    }

    /**
     * Get one project
     * 
     * @Route("/api/project/{id}", name="api_project_get_one", methods="GET")
     */
    public function getOne(Projects $project = null): Response
    {
        if ($project === null) {
            return $this->json(['message' => 'project not found.'], Response::HTTP_NOT_FOUND);
        }

        return $this->json($project, Response::HTTP_OK, [], ['groups' => 'projects_get']);
    }

    /**
     * Create project
     * 
     * @Route("/api/project", name="api_project_post", methods="POST")
     */
    public function project(Request $request, SerializerInterface $serializer, EntityManagerInterface $entityManager, ValidatorInterface $validator)
    {
        $jsonContent = $request->getContent();


        $project = $serializer->deserialize($jsonContent, Projects::class, 'json');

        $errors = $validator->validate($project);
        if (count($errors) > 0) {
            return $this->json($this->generateErrors($errors), Response::HTTP_UNPROCESSABLE_ENTITY);
        }

        $entityManager->persist($project);
        $entityManager->flush();

        return $this->redirectToRoute(
            'api_project_get_one',
            [
                'id' => $project->getId()
            ],
            Response::HTTP_CREATED
        );

        return $this->json(
            $project,
            Response::HTTP_CREATED,
            [
                'Location' => $this->generateUrl('api_project_get_one', ['id' => $project->getId()])
            ],
            ['groups' => 'projects_get']
        );
    }

    /**
     * Edit project (PUT)
     * 
     * @Route("/api/project/{id<\d+>}", name="api_project_put", methods={"PUT", "PATCH"})
     */
    public function putAndPatch(Projects $project = null, EntityManagerInterface $em, SerializerInterface $serializer, Request $request, ValidatorInterface $validator)
    {
        if ($project === null) {
            return $this->json(['error' => 'Element non trouvé.'], Response::HTTP_NOT_FOUND);
        }

        $jsonContent = $request->getContent();

        $serializer->deserialize(
            $jsonContent,
            project::class,
            'json',
            [AbstractNormalizer::OBJECT_TO_POPULATE => $project]
        );

        $errors = $validator->validate($project);
        if (count($errors) > 0) {
            return $this->json($this->generateErrors($errors), Response::HTTP_UNPROCESSABLE_ENTITY);
        }
        $em->flush();

        return $this->json(['message' => 'Element modifié.'], Response::HTTP_OK);
    }

    /**
     * Delete project
     * 
     * @Route("/api/project/{id<\d+>}", name="api_project_delete", methods="DELETE")
     */
    public function delete(Projects $project = null, EntityManagerInterface $em)
    {
        if ($project === null) {
            return $this->json(['error' => 'Element non trouvé.'], Response::HTTP_NOT_FOUND);
        }

        $em->remove($project);
        $em->flush();

        return $this->json(['message' => 'Element supprimé.'], Response::HTTP_OK);
    }

    /**
     * Génération des erreurs
     */
    private function generateErrors($errors)
    {
        if (count($errors) > 0) {
            $errorsList = [];
            foreach ($errors as $error) {
                $errorsList[$error->getPropertyPath()] = $error->getMessage();
            }
        }
        return $errorsList;
    }
}
