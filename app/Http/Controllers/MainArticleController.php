<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class MainArticleController extends Controller
{
    public function index(){
        $articles = DB::table('articles')
                    ->select('id', 'title', 'thumbnail', 'description')
                    ->orderBy('id','desc')
                    ->offset(2)
                    ->limit(PHP_INT_MAX)
                    ->get();

        $first = DB::table('articles')
                    ->select('id', 'title', 'thumbnail', 'description')
                    ->orderBy('id','desc')
                    ->take(1)
                    ->first();

        $second = DB::table('articles')
                    ->select('id', 'title', 'thumbnail', 'description')
                    ->orderBy('id','desc')
                    ->skip(1)
                    ->take(1)
                    ->first();


        $viewdata = [
            'articles' => $articles,
            'first' => $first,
            'second' => $second,
                    ];

        return view ('dashboard',$viewdata);
    }
}
