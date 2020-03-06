<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Institution extends Model
{
    protected $primarykey='id';

    public function Providers(){
        return $this->hasMany(Providers::class);
    }

    public function Ratings(){
        return $this->belongsTo(Ratings::class);
    }
}
