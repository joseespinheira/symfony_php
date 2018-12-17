<?php
// src/Controller/DefaultController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    /**
     * Matches /aluno exactly
     *
     * @Route("/aluno", name="aluno_list")
     */
    public function index()
    {
        
        return $this->render('home/index.html.twig');
        // ...
    }
}