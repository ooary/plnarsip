<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sertifikat extends Model
{
    //
    protected $table='sertifikat';
    protected $fillable =['nama_sertifikat'];
    protected $primaryKey = 'id_sertifikat';

    /**
     *
     * RELATION
     *
     */

    // public function user(){
    // 	return $this->belongsTo('App\User','id_user');
    // }
    
}
