<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skpp extends Model
{
     //
    protected $table='skpp';
    protected $fillable =['nama_skpp','id_user'];
    protected $primaryKey = 'id_skpp';

    /**
     *
     * RELATION
     *
     */

    public function user(){
    	return $this->belongsTo('App\User','id_user');
    }
}
