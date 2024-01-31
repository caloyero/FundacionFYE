<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
class Integrantes extends Model
{
    use HasFactory;
    protected $fillable = ['nombre','cargo','imagen','leyenda','user_id'];
    public function usuario()
    {
        return $this->belongsTo(User::class);
    }
}
