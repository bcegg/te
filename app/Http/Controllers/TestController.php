<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index(Request $request)
    {
        return view('index', ['txt' => '']);
    }
    public function post(Request $request)
    {
        $validate_rule = [
            'name' => 'required',
            'email' => 'required|email',
        ];
        $this->validate($request, $validate_rule);
        return view('index', ['txt' => '正しい入力です']);
    }
}