<?php

namespace App\Controller;

use App\Entity\Profile;
use App\Repository\ProfileRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use Symfony\Component\Serializer\Normalizer\AbstractNormalizer;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ProfileController extends AbstractController
{
    /**
     * Get profiles
     * 
     * @Route("/api/profiles", name="api_profiles_get", methods="GET")
     */
    public function getAll(ProfileRepository $profileRepository): Response
    {
        $profiles = $profileRepository->findAll();

        return $this->json($profiles, Response::HTTP_OK, [], ['groups' => 'profiles_get']);
    }

    /**
     * Get one profile
     * 
     * @Route("/api/profile/{id}", name="api_profile_get_one", methods="GET")
     */
    public function getOne(Profile $profile = null): Response
    {
        if ($profile === null) {
            return $this->json(['message' => 'profile not found.'], Response::HTTP_NOT_FOUND);
        }

        return $this->json($profile, Response::HTTP_OK, [], ['groups' => 'profiles_get']);
    }

    /**
     * Create profile
     * 
     * @Route("/api/profile", name="api_profile_post", methods="POST")
     */
    public function profile(Request $request, SerializerInterface $serializer, EntityManagerInterface $entityManager, ValidatorInterface $validator)
    {
        $jsonContent = $request->getContent();


        $profile = $serializer->deserialize($jsonContent, Profile::class, 'json');

        $errors = $validator->validate($profile);
        if (count($errors) > 0) {
            return $this->json($this->generateErrors($errors), Response::HTTP_UNPROCESSABLE_ENTITY);
        }

        $entityManager->persist($profile);
        $entityManager->flush();

        return $this->redirectToRoute(
            'api_profile_get_one',
            [
                'id' => $profile->getId()
            ],
            Response::HTTP_CREATED
        );

        return $this->json(
            $profile,
            Response::HTTP_CREATED,
            [
                'Location' => $this->generateUrl('api_profile_get_one', ['id' => $profile->getId()])
            ],
            ['groups' => 'profiles_get']
        );
    }

    /**
     * Edit profile (PUT)
     * 
     * @Route("/api/profile/{id<\d+>}", name="api_profile_put", methods={"PUT", "PATCH"})
     */
    public function putAndPatch(Profile $profile = null, EntityManagerInterface $em, SerializerInterface $serializer, Request $request, ValidatorInterface $validator)
    {
        if ($profile === null) {
            return $this->json(['error' => 'Element non trouvé.'], Response::HTTP_NOT_FOUND);
        }

        $jsonContent = $request->getContent();

        $serializer->deserialize(
            $jsonContent,
            Profile::class,
            'json',
            [AbstractNormalizer::OBJECT_TO_POPULATE => $profile]
        );

        $errors = $validator->validate($profile);
        if (count($errors) > 0) {
            return $this->json($this->generateErrors($errors), Response::HTTP_UNPROCESSABLE_ENTITY);
        }
        $em->flush();

        return $this->json(['message' => 'Element modifié.'], Response::HTTP_OK);
    }

    /**
     * Delete profile
     * 
     * @Route("/api/profile/{id<\d+>}", name="api_profile_delete", methods="DELETE")
     */
    public function delete(Profile $profile = null, EntityManagerInterface $em)
    {
        if ($profile === null) {
            return $this->json(['error' => 'Element non trouvé.'], Response::HTTP_NOT_FOUND);
        }

        $em->remove($profile);
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
