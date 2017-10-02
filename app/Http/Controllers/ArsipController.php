<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User; 
use App\sertifikat;
use App\Mcu;
use App\Ads;
use App\Skpp;
use App\Sppd;
use App\Sic;
use File;
class ArsipController extends Controller
{
     // 
    private $pathSertifikat = 'sertifikat/';
    private $pathMcu = 'mcu/';
    private $pathAds = 'ads/';
    private $pathSppd = 'sppd/';
    private $pathSkpd = 'skpd/';
    private $pathSic = 'sic/';



    public function index(Request $request){

    	$data = user::where('role','pegawai')->get();
    	return View('arsip.index',compact('data'));
    }

    public function show(Request $request,$id){
    	$user = User::find($id);
    	// dd($user);	
    	$sertifikat = Sertifikat::where('id_user',$id)->get();
        $mcu = mcu::where('id_user',$id)->get();
        $ads = ads::where('id_user',$id)->get();
        $skpp = skpp::where('id_user',$id)->get();
        $sppd = sppd::where('id_user',$id)->get();
        $sic = sic::where('id_user',$id)->get();





    	return View('arsip.show',compact('sertifikat','user','mcu','ads','skpp','sppd','sic'));
    }

    /**
     *
     * SERTIFIKAT FUNCTION
     *
     */
    

    public function sertifikat(Request $request,$id){
        $user = User::find($id);
    	return View('arsipku.sertifikat.add',compact('id','user'));
    }

     public function uploadSertifikat(Request $request){
    	$file = $request->file('file');
    	$fileName = $file->getClientOriginalName();
        $path     = $this->pathSertifikat;
   	  	$file ->move($path,$fileName);
   		//save into image table
   		$data = [];
   		$data['nama_sertifikat'] = $fileName;
   		$data['id_user']=$request->id;
   		$file = sertifikat::create($data);
   		return $file;
    }


    public function deleteSertifikat($id){
    	$data = Sertifikat::findOrfail($id);
    	$path     = $this->pathSertifikat.$data->nama_sertifikat;
    	$data->delete();
    	Alert()->success(strtoupper($data->nama_sertifikat),'Berhasil di Hapus');
    	File::delete($path);
    	return Redirect()->back();

    }

     public function downloadSertifikat($name){
       $path = $this->pathSertifikat . $name ;
        if (file_exists($path))
        {
            // Send Download
            return Response()->download($path, $name, [
                'Content-Length: '. filesize($path)
            ]);
        }
        else
        {
            // Error
            exit('Requested file does not exist on our server!');
        }
    }

    /**
     *
     * MCU FUNCTION
     *
     */


     public function mcu(Request $request,$id){
        $user = User::find($id);
        return View('arsipku.mcu.add',compact('id','user'));
    }

     public function uploadMcu(Request $request){
        $file = $request->file('file');
        $fileName = $file->getClientOriginalName();
        $path     = $this->pathMcu . 'mcu';
        $file ->move($path,$fileName);
        //save into image table
        $data = [];
        $data['nama_mcu'] = $fileName;
        $data['id_user']=$request->id;
        $file = mcu::create($data);
        return $file;
    }


    public function deleteMcu($id){
        $data = mcu::findOrfail($id);
        $path     = $this->pathMcu .$data->nama_mcu;
        $data->delete();
        Alert()->success(strtoupper($data->nama_mcu),'Berhasil di Hapus');
        File::delete($path);
        return Redirect()->back();

    }

     public function downloadMcu($name){
       $path = $this->pathMcu . $name ;
        if (file_exists($path))
        {
            // Send Download
            return Response()->download($path, $name, [
                'Content-Length: '. filesize($path)
            ]);
        }
        else
        {
            // Error
            exit('Requested file does not exist on our server!');
        }
    }
     /**
     *
     * ADS FUNCTION
     *
     */


     public function ads(Request $request,$id){
        $user = User::find($id);
        return View('arsipku.ads.add',compact('id','user'));
    }

     public function uploadAds(Request $request){
        $file = $request->file('file');
        $fileName = $file->getClientOriginalName();
        $path     = $this->pathAds . 'ads';
        $file ->move($path,$fileName);
        //save into image table
        $data = [];
        $data['nama_ads'] = $fileName;
        $data['id_user']=$request->id;
        $file = ads::create($data);
        return $file;
    }


