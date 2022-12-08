<?php
namespace App\Models;

use App\Models\Database;

class Category
{

    public static function getCategory($post_id){

        self::prepReq("SELECT * FROM category where id = :id", ["id" => $post_id]);
        $category = self::fetchData();

    }

    public static function getAllPostFromCategory($cat_id) {

        self::prepReq("SELECT * FROM post where id_category = :id", ["id" => $cat_id]);
        $allPost = self::fetchData();

    }

    public static function getAllCategories() {

        self::prepReq("SELECT * FROM category ORDER BY  nom");
        $allCategory = self::fetchData();

    }

}