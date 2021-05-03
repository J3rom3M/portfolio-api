<?php

namespace App\Controller;

use App\Entity\Diplomas;
use App\Repository\DiplomasRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use Symfony\Component\Serializer\Normalizer\AbstractNormalizer;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class DiplomaController extends AbstractController
{
    /**
     * Get diplomas
     * 
     * @Route("/api/diplomas", name="api_diplomas_get", methods="GET")
     */
    public function getAll(DiplomasRepository $diplomasRepository): Response
    {
        $diplomas = $diplomasRepository->findAll();

        return $this->json($diplomas, Response::HTTP_OK, [], ['groups' => 'diplomas_get']);
    }

    /**
     * Get one diploma
     * 
     * @Route("/api/diploma/{id}", name="api_diploma_get_one", methods="GET")
     */
    public function getOne(Diplomas $diploma = null): Response
    {
        if ($diploma === null) {
            return $this->json(['message' => 'diploma not found.'], Response::HTTP_NOT_FOUND);
        }

        return $this->json($diploma, Response::HTTP_OK, [], ['groups' => 'diplomas_get']);
    }

    /**
     * Create diploma
     * 
     * @Route("/api/diploma", name="api_diploma_post", methods="POST")
     */
    public function diploma(Request $request, SerializerInterface $serializer, EntityManagerInterface $entityManager, ValidatorInterface $validator)
    {
        $jsonContent = $request->getContent();


        $diploma = $serializer->deserialize($jsonContent, Diplomas::class, 'json');

        $errors = $validator->validate($diploma);
        if (count($errors) > 0) {
            return $this->json($this->generateErrors($errors), Response::HTTP_UNPROCESSABLE_ENTITY);
        }

        $entityManager->persist($diploma);
        $entityManager->flush();

        return $this->redirectToRoute(
            'api_diploma_get_one',
            [
                'id' => $diploma->getId()
            ],
            Response::HTTP_CREATED
        );

        return $this->json(
            $diploma,
            Response::HTTP_CREATED,
            [
                'Location' => $this->generateUrl('api_diploma_get_one', ['id' => $diploma->getId()])
            ],
            ['groups' => 'diplomas_get']
        );
    }

    /**
     * Edit diploma (PUT)
     * 
     * @Route("/api/diploma/{id<\d+>}", name="api_diploma_put", methods={"PUT", "PATCH"})
     */
    public function putAndPatch(Diplomas $diploma = null, EntityManagerInterface $em, SerializerInterface $serializer, Request $request, ValidatorInterface $validator)
    {
        if ($diploma === null) {
            return $this->json(['error' => 'Element non trouvé.'], Response::HTTP_NOT_FOUND);
        }

        $jsonContent = $request->getContent();

        $serializer->deserialize(
            $jsonContent,
            diploma::class,
            'json',
            [AbstractNormalizer::OBJECT_TO_POPULATE => $diploma]
        );

        $errors = $validator->validate($diploma);
        if (count($errors) > 0) {
            return $this->json($this->generateErrors($errors), Response::HTTP_UNPROCESSABLE_ENTITY);
        }
        $em->flush();

        return $this->json(['message' => 'Element modifié.'], Response::HTTP_OK);
    }

    /**
     * Delete diploma
     * 
     * @Route("/api/diploma/{id<\d+>}", name="api_diploma_delete", methods="DELETE")
     */
    public function delete(Diplomas $diploma = null, EntityManagerInterface $em)
    {
        if ($diploma === null) {
            return $this->json(['error' => 'Element non trouvé.'], Response::HTTP_NOT_FOUND);
        }

        $em->remove($diploma);
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
