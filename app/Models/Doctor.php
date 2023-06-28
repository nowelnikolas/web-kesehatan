<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'hospital', 'phone_number', 'address', 'province_id', 'city_id'];

    public function city()
    {
        return $this->belongsTo(city::class, 'city_id');
    }

    public function province()
    {
        return $this->belongsTo(province::class, 'province_id');
    }
}
