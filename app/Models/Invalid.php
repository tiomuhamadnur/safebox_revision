<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invalid extends Model
{
    use HasFactory;
    protected $table = 'invalid';
    protected $guarded = [];
}