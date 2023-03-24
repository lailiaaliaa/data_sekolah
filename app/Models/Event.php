<?php

namespace App\Models;

use App\Models\Tempat;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class event extends Model
{
    use HasFactory;
    protected $guarded = [];
   



    public function tempat(){
        return $this->belongsTo(Tempat::class,'id_tempat','id');
    }
}
