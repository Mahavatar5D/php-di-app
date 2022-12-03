<?php

namespace App\Container;

use DI\Container;
use DI\ContainerBuilder;
use DI\DependencyException;
use DI\NotFoundException;
use Exception;

class PHPDIContainer extends BaseContainer
{
    protected ContainerBuilder $containerBuilder;
    protected Container $container;

    /**
     * @param ContainerBuilder $containerBuilder
     */
    public function __construct(ContainerBuilder $containerBuilder)
    {
        $this->containerBuilder = $containerBuilder;
    }

    /**
     * @return BaseContainer
     * @throws Exception
     */
    public function create(): BaseContainer
    {
        try {
            $this->container = $this->containerBuilder->build();
            return $this;
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }

    /**
     * @return Container
     */
    public function getContainer(): Container
    {
        return $this->container;
    }

    /**
     * @param string $name
     * @return mixed
     * @throws Exception
     */
    public function get(string $name): mixed
    {
        try {
            return $this->container->get($name);
        } catch (DependencyException|NotFoundException $e) {
            throw new  Exception($e->getMessage());
        }
    }

    /**
     * @return ContainerBuilder
     */
    public function getContainerBuilder(): ContainerBuilder
    {
        return $this->containerBuilder;
    }
}
