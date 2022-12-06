<?php

/**
 * Copyright (c) 2022 Daniel Bueno
 * php version 8.1.12
 *
 * @category PHP
 * @package  PHPDIContainer
 * @author   Daniel Bueno <mahavatar5d@gmail.com>
 * @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
 * @link     http://127.0.0.1/php-di-app
 */

namespace App\Container;

use DI\Container;
use DI\ContainerBuilder;
use DI\DependencyException;
use DI\NotFoundException;
use Exception;

/**
 * BaseContainer abstract Class.
 *
 * @category Class
 * @package  PHPDIContainer
 * @author   Daniel Bueno <mahavatar5d@gmail.com>
 * @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
 * @link     http://127.0.0.1/php-di-app
 */
class PHPDIContainer extends BaseContainer
{
    protected ContainerBuilder $containerBuilder;
    protected Container $container;

    /**
     * Constructor.
     *
     * @param ContainerBuilder $containerBuilder Helper to create and configure a Container.
     */
    public function __construct(ContainerBuilder $containerBuilder)
    {
        $this->containerBuilder = $containerBuilder;
    }

    /**
     * Gets a wrapper for concrete container.
     *
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
     * Gets a concrete container.
     *
     * @return Container
     */
    public function getContainer(): Container
    {
        return $this->container;
    }

    /**
     * Gets an entry of the container by its name.
     *
     * @param string $name Entry name or a class name.
     *
     * @return mixed
     * @throws Exception
     */
    public function get(string $name): mixed
    {
        try {
            return $this->container->get($name);
        } catch (DependencyException | NotFoundException $e) {
            throw new  Exception($e->getMessage());
        }
    }

    /**
     * Gets a helper to create and configure a Container.
     *
     * @return ContainerBuilder
     */
    public function getContainerBuilder(): ContainerBuilder
    {
        return $this->containerBuilder;
    }

    /**
     * Define an object or a value in the container.
     *
     * @param string $name Entry name.
     * @param mixed $value Value, define objects.
     *
     * @return void
     */
    public function set(string $name, mixed $value): void
    {
        $this->container->set($name, $value);
    }
}
