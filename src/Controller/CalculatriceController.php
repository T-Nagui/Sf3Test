<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CalculatriceController extends Controller
{
    /**
     * @Route("/lagarder/calculatrice", name="calculatrice")
     */
    public function index()
    {
        return $this->render('calculatrice/index.html.twig', [
            'controller_name' => 'CalculatriceController',
        ]);
    }
}
