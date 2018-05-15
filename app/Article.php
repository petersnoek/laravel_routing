<?php

namespace App;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    public static function  getArticlesWithCategory($id) {
        return DB::table('articles')
            ->select('id', 'category_id', 'name')
            ->where('category_id', $id)
            ->get();
    }
}
