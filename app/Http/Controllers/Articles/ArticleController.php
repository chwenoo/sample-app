<?php

namespace App\Http\Controllers\Articles;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = [
            ['id' => '1', 'name' => 'article one'],
            ['id' => '2', 'name' => 'article two'],
            ['id' => '3', 'name' => 'article three']
        ];
        return view('articles.index', compact('articles'));
    }
}
