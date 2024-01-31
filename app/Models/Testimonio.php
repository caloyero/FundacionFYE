<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
class Testimonio extends Model
{
    use HasFactory;
    protected $fillable =['titulo','imagen','leyenda','user_id'];
    public function usuario()
    {
        return $this->belongsTo(User::class);
    }
}
