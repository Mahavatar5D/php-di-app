<?php

namespace App\Container;

use Pimple\Container;

class PimpleContainer extends BaseContainer
{
    protected Container $container;

    public function __construct(Container $container)
    {
        $this->container = $container;
    }

    /**
     * @return BaseContainer
     */
    public function create(): BaseContainer
    {
        return $this;
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
     */
    public function get(string $name): mixed
    {
        return $this->container->offsetGet($name);
    }
}
