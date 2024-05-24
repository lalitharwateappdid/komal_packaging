<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index(){
        return view("site.home");
    }

    public function contact(){
        return view("site.contact");
    }
}