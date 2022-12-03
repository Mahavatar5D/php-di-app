<?php

namespace App\Container;

abstract class BaseContainer
{
    /**
     * @return mixed
     */
    abstract protected function create(): mixed;

    /**
     * @return mixed
     */
    abstract protected function getContainer(): mixed;

    /**
     * @param string $name
     * @return mixed
     */
    abstract protected function get(string $name): mixed;
}
