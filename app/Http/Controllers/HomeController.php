<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    /**
     * Show home page
     */
    public function index()
    {
      return view('welcome');
    }
}
