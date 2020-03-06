<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ratings extends Model
{
    protected $primarykey='id';

    public function Institution(){
        return $this->hasMany(Institution::class);
    }

    public function Users(){
        return $this->hasMany(Users::class);
    }
}
