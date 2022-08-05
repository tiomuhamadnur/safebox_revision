<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AlatRusak extends Model
{
    use HasFactory;
    protected $table = 'alat_rusak';
    protected $guarded = [];

    public function alat()
    {
        return $this->belongsTo(Alat::class);
    }
}