<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Article;

class CategoryController extends Controller
{
    public function index($id) {
        $articles_in_category = DB::table('articles')
            ->select('id', 'category_id', 'name')
            ->where('category_id', $id)
            ->get();

        var_dump($articles_in_category);


        die("CategoryController -> index(" . $id. ")");
    }
}
