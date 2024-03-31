<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageControl extends Controller
{
    public function page($name = 'index'){
        return view(@$name);
    } 
}
