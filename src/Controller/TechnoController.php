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
}
