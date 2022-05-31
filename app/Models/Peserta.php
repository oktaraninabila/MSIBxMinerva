<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peserta extends Model
{
    use HasFactory;

    // protected $guarded = [];
    protected $fillable = [
        'post_id', 'nama', 'email', 'notelp', 'instansi', 'domisili'
    ];

    public function posts()
    {
        return $this->belongsTo('App\Models\Post');
    }
}