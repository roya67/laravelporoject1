<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    //
    public  function index()
    {
        $page="remmber";
         $name="roya";
        return view('welcome',compact('page','name'));
    }
    public function article($id)
    {
        return view ('article',compact('id'));

    }
}
