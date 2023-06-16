<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    public function search(){
        return view ('search');
    }

    public function searching(Request $request){
        if ($request->has('search')) {
            $items = DB::table('articles')
                    ->where('title','LIKE','%'.$request->search.'%')->get();
        } else {
            $items = DB::table('articles')
                    ->all();
        }

        $view_data = [
            'items' => $items,
        ];

        return view ('search', $view_data);
    }
}
