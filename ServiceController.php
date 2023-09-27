<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ServiceController extends AbstractController
{
    #[Route('/service', name: 'app_service')]
    public function index(): Response
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'ServiceController',
        ]);
    }
    #[Route('/service', name: 'showservice')]
    public function showService($name): response
    {
        return $this->render('templates/service/showService.html.twig', [
            'name' => $name],
        );;
    }
    #[Route('/index', name: 'goToIndex')]
    public function goToIndex(): response
    {
        return $this->redirectToRoute('app_home');
    }

}
