<?php

namespace App\Tests;

use App\Controller\ApiRequestController;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class ApiRequestControllerTest extends KernelTestCase
{
    public function testSomething(): void
    {
        $kernel = self::bootKernel();

        $this->assertSame('test', $kernel->getEnvironment());
        // $routerService = static::getContainer()->get('router');
        // $myCustomService = static::getContainer()->get(CustomService::class);
    }

    public function testApiRequestCallSucceeded()
    {
        $apiRequestController = new ApiRequestController;
        $responseCode = $apiRequestController->getApiResponse();

        $this->assertEquals(200, $responseCode);


    }
}
