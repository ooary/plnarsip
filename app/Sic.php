<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sic extends Model
{
    protected $table='sic';
    protected $fillable =['nama_sic','id_user'];
    protected $primaryKey = 'id_sic';

    /**
     *
     * RELATION
     *
     */

    public function user(){
    	return $this->belongsTo('App\User','id_user');
    }
}
