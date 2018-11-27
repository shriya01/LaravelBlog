<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class BlogController extends Controller
{
    
    public function index()
    {
    return view('welcome');
    }
}
