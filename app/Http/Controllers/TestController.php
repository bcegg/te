<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
  public function index()
    {
        return view('index');
    }
  public function post(Request $request)
    {
        return view('thanks');
    }
}