<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class userController extends Controller
{
    function index(){
        return view('admin.dashboard');
    }
    function website(){
        $response=Http::get('http://127.0.0.1:8000/api/dataget');
   $data=$response->json()['data'];
        return view('user.website',compact('data'));

    }
}
