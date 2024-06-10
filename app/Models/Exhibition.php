<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exhibition extends Model
{
    use HasFactory;

    public $table = "exhibitions";

    protected $fillable = [
        'name',
        'image',
        'year',
        'images',
        'status',
    ];

    protected $casts = [
        'images' => 'array',
    ];
}