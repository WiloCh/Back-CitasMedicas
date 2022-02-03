<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pacienteModel extends Model
{
    use HasFactory;
    protected $fillable = ["pc_nombre", "pc_edad", "pc_telefono"];
}
