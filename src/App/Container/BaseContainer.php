<?php

namespace App\Container;

abstract class BaseContainer
{
    /**
     * @return self
     */
    abstract public function create(): self;

    /**
     * @return mixed
     */
    abstract public function getContainer(): mixed;

    /**
     * @param string $name
     * @return mixed
     */
    abstract public function get(string $name): mixed;
}
