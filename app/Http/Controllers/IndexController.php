<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Driver;

class IndexController extends Controller
{
  public function index(){
    $drivers = Driver::all();

    dd($drivers);

    //return view("index", compact('vivo'));
  }
}
