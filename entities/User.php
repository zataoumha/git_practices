<?php

class User {

    public function __construct(private string $name, private string $email, private string $password, private array $roles, private string $username)
    {

    }
}