<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dica extends Model
{
    protected $table = "dicas";

    public function tipo()
    {
    	return $this->belongsTo('App\Tipo','tipo_id');
    }
}
