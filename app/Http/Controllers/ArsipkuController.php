<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sertifikat;
use File;

class ArsipkuController extends Controller
{

    public function index(Request $request){

   		// $sertifikat = Sertifikat::where('id_user',1)->get();
      $sertifikat = Sertifikat::all();

    	return View('arsipku.index',compact('sertifikat'));
    }

    public function sertifikat(Request $request){

   		
    	return View('arsipku.sertifikat.add');
    }

    public function uploadSertifikat(Request $request){
    	$file = $request->file('file');
    	$fileName = $file->getClientOriginalName();
        $path     = public_path() . DIRECTORY_SEPARATOR . 'sertifikat';
   	  	$file ->move($path,$fileName);
   		//save into image table
   		$data = [];
   		$data['nama_sertifikat'] = $fileName;
   		$data['id_user']=1;
   		$file = sertifikat::create($data);
   		return $file;
    }

    public function deleteSertifikat($id){
    	$data = Sertifikat::findOrfail($id);
    	$path     = public_path() . DIRECTORY_SEPARATOR . 'sertifikat'.DIRECTORY_SEPARATOR.$data->nama_sertifikat;
    	$data->delete();
    	Alert()->success(strtoupper($data->nama_sertifikat),'Berhasil di Hapus');
    	File::delete($path);
    	return Redirect()->back();

    }

}
