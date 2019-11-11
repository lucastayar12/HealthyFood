<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tipo extends Model
{
    public function dicas()
    {
    	return $this->hasMany('App\Dica','tipo_id');
    }
}
