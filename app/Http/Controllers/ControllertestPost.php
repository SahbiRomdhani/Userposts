<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllertestPost extends Controller
{
    public function index(){
        $data=array(
            'title'=>'Title Var',
            'services'=>['web design','Prog','Hello :D']
        );
        return view('pages.posts')->with($data);
    }
}
