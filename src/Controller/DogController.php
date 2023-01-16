<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DogController extends AbstractController
{
    public $breedName;
    public $goodWithChildren;
    public $goodWithOtherDogs;
    public $shedding;
    public $grooming;
    public $drooling;
    public $coatlength;
    public $goodWithStrangers;
    public $playfulness;
    public $protectiveness;
    public $trainability;
    public $energy;
    public $barking;
    public $size;
    public $type; 



    #[Route('/dog', name: 'app_dog')]
    public function index(): Response
    {
        return $this->render('dog/index.html.twig', [
            'controller_name' => 'DogController',
        ]);
    }
}
