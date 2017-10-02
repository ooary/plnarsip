<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mcu extends Model
{
     //
    protected $table='mcu';
    protected $fillable =['nama_mcu','id_user'];
    protected $primaryKey = 'id_mcu';

    /**
     *
     * RELATION
     *
     */

    public function user(){
    	return $this->belongsTo('App\User','id_user');
    }
}
