<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Database\Schema\IndexDefinition;
use Illuminate\Http\Request;

class GetToKnowController extends Controller
{
    public function index(){
        return view ('gettoknow');
    }
}
