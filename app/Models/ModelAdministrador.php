<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelAdministrador extends ModelPersona
{
    public function persona()
    {
        return $this->belongsTo(ModelPersona::class);
    }
}
