<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
    use HasFactory;
    protected $guarded = ["id"];


    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    public function etat()
    {
        return $this->belongsTo(Etat::class);
    }

    public function type()
    {
        return $this->belongsTo(Type::class);
    }

    public function pointages()
    {
        return $this->hasMany(Pointage::class);
    }
}
