<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function about() {
        return 'Nama: Jiha Ramdhan <br> NIM: 2341720043 
        <br> Single Action Controller';
    }

}
