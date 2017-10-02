<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ads extends Model
{
     //
    protected $table='ads';
    protected $fillable =['nama_ads','id_user'];
    protected $primaryKey = 'id_ads';

    /**
     *
     * RELATION
     *
     */

    public function user(){
    	return $this->belongsTo('App\User','id_user');
    }
}