    public function deleteAds($id){
        $data = ads::findOrfail($id);
        $path     = $this->pathAds .$data->nama_ads;
        $data->delete();
        Alert()->success(strtoupper($data->nama_ads),'Berhasil di Hapus');
        File::delete($path);
        return Redirect()->back();

    }

     public function downloadAds($name){
       $path = $this->pathAds . $name ;
        if (file_exists($path))
        {
            // Send Download
            return Response()->download($path, $name, [
                'Content-Length: '. filesize($path)
            ]);
        }
        else
        {
            // Error
            exit('Requested file does not exist on our server!');
        }
    }
    
    /**
     *
     * SKPP FUNCTION
     *
     */


     public function skpp(Request $request,$id){
        $user = User::find($id);
        return View('arsipku.skpp.add',compact('id','user'));
    }

     public function uploadSkpp(Request $request){
        $file = $request->file('file');
        $fileName = $file->getClientOriginalName();
        $path     = $this->pathSkpp;
        $file ->move($path,$fileName);
        //save into image table
        $data = [];
        $data['nama_skpp'] = $fileName;
        $data['id_user']=$request->id;
        $file = skpp::create($data);
        return $file;
    }


    public function deleteSkpp($id){
        $data = skpp::findOrfail($id);
        $path     = $this->pathSkpp .$data->nama_skpp;
        $data->delete();
        Alert()->success(strtoupper($data->nama_skpp),'Berhasil di Hapus');
        File::delete($path);
        return Redirect()->back();

    }

     public function downloadSkpp($name){
       $path = $this->pathSkpp . $name ;
        if (file_exists($path))
        {
            // Send Download
            return Response()->download($path, $name, [
                'Content-Length: '. filesize($path)
            ]);
        }
        else
        {
            // Error
            exit('Requested file does not exist on our server!');
        }
    }
    
    /**
     *
     * SPPD FUNCTION
     *
     */


     public function sppd(Request $request,$id){
        $user = User::find($id);
        return View('arsipku.sppd.add',compact('id','user'));
    }

     public function uploadSppd(Request $request){
        $file = $request->file('file');
        $fileName = $file->getClientOriginalName();
        $path     = $this->pathSppd;
        $file ->move($path,$fileName);
        //save into image table
        $data = [];
        $data['nama_sppd'] = $fileName;
        $data['id_user']=$request->id;
        $file = sppd::create($data);
        return $file;
    }


    public function deleteSppd($id){
        $data = sppd::findOrfail($id);
        $path     = $this->pathSppd .$data->nama_sppd;
        $data->delete();
        Alert()->success(strtoupper($data->nama_skpp),'Berhasil di Hapus');
        File::delete($path);
        return Redirect()->back();

    }

     public function downloadSppd($name){
       $path = $this->pathSppd . $name ;
        if (file_exists($path))
        {
            // Send Download
            return Response()->download($path, $name, [
                'Content-Length: '. filesize($path)
            ]);
        }
        else
        {
            // Error
            exit('Requested file does not exist on our server!');
        }
    }

    /**
     *
     * SIC FUNCTION
     *
     */

     public function sic(Request $request,$id){
        $user = User::find($id);
        return View('arsipku.sic.add',compact('id','user'));
    }

     public function uploadSic(Request $request){
        $file = $request->file('file');
        $fileName = $file->getClientOriginalName();
        $path     = $this->pathSic;
        $file ->move($path,$fileName);
        //save into image table
        $data = [];
        $data['nama_sic'] = $fileName;
        $data['id_user']=$request->id;
        $file = Sic::create($data);
        return $file;
    }


    public function deleteSic($id){
        $data = Sic::findOrfail($id);
        $path     = $this->pathSic .$data->nama_sic;
        $data->delete();
        Alert()->success(strtoupper($data->nama_sic),'Berhasil di Hapus');
        File::delete($path);
        return Redirect()->back();

    }

     public function downloadSic($name){
       $path = $this->pathSppd . $name ;
        if (file_exists($path))
        {
            // Send Download
            return Response()->download($path, $name, [
                'Content-Length: '. filesize($path)
            ]);
        }
        else
        {
            // Error
            exit('Requested file does not exist on our server!');
        }
    }

    
    
}
