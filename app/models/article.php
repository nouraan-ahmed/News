<?php

namespace MVC\models;

use MVC\core\model;

class article extends model
{
    public function GetAllArticles()
    {
        $data = model::db()->rows("SELECT * FROM `articlecategory`");
        return $data;
    }
    public function GetArticle($id)
    {
        $data = model::db()->row("SELECT * FROM `articlecategory` WHERE `id`= $id");
        return $data;
    }
    public function GetCategoryArticles($id)
    {
        $data = model::db()->rows("SELECT * FROM `article` WHERE `category_id`= $id");

        return $data;
    }

    public function AddArticle($data)
    {
        $data = model::db()->insert('article', $data);
        return $data;
    }
    public function DeleteArticle($id)
    {
        $data = model::db()->delete('article', ['id' => $id], $limit = 1);
        return $data;
    }
    public function UpdateArticle($data, $id)
    {
        // var_dump($data);
        // die;
        $data = model::db()->update('article', $data, $id);

        return $data;
    }
}
