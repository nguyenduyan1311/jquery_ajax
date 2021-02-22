<?php

namespace App\Http\Controllers;

use App\Models\FuncJq;
use Illuminate\Http\Request;

class ListController extends Controller
{
    //
    function index(){
        $list = FuncJq::all();
        return view('welcome',compact('list'));
    }
}
