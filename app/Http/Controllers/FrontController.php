<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    
    public function home(){

        return  view('front_side.index');
        
    }

    public function departments(){

        return  view('front_side.departments');
        
    }

    public function doctors(){

        return  view('front_side.doctors');
        
    }

        public function about(){

        return  view('front_side.about');
        
    }
    
    public function contact (){

        return  view('front_side.contact');
        
    }
    
    public function login(){

        return  view('front_side.login');
        
    }

    public function signup(){

        return  view('front_side.signup');
        
    }

    
}
