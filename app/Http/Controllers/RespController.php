<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RespController extends Controller
{
    public function index(){
        return view ('admin.resp.index');
    }
}
