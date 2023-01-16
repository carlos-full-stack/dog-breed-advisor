<?php

namespace App\Tests;

use App\Controller\DogController;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;


class DogControllerTest extends KernelTestCase
{

    public function testDogControllerIsInstantiable()
    {
        $dog = new DogController;
        $this->assertInstanceOf( DogController::class, $dog);
    }

    public function testShowDogTestFunctionReturnsShowDogTestRender()
    {
        $dog = new DogController;
        $dog->showDogTest();

        $this->assertTrue($dog->render == 'dog/showDogForm.html.twig' );
    }




}
