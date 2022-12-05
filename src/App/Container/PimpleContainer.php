<?php

/**
 * Copyright (c) 2022 Daniel Bueno
 * php version 8.1.12
 *
 * @category PHP
 * @package  PimpleContainer
 * @author   Daniel Bueno <mahavatar5d@gmail.com>
 * @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
 * @link     http://127.0.0.1/php-di-app
 */

namespace App\Container;

use Pimple\Container;

/**
 * BaseContainer abstract Class.
 *
 * @category Class
 * @package  PimpleContainer
 * @author   Daniel Bueno <mahavatar5d@gmail.com>
 * @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
 * @link     http://127.0.0.1/php-di-app
 */
class PimpleContainer extends BaseContainer
{
    protected Container $container;

    /**
     * Constructor.
     *
     * @param Container $container Concrete container
     */
    public function __construct(Container $container)
    {
        $this->container = $container;
    }

    /**
     * Gets a wrapper for concrete container.
     *
     * @return BaseContainer
     */
    public function create(): BaseContainer
    {
        return $this;
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
     */
    public function get(string $name): mixed
    {
        return $this->container->offsetGet($name);
    }
}
