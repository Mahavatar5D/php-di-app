<?php

namespace App\Tests;

use App\Container\PHPDIContainer;
use App\Services\ServicoObterUsuario;
use DI\ContainerBuilder;
use Exception;
use PHPUnit\Framework\TestCase;
use User\User;

class PHPDIContainerTest extends TestCase
{
    /**
     * @throws Exception
     */
    public function testReturnUserObject()
    {
        // Create PHP-DI container with definitions instance.
        $containerBuilder = new PHPDIContainer(new ContainerBuilder());
        $containerBuilder->getContainerBuilder()
            ->addDefinitions(definitions());
        $container = $containerBuilder->create();

        try {
            $user = ServicoObterUsuario::obterUsuario($container);
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }

        $this->assertInstanceOf(User::class, $user);
    }
}
