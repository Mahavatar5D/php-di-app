<?php

namespace App\Tests;

use App\Container\PimpleContainer;
use App\Services\ServicoObterUsuario;
use Exception;
use PHPUnit\Framework\TestCase;
use Pimple\Container;
use User\User;

class PimpleContainerTest extends TestCase
{
    /**
     * @throws Exception
     */
    public function testReturnUserObject()
    {
        // Create Pimple container with definitions instance.
        $containerBuilder = new PimpleContainer(new Container());
        $containerBuilder->getContainer()->offsetSet(User::class, new User());
        $container = $containerBuilder->create();

        try {
            $user = ServicoObterUsuario::obterUsuario($container);
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }

        $this->assertInstanceOf(User::class, $user);
    }
}
