<?php

namespace App\Container;

use DI\Container;
use DI\ContainerBuilder;
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
     * @return self
     * @throws Exception
     */
    public function create(): self
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
     * @return ContainerBuilder
     */
    public function getContainerBuilder(): ContainerBuilder
    {
        return $this->containerBuilder;
    }
}
