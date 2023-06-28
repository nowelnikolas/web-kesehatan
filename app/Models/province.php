<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class province extends Model
{
    use HasFactory;
    public function city()
    {
        return $this->belongsTo(city::class, 'province_id');
    }
}
