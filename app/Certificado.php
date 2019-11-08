<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Certificado extends Model
{
    protected $guarded = [];

    public function riesgo()
    {
    	return $this->belongsTo(Riesgo::class);
    }

    public function user()
    {
    	return $this->belongsTo(User::class);
    }
}
