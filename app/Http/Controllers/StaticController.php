<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticController extends Controller
{
    //
    function index(){
        return view('welcome');
    }

    function about(){
        return view('about');
    }
    
    function contact(){
        return view('contact');
    }
    
    function store($cat = null, $item=null){
        if(isset($cat) && isset($item)){
            return "You are viewing the $item in the $cat category";
        }elseif(isset($cat)){
            return "You are viewing the $cat category";
        }else{
            return "You are viewing the store";
        }
    }

}
