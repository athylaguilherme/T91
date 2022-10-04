<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pessoa extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'pessoas';
    protected $primaryKey = 'id_pessoas';
    protected $dates = ['dt_nascimento', 'created_at', 'update_at'];
    protected $fillable = ['nome','sobrenome','dt_nascimento','email'];
}