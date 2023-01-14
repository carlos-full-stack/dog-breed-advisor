<?php

namespace App\Controller;

use ErrorException;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpClient\HttpClient;

class ApiRequestController extends AbstractController
{

    /**
     * 
     *  Check API response
     * 
     */


    public function getApiResponse()
    {
       $client = HttpClient::create([
        'headers' => [ 'x-api-key' => 'T6q2g5vQBrQGuKKmwaph5w==A6k5Am9XP5ZbJHeW'],
    ]);
       $response = $client->request('GET', 'https://api.api-ninjas.com/v1/dogs', [ 
        'query' => [ 'name' => 'akita'],]);

       return $response->getStatusCode();
       
    }
    }

