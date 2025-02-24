<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function hello() {
        return 'Hello World Controller';
    }

    // public function greeting(){
    //     return view('blog.hello', ['name' => 'Andi Controller']);
    // }

    public function greeting(){
        return view('blog.hello')
            ->with('name', 'Jiha')
            ->with('occupation', 'Polinema College Student');
    }
}
