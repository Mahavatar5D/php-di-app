<?php

namespace App\Tests;

use App\Container\PimpleContainer;
use Exception;
use PHPUnit\Framework\TestCase;
use Pimple\Container;
use User\Services\UserService;
use User\User;

class PimpleContainerTest extends TestCase
{
    /**
     * @throws Exception
     */
    public function testReturnUserObject(): void
    {
        // Create Pimple container with definitions instance.
        $containerBuilder = new PimpleContainer(new Container());
        $containerBuilder->getContainer()->offsetSet(User::class, new User());
        $container = $containerBuilder->create();

        try {
            $user = UserService::getUser($container);
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }

        $this->assertInstanceOf(User::class, $user);
    }
}
