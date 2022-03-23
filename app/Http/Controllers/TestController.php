<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class TestController extends Controller
{
  public function index(Request $request)
    {
        return view('/index');
    }
  public function post(Request $request)
    {
      return redirect('/thanks');
    }
}