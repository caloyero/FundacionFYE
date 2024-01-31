<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    public function administrador()
    {
        return $this->hasOne(Administrador::class);
    }

    public function seguidor()
    {
        return $this->hasOne(Seguidor::class);
    }
}
