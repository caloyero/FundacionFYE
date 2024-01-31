<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelPersona extends Model
{
    public function administrador()
    {
        return $this->hasOne(ModelAdministrador::class);
    }

    public function seguidor()
    {
        return $this->hasOne(ModelSeguidor::class);
    }
}
