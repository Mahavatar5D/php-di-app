<?php

use User\User;
use function DI\create;

function definitions(): array
{
    return [
        "user" => create(User::class)
    ];
}
