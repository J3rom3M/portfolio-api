<?php

namespace App\Controller;

use App\Entity\Post;
use App\Form\PostType;
use App\Repository\PostRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use Symfony\Component\Serializer\Normalizer\AbstractNormalizer;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class PostController extends AbstractController
{
    /**
     * Get posts
     * 
     * @Route("/api/posts", name="api_posts_get", methods="GET")
     */
    public function getAll(PostRepository $postRepository): Response
    {
        $posts = $postRepository->findAll();

        return $this->json($posts, Response::HTTP_OK, [], ['groups' => 'posts_get']);
    }

    /**
     * Get one post
     * 
     * @Route("/api/post/{id}", name="api_post_get_one", methods="GET")
     */
    public function getOne(Post $post = null): Response
    {
        // 404 ?
        if ($post === null) {
            // On envoie une vraie réponse en JSON
            return $this->json(['message' => 'Post not found.'], Response::HTTP_NOT_FOUND);
        }

        return $this->json($post, Response::HTTP_OK, [], ['groups' => 'posts_get']);
    }

    /**
     * Create post
     * 
     * @Route("/api/post", name="api_post_post", methods="POST")
     */
    public function post(Request $request, SerializerInterface $serializer, EntityManagerInterface $entityManager, ValidatorInterface $validator)
    {
        $jsonContent = $request->getContent();


        $post = $serializer->deserialize($jsonContent, Post::class, 'json');

        $errors = $validator->validate($post);
        if (count($errors) > 0) {
            return $this->json($this->generateErrors($errors), Response::HTTP_UNPROCESSABLE_ENTITY);
        }

        $entityManager->persist($post);
        $entityManager->flush();

        return $this->redirectToRoute(
            'api_post_get_one',
            [
                'id' => $post->getId()
            ],
            Response::HTTP_CREATED
        );

        return $this->json(
            $post,
            Response::HTTP_CREATED,
            [
                'Location' => $this->generateUrl('api_post_get_one', ['id' => $post->getId()])
            ],
            ['groups' => 'posts_get']
        );
    }

    /**
     * Edit post (PUT)
     * 
     * @Route("/api/post/{id<\d+>}", name="api_post_put", methods={"PUT", "PATCH"})
     */
    public function putAndPatch(Post $post = null, EntityManagerInterface $em, SerializerInterface $serializer, Request $request, ValidatorInterface $validator)
    {
        if ($post === null) {
            // On retourne un message JSON + un statut 404
            return $this->json(['error' => 'Element non trouvé.'], Response::HTTP_NOT_FOUND);
        }

        $jsonContent = $request->getContent();

        $serializer->deserialize(
            $jsonContent,
            Post::class,
            'json',
            [AbstractNormalizer::OBJECT_TO_POPULATE => $post]
        );

        $errors = $validator->validate($post);
        if (count($errors) > 0) {
            return $this->json($this->generateErrors($errors), Response::HTTP_UNPROCESSABLE_ENTITY);
        }
        $em->flush();

        return $this->json(['message' => 'Element modifié.'], Response::HTTP_OK);
    }

    /**
     * Delete post
     * 
     * @Route("/api/post/{id<\d+>}", name="api_post_delete", methods="DELETE")
     */
    public function delete(Post $post = null, EntityManagerInterface $em)
    {
        if ($post === null) {
            return $this->json(['error' => 'Element non trouvé.'], Response::HTTP_NOT_FOUND);
        }

        $em->remove($post);
        $em->flush();

        return $this->json(['message' => 'Element supprimé.'], Response::HTTP_OK);
    }

    /**
     * Génération des erreurs
     */
    private function generateErrors($errors)
    {
        // Si il y plus que 0 erreurs
        if (count($errors) > 0) {

            // On créé un tableau vide ou l'on stockera les erreurs
            $errorsList = [];

            // On boucle sur $errors pour extraire chaque erreur
            foreach ($errors as $error) {
                // On stock les erreurs (le champ en erreur en clé et le message en valeur)
                // (Tableau associatif)
                $errorsList[$error->getPropertyPath()] = $error->getMessage();
            }
        }

        return $errorsList;
    }
}
