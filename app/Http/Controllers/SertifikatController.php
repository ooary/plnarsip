<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sertifikat;
class SertifikatController extends Controller
{
    //
    public function deleteSertifikat($id){
        $image = Sertifikat::findOrfail($id);
        $path     = public_path() . DIRECTORY_SEPARATOR . 'sertifikat' .  DIRECTORY_SEPARATOR . $image->filename;
        File::delete($path);
        $image->delete();
        return Redirect()->back();
    }

    public function download($name){
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
}
