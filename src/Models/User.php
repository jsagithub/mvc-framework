<?php

namespace MVC\Models;

class User
{
    public $name;
    public $email;

    public function __construct($name, $email){
        $this->email = $email;
        $this->name = $name;
    }
}