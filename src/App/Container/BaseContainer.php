<?php

namespace App\Container;

abstract class BaseContainer
{
    /**
     * @return self
     */
    abstract protected function create(): self;

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
