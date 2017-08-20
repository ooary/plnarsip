<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class ArsipController extends Controller
{
     //
    public function index(Request $request){

    	$data = user::where('role','pegawai')->get();
    	return View('arsip.index',compact('data'));
    }

    
}
