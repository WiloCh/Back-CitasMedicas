<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class medicoModel extends Model
{
    use HasFactory;
    protected $fillable = ["md_nombre", "md_especialidad"];
}
