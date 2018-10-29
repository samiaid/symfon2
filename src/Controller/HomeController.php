<?php
// src/Controller/LuckyController.php
namespace App\Controller;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class HomeController extends AbstractController
{
    /**
     * @Route("/url")
     */
    public function index()
    {
        $number = random_int(0, 100);

        return $this->render('lucky/home.html.twig', [
            'number' => $number,
        ]);
    }
}