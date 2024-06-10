<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    use HasFactory;

    public $table = "recipes";

    protected $fillable = [
        "name",
        "description",
        "image",
        "video",
        "preparation",
        "status",
    ];
}