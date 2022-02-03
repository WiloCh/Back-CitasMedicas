<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class citaModel extends Model
{
    use HasFactory;
    protected $fillable = ["md_id", "pc_id", "ct_fecha", "ct_hora"];
}
