<?php

namespace App\Models;
use App\Models\Event;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tempat extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function event()
    {
        return $this->hasMany(Event::class, 'id_tempat','id');
    }
}
