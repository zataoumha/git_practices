<?php

class User {
    private $name;
    private $email;
    private $password;
    private $roles;

    public function __construct(string $name, string $email, string $password, array $roles)
    {
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
        $this->roles = $roles;
    }
}