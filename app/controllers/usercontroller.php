<?php

namespace MVC\controllers;

use MVC\core\controller;
use MVC\models\user;
use GUMP;
use MVC\core\Session;
use MVC\core\helpers;

class usercontroller extends controller
{
    public function __construct()
    {
        Session::Start();
    }

    public function index()
    {

        echo 'user';
    }
    public function login()
    {
        $this->view('user/login', ['title' => 'login']);
    }
    public function postlogin()
    {
        $v = GUMP::is_valid($_POST, [
            'email' => 'required'
        ]);
        if ($v == 1) {
            $user = new user();
            $data = $user->GetUser($_POST['email'], $_POST['password']);
            session::set('user', $data);
            helpers::redirect('adminpost/index');
        }
    }
    public function register()
    {
        $this->view('user/register', ['title' => 'Register']);
    }
    public function postregister()
    {
        $v = GUMP::is_valid($_POST, [
            'email' => 'required'
        ]);
        if ($v == 1) {
            $user = new user();
            $user->InsertUser();
            // Session::Set('user', $data);
            // header("LOCATION:user/index");
        }
    }
}
