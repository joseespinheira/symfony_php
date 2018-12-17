<?php
// src/Controller/AlunoController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AlunoController extends AbstractController
{
    /**
     * Matches /aluno exactly
     *
     * @Route("/aluno", name="aluno_list")
     */
    public function list()
    {
        
        return $this->render('aluno/index.html.twig');
        // ...
    }

    /**
     * Matches /aluno/*
     *
     * @Route("/aluno/{slug}", name="aluno_show")
     */
    public function show($slug)
    {
        // $slug will equal the dynamic part of the URL
        // e.g. at /aluno/yay-routing, then $slug='yay-routing'

        // ...
        $aluno = Aluno::findOrFail($id);

        return view('aluno.show', compact('aluno'));
    }
    public function delete($slug)
    {
        // $slug will equal the dynamic part of the URL
        // e.g. at /aluno/yay-routing, then $slug='yay-routing'

        // ...
    }
}