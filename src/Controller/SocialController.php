<?php

namespace App\Controller;

use App\Entity\Social;
use App\Repository\SocialRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use Symfony\Component\Serializer\Normalizer\AbstractNormalizer;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class SocialController extends AbstractController
{
    /**
     * Get socials
     * 
     * @Route("/api/socials", name="api_socials_get", methods="GET")
     */
    public function getAll(SocialRepository $socialsRepository): Response
    {
        $socials = $socialsRepository->findAll();

        return $this->json($socials, Response::HTTP_OK, [], ['groups' => 'socials_get']);
    }

    /**
     * Get one social
     * 
     * @Route("/api/social/{id}", name="api_social_get_one", methods="GET")
     */
    public function getOne(Social $social = null): Response
    {
        if ($social === null) {
            return $this->json(['message' => 'social not found.'], Response::HTTP_NOT_FOUND);
        }

        return $this->json($social, Response::HTTP_OK, [], ['groups' => 'socials_get']);
    }

    /**
     * Create social
     * 
     * @Route("/api/social", name="api_social_post", methods="POST")
     */
    public function social(Request $request, SerializerInterface $serializer, EntityManagerInterface $entityManager, ValidatorInterface $validator)
    {
        $jsonContent = $request->getContent();


        $social = $serializer->deserialize($jsonContent, Social::class, 'json');

        $errors = $validator->validate($social);
        if (count($errors) > 0) {
            return $this->json($this->generateErrors($errors), Response::HTTP_UNPROCESSABLE_ENTITY);
        }

        $entityManager->persist($social);
        $entityManager->flush();

        return $this->redirectToRoute(
            'api_social_get_one',
            [
                'id' => $social->getId()
            ],
            Response::HTTP_CREATED
        );

        return $this->json(
            $social,
            Response::HTTP_CREATED,
            [
                'Location' => $this->generateUrl('api_social_get_one', ['id' => $social->getId()])
            ],
            ['groups' => 'socials_get']
        );
    }

    /**
     * Edit social (PUT)
     * 
     * @Route("/api/social/{id<\d+>}", name="api_social_put", methods={"PUT", "PATCH"})
     */
    public function putAndPatch(Social $social = null, EntityManagerInterface $em, SerializerInterface $serializer, Request $request, ValidatorInterface $validator)
    {
        if ($social === null) {
            return $this->json(['error' => 'Element non trouvé.'], Response::HTTP_NOT_FOUND);
        }

        $jsonContent = $request->getContent();

        $serializer->deserialize(
            $jsonContent,
            social::class,
            'json',
            [AbstractNormalizer::OBJECT_TO_POPULATE => $social]
        );

        $errors = $validator->validate($social);
        if (count($errors) > 0) {
            return $this->json($this->generateErrors($errors), Response::HTTP_UNPROCESSABLE_ENTITY);
        }
        $em->flush();

        return $this->json(['message' => 'Element modifié.'], Response::HTTP_OK);
    }

    /**
     * Delete social
     * 
     * @Route("/api/social/{id<\d+>}", name="api_social_delete", methods="DELETE")
     */
    public function delete(Social $social = null, EntityManagerInterface $em)
    {
        if ($social === null) {
            return $this->json(['error' => 'Element non trouvé.'], Response::HTTP_NOT_FOUND);
        }

        $em->remove($social);
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
