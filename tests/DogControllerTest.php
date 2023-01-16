<?php

namespace App\Tests;

use App\Controller\DogController;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;


class DogControllerTest extends WebTestCase
{

    public function testDogControllerIsInstantiable()
    {
        $dog = new DogController;
        $this->assertInstanceOf( DogController::class, $dog);
    }

    public function testTestRouteShowsTestPage() : void
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/test');
        $this->assertSame("Test raza de perro ideal", $crawler->filter('title')->text());

    }



}
