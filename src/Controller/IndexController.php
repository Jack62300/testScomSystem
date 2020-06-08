<?php

namespace App\Controller;

use App\Entity\Personnes;
use App\Repository\PersonnesRepository;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class IndexController extends AbstractController
{
    /**
     * @Route("/", name="index")
     */
    public function index(PersonnesRepository $repoPersonnes)
    {
        $personnes = new Personnes();
        $personnes = $repoPersonnes->findAll();

        return $this->render('index/index.html.twig', [
            'personnes' => $personnes,
        ]);
    }

    /**
     * @Route("/add", name="index")
     */
    public function addPersonne()
    {
        return $this->render('index/index.html.twig', [
            'controller_name' => 'IndexController',
        ]);
    }

    /**
     * @Route("/edit", name="index")
     */
    public function editPersonne()
    {
        return $this->render('index/index.html.twig', [
            'controller_name' => 'IndexController',
        ]);
    }

    /**
     * @Route("/delete", name="index")
     */
    public function deletePersonne()
    {
        return $this->render('index/index.html.twig', [
            'controller_name' => 'IndexController',
        ]);
    }

    /**
     * @Route("/view", name="index")
     */
    public function viewPersonne()
    {
        return $this->render('index/index.html.twig', [
            'controller_name' => 'IndexController',
        ]);
    }
}
