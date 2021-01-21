<?php

namespace MVC\models;

use MVC\core\model;

class user extends model
{
    public function GetAllUsers()
    {
        $data = model::db()->rows("SELECT * FROM `user`");
        return $data;
    }
    public function GetUser($email, $password)
    {
        $data = model::db()->row("SELECT * FROM `user` WHERE `email`='$email'&& `password`='$password'");
        return $data;
    }
    public function InsertUser()
    {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $pass = $_POST['password'];
        model::db()->insert('user', ['name' => $name, 'email' => $email, 'password' => $pass]);
        // model::db()->run("INSERT INTO `user`(`name`, `email`, `password`) VALUES ('$_POST['username']','$_POST['email']','$_POST['password'])");

    }
}
