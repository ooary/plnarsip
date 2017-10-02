<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sppd extends Model
{
    //
     protected $table='sppd';
    protected $fillable =['nama_sppd','id_user'];
    protected $primaryKey = 'id_sppd';

    /**
     *
     * RELATION
     *
     */

    public function user(){
    	return $this->belongsTo('App\User','id_user');
    }
}
