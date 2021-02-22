<?php

namespace App\Http\Controllers;

use App\Models\Fej;
use Illuminate\Http\Request;

class ListController extends Controller
{
    //
    function index(){
        $list = Fej::all();
        return view('welcome',compact('list'));
    }
}
