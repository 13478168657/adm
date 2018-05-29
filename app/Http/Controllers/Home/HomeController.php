<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
// use App\Utils\VerifyImage;
class HomeController extends Controller
{

    public function index(Request $request){
    	// $verify = new VerifyImage();
    	// return $verify->createImage();
        return view('home.index');
    }
}
