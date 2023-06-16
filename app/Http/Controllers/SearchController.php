<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Query\Builder;

class SearchController extends Controller
{

    public function searching(Request $request){
        if ($request->has('search')) {
            $items = DB::table('articles')
                    ->where('title','LIKE','%'.$request->search.'%')->get();
        } else {
            $items = DB::table('articles')
                    ->get();
        }

        $viewData = [
            'items' => $items,
        ];

        return view ('search', $viewData);
    }
}
