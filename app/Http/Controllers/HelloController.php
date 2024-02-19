<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
  function index()
  {
    $name = "Tuan";
    return view("hello", ['uname' => $name]);
  }
}
