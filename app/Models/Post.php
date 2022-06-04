<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = [
        'title', 'price', 'content', 'date', 'month', 'time', 'category_id', 'featured'
    ];

    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }

    public function pesertas()
    {
        return $this->hasMany('App\Models\Peseta');
    }
}
