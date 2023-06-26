<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mood extends Model
{
    use HasFactory;

    protected $fillable = ['mood', 'img', 'todo', 'username'];

    public function user()
    {
        return $this->belongsTo(User::class, 'username', 'username');
    }


}
