<?php

namespace App\Controller;

use App\Entity\Technos;
use App\Repository\TechnosRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use Symfony\Component\Serializer\Normalizer\AbstractNormalizer;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class TechnoController extends AbstractController
{
    /**
     * Get technos
     * 
     * @Route("/api/technos", name="api_technos_get", methods="GET")
     */
    public function getAll(TechnosRepository $technosRepository): Response
    {
        $technos = $technosRepository->findAll();

        return $this->json($technos, Response::HTTP_OK, [], ['groups' => 'technos_get']);
    }

    /**
     * Get one techno
     * 
     * @Route("/api/techno/{id}", name="api_techno_get_one", methods="GET")
     */
    public function getOne(Technos $techno = null): Response
    {
        if ($techno === null) {
            return $this->json(['message' => 'techno not found.'], Response::HTTP_NOT_FOUND);
        }

        return $this->json($techno, Response::HTTP_OK, [], ['groups' => 'technos_get']);
    }

    /**
     * Create techno
     * 
     * @Route("/api/techno", name="api_techno_post", methods="POST")
     */
    public function techno(Request $request, SerializerInterface $serializer, EntityManagerInterface $entityManager, ValidatorInterface $validator)
    {
        $jsonContent = $request->getContent();


        $techno = $serializer->deserialize($jsonContent, Technos::class, 'json');

        $errors = $validator->validate($techno);
        if (count($errors) > 0) {
            return $this->json($this->generateErrors($errors), Response::HTTP_UNPROCESSABLE_ENTITY);
        }

        $entityManager->persist($techno);
        $entityManager->flush();

        return $this->redirectToRoute(
            'api_techno_get_one',
            [
                'id' => $techno->getId()
            ],
            Response::HTTP_CREATED
        );

        return $this->json(
            $techno,
            Response::HTTP_CREATED,
            [
                'Location' => $this->generateUrl('api_techno_get_one', ['id' => $techno->getId()])
            ],
            ['groups' => 'technos_get']
        );
    }

    /**
     * Edit techno (PUT)
     * 
     * @Route("/api/techno/{id<\d+>}", name="api_techno_put", methods={"PUT", "PATCH"})
     */
    public function putAndPatch(Technos $techno = null, EntityManagerInterface $em, SerializerInterface $serializer, Request $request, ValidatorInterface $validator)
    {
        if ($techno === null) {
            return $this->json(['error' => 'Element non trouvé.'], Response::HTTP_NOT_FOUND);
        }

        $jsonContent = $request->getContent();

        $serializer->deserialize(
            $jsonContent,
            techno::class,
            'json',
            [AbstractNormalizer::OBJECT_TO_POPULATE => $techno]
        );

        $errors = $validator->validate($techno);
        if (count($errors) > 0) {
            return $this->json($this->generateErrors($errors), Response::HTTP_UNPROCESSABLE_ENTITY);
        }
        $em->flush();

        return $this->json(['message' => 'Element modifié.'], Response::HTTP_OK);
    }

    /**
     * Delete techno
     * 
     * @Route("/api/techno/{id<\d+>}", name="api_techno_delete", methods="DELETE")
     */
    public function delete(Technos $techno = null, EntityManagerInterface $em)
    {
        if ($techno === null) {
            return $this->json(['error' => 'Element non trouvé.'], Response::HTTP_NOT_FOUND);
        }

        $em->remove($techno);
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
