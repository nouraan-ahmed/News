<?php

namespace MVC\controllers;

use MVC\core\controller;
use MVC\models\category;
use MVC\models\article;

class homecontroller extends controller
{

    public $article;
    public function __construct()
    {
        $this->article = new article();
    }
    public function index()
    {
        $category = new category();
        $data = $category->GetAllCategory();
        $dataarticle = $this->article->GetAllArticles();
        // echo "<pre>";
        // var_dump($dataarticle);
        // die;
        $this->view('home/index', ['title' => 'home', 'data' => $data, 'dataarticle' => $dataarticle]);
    }
    public function details()
    {
        $this->view('home/details', ['title' => 'details']);
    }
    public function categoryarticles($id)
    {

        $dataarticle = $this->article->GetCategoryArticles($id);

        $category = new category();
        $data = $category->GetAllCategory();

        $da = $category->GetCategory($id);


        $this->view('home/categoryarticles', ['dataarticle' => $dataarticle, 'da' => $da, 'data' => $data]);
    }
}
