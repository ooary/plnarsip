<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sertifikat;
use App\Mcu;
use App\Ads;
use App\Skpp;
use App\Sppd;
use App\Sic;
use Auth;
class DashboardController extends Controller
{
    //

    public function index(){
    		// $sertifikat = Sertifikat::where('id_user',1)->get();
        if (Auth::user()->role=="pegawai") {
             $sertifikat = Sertifikat::where('id_user',Auth::user()->id_user)->get();
             $mcu = mcu::where('id_user',Auth::user()->id_user)->get();
             $ads = ads::where('id_user',Auth::user()->id_user)->get();
             $skpp = skpp::where('id_user',Auth::user()->id_user)->get();
             $sppd = sppd::where('id_user',Auth::user()->id_user)->get();

            
        }else{
            $sertifikat = Sertifikat::all();
            $mcu = mcu::all();
            $sppd = sppd::all();
            $skpp = skpp::all();
            $ads = ads::all();



        }
    	return View('dashboard.index',compact('sertifikat','sppd','mcu','skpp','ads'));
    }
    /**
     *
     * SERTIFIKAT FUNCTION
     *
     */
    public function sertifikat(){
        $sertifikat = Sertifikat::where('id_user',Auth::user()->id_user)->get();
        return View('sertifikat.index',compact('sertifikat'));
    }
    public function downloadsertifikat($name){
       $path = public_path(). DIRECTORY_SEPARATOR . 'sertifikat' . DIRECTORY_SEPARATOR . $name ;
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
    public function ads(){
        $ads = ads::where('id_user',Auth::user()->id_user)->get();
        return View('ads.index',compact('ads'));
    }
    public function downloadads($name){
       $path = public_path(). DIRECTORY_SEPARATOR . 'ads' . DIRECTORY_SEPARATOR . $name ;
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
    public function skpp(){
        $skpp = skpp::where('id_user',Auth::user()->id_user)->get();
        return View('skpp.index',compact('skpp'));
    }
    public function downloadskpp($name){
       $path = public_path(). DIRECTORY_SEPARATOR . 'skpp' . DIRECTORY_SEPARATOR . $name ;
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
    public function sppd(){
        $sppd = sppd::where('id_user',Auth::user()->id_user)->get();
        return View('sppd.index',compact('sppd'));
    }
    public function downloadsppd($name){
       $path = public_path(). DIRECTORY_SEPARATOR . 'sppd' . DIRECTORY_SEPARATOR . $name ;
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
     * mcu FUNCTION
     *
     */
    public function mcu(){
        $mcu = mcu::where('id_user',Auth::user()->id_user)->get();
        return View('mcu.index',compact('mcu'));
    }
    public function downloadmcu($name){
       $path = public_path(). DIRECTORY_SEPARATOR . 'mcu' . DIRECTORY_SEPARATOR . $name ;
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
    
      public function sic(){
        $sic = sic::where('id_user',Auth::user()->id_user)->get();
        return View('sic.index',compact('sic'));
    }
    public function downloadsics($name){
       $path = public_path(). DIRECTORY_SEPARATOR . 'sic' . DIRECTORY_SEPARATOR . $name ;
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
