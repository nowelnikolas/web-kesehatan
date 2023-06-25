<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Post extends Model
{
    use HasFactory, Sluggable;

    protected $fillable = ['title', 'excerpt', 'body', 'image'];

    public function scopeFilter($query, array $filters)
{
    
    $query->when($filters['search'] ?? false, function($query, $search) {
        return $query->where(function($query) use ($search) {
             $query->where('title', 'like', '%' . $search . '%')
                         ->orWhere('body', 'like', '%' . $search . '%');
         });
     });

}
    Public function getRouteKeyName()
    {
        return 'slug';
    }


    Public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }



}

