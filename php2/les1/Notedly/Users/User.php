<?php

namespace Notedly\Users;

class User {
    private string $name;

    function __construct(string $name)
    {
        $this->name = $name;
    }
}