<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profesor extends Model
{
    use HasFactory;
    
    protected $fillable = ["nombre", "apellidos", "email", "nif", "departamento_id"];
    
    public function departamento(){
        return $this->belongsTo(Departamento::class);
    }
}
