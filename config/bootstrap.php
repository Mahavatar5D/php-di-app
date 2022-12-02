<?php

use App\Container\PHPDIContainer;
use App\Services\ServicoObterUsuario;
use DI\ContainerBuilder;

require_once __DIR__ . "/../vendor/autoload.php";

// Create DI container with definitions instance.
try {
    $containerBuilder = (new PHPDIContainer(new ContainerBuilder()));
    $containerBuilder->getContainerBuilder()
        ->addDefinitions(definitions());
    $container = $containerBuilder->create();
} catch (Exception $e) {
    return new Exception($e->getMessage());
}

try {
    $user = ServicoObterUsuario::obterUsuario($container);
} catch (Exception $e) {
    return new Exception($e->getMessage());
}

return $user;
