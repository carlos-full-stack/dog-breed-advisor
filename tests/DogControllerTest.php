<?php

namespace App\Tests;

use App\Controller\DogController;
use App\Entity\Dog;
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

    public function testDogIsInstantiable()
    {
        $dog = new Dog;
        $this->assertInstanceOf( Dog::class, $dog);
    }


    public function atributteProvider() 
    {
        $randomInt = random_int(1,5);

         return  [
                'Good With Children'  =>    [ 'good_with_children', 'setGoodWithChildren', $randomInt ],
                'Good With Other Dogs'  =>    [ 'good_with_other_dogs', 'setGoodWithOtherDogs', $randomInt ],
                'Shedding'  =>    [ 'shedding', 'setshedding', $randomInt ],
                'Grooming'  =>    [ 'grooming', 'setGrooming', $randomInt ],
                'Drooling'  =>    [ 'drooling', 'setDrooling', $randomInt ],
                'Coat Length'  =>    [ 'coat_length', 'setCoatLength', $randomInt ],
                'Good With Strangers'  =>    [ 'good_with_strangers', 'setGoodWithStrangers', $randomInt ],
                'Playfulness'  =>    [ 'playfulness', 'setPlayfulness', $randomInt ],
                'Protectiveness'  =>    [ 'protectiveness', 'setProtectiveness', $randomInt ],
                'Trainability'  =>    [ 'trainability', 'setTrainability', $randomInt ],
                'Energy'  =>    [ 'energy', 'setEnergy', $randomInt ],
                'Barking'  =>    [ 'barking', 'setBarking', $randomInt ],
                'House size'  =>    [ 'house_size', 'setHouseSize', $randomInt ]
                ];
    }

    /**
     * @dataProvider atributteProvider
     */


    public function testUserCanCreateDogWithRequiredAtributtes( $atributtte , $method, $randomInt )
    {

        $dog = new Dog;
        $dog->$method($randomInt);

        $this->assertClassHasAttribute( $atributtte , Dog::class);

        
    }



}
