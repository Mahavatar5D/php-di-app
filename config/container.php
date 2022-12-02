<?php

use Database\Database;
use User\User;
use function DI\create;

function definitions(): array
{
    return [
        "database" => create(Database::class),
        "user" => create(User::class)
    ];
}
