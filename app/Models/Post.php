<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use SoftDeletes;
    use HasFactory;
    protected $fillable = [
        'title', 'price', 'content', 'date', 'month', 'time', 'category_id', 'featured'
    ];

    protected $dates = ['deleted_at'];

    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }

    public function pesertas()
    {
        return $this->hasMany('App\Models\Peseta');
    }
}
