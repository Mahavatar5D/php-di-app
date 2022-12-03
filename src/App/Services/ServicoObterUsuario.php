<?php

namespace App\Services;

use App\Container\BaseContainer;
use Exception;
use User\User;

final class ServicoObterUsuario
{
    /**
     * @param BaseContainer $container
     * @return User
     * @throws Exception
     */
    public static function obterUsuario(BaseContainer $container): User
    {
        try {
            return $container->get(User::class);
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }
}
