<?php

namespace User;

use Database\Database;

class User
{
    private Database $database;

    public function __construct(Database $database)
    {
        $this->database = $database;
        $this->database->connect();
    }
}
