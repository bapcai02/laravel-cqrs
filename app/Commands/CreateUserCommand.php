<?php
 
namespace App\Commands;

class CreateUserCommand
{
    public $name;
    public $email;
 
    public function __construct($data)
    {
        $this->name = $data['name'];
        $this->email = $data['email'];
    }
 
    public function getName()
    {
        return $this->name;
    }
 
    public function getEmail()
    {
        return $this->email;
    }
}