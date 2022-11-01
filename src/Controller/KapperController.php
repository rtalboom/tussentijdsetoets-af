<?php

namespace App\Controller;

use App\Repository\TreatmentRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class KapperController extends AbstractController
{
    #[Route('/', name: 'app_kapper')]
    public function index(): Response
    {
        return $this->render('kapper/home.html.twig', [
            'controller_name' => 'KapperController',
        ]);
    }

//    /**
//     * @Route("/show", name"app_show")
//     */
//    public function show(TreatmentRepository $treatmentRepository)
//    {
//        return $this->render('kapper/home.html.twig')
//        $treatmentRepository = $treatmentRepository ->findAll();
//    }
}
