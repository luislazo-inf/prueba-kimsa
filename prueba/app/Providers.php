<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Providers extends Model
{
    protected $primarykey='id';

    public function Users(){
        return $this->belongsTo(Users::class);
    }

    public function Institution(){
        return $this->belongsTo(Institution::class);
    }

    public function Rating(){
        return $this->belongsTo(Ratings::class);
    }
}
