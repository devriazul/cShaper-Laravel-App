<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class websiteController extends Controller
{
    public function __construct()
    {

    }

    public function index(){

        echo "Hello Riaz";
    }

    public function about(){

        echo "About Us";
    }
}
