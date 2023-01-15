<?php

namespace App\Tests;

use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

use function PHPUnit\Framework\assertInstanceOf;

class DogControllerTest extends KernelTestCase
{

    public function testDogControllerIsInstantiable()
    {
        $dog = new Dog;
        assertInstanceOf($dog, Dog::class);
    }
}
