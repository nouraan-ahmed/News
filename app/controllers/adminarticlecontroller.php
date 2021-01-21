<?php

namespace MVC\controllers;

use MVC\core\session;
use MVC\core\controller;
use MVC\models\article;
use MVC\core\helpers;
use MVC\models\category;

class adminarticlecontroller extends controller
{
    public $user_data;
    public $article;
    public $category;
    public function __construct()
    {
        Session::Start();
        $this->user_data = Session::Get('user');
        if (empty($this->user_data)) {
            echo 'class not access';
            die;
        }
        $this->article = new article();
        $this->category = new category();
    }
    public function index()
    {

        $data = $this->article->GetAllArticles();

        $this->view('back/article', ['title' => 'admin', 'data' => $data]);
    }
    public function add()
    {
        $data = $this->category->GetAllCategory();
        $this->view('back/addarticle', ['title' => 'admin', 'data' => $data]);
    }
    public function postadd()
    {

        $img = $_FILES['img'];
        move_uploaded_file($img['tmp_name'], 'img/' . $img['name']);
        $data = ['title' => $_POST['title'], 'paragraph' => $_POST['paragraph'], 'img' => $img['name'], 'category_id' => $_POST['list']];
        $d = $this->article->AddArticle($data);
        if ($d) {
            helpers::redirect('adminarticle/index');
        }
    }
    public function DeleteArticle($id)
    {

        $data = $this->article->DeleteArticle($id);

        if ($data) {
            helpers::redirect('adminarticle/index');
        }
    }
    public function update($id)
    {
        $data = $this->category->GetAllCategory();
        $dataarticle = $this->article->GetArticle($id);

        $this->view('back/updatearticle', ['title' => 'admin', 'dataarticle' => $dataarticle, 'data' => $data]);
    }
    public function postupdate()
    {
        if (!empty($_FILES['img']['name'])) {
            $img = $_FILES['img'];
            move_uploaded_file($img['tmp_name'], 'img/' . $img['name']);
            $dataarticle = ['title' => $_POST['title'], 'paragraph' => $_POST['paragraph'], 'img' => $img['name'], 'category_id' => $_POST['list']];
        } else {
            $dataarticle = ['title' => $_POST['title'], 'paragraph' => $_POST['paragraph'], 'category_id' => $_POST['list']];
        }

        $id = ['id' => $_POST['id']];
        // var_dump($id);
        // die;
        $dataarticle = $this->article->UpdateArticle($dataarticle, $id);

        if ($dataarticle) {
            helpers::redirect('adminarticle/index');
        }
    }
}
