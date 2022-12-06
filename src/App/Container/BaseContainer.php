<?php

/**
 * Copyright (c) 2022 Daniel Bueno
 * php version 8.1.12
 *
 * @category PHP
 * @package  BaseContainer
 * @author   Daniel Bueno <mahavatar5d@gmail.com>
 * @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
 * @link     http://127.0.0.1/php-di-app
 */

namespace App\Container;

/**
 * BaseContainer abstract Class.
 *
 * @category Class
 * @package  BaseContainer
 * @author   Daniel Bueno <mahavatar5d@gmail.com>
 * @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
 * @link     http://127.0.0.1/php-di-app
 */
abstract class BaseContainer
{
    /**
     * Gets a wrapper for concrete container.
     *
     * @return self
     */
    abstract public function create(): self;

    /**
     * Gets a concrete container.
     *
     * @return mixed
     */
    abstract public function getContainer(): mixed;

    /**
     * Gets an entry of the container by its name.
     *
     * @param string $name Entry name or a class name.
     *
     * @return mixed
     */
    abstract public function get(string $name): mixed;

    /**
     * Define an object or a value in the container.
     *
     * @param string $name Entry name.
     * @param mixed $value Value, define objects.
     *
     * @return void
     */
    abstract public function set(string $name, mixed $value): void;
}
