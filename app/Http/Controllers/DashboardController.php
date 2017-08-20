<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sertifikat;
class DashboardController extends Controller
{
    //
    public function index(){
    		// $sertifikat = Sertifikat::where('id_user',1)->get();
     	 $sertifikat = Sertifikat::all();

    	return View('dashboard.index',compact('sertifikat'));
    }

}
