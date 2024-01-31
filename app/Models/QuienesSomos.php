<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
class QuienesSomos extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre', 'contenido', 'imagen','user_id'
    ];
    public function usuario()
    {
        return $this->belongsTo(User::class);
    }
}
