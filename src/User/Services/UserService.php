<?php

/**
 * Copyright (c) 2022 Daniel Bueno
 * php version 8.1.12
 *
 * @category PHP
 * @package  UserService
 * @author   Daniel Bueno <mahavatar5d@gmail.com>
 * @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
 * @link     http://127.0.0.1/php-di-app
 */

namespace User\Services;

use App\Container\BaseContainer;
use Exception;
use User\User;

/**
 * User Service Class.
 *
 * @category Class
 * @package  UserService
 * @author   Daniel Bueno <mahavatar5d@gmail.com>
 * @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
 * @link     http://127.0.0.1/php-di-app
 */
final class UserService
{
    /**
     * Get User from abstract container.
     *
     * @param BaseContainer $container Abstract container.
     *
     * @return User
     * @throws Exception
     */
    public static function getUser(BaseContainer $container): User
    {
        try {
            return $container->get(User::class);
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }
}
