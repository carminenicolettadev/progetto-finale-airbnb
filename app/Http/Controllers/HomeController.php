<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Flat;
class HomeController extends Controller
{


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
     public function index()
     {

         $flatsevidency = Flat::orderBy('created_at', 'desc')
         ->take(8)
         ->get();

         $flatsrates = Flat::orderBy("rate","desc")->take(6)->get();

         return view('welcome',compact('flatsevidency','flatsrates'));




     }
}
