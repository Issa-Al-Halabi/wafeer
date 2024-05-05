<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Maid extends Model
{
    use HasFactory, HasTranslations;

    public $translatable = ['first_name', 'last_name', 'nationality', 'description', 'languages'];

    protected $fillable = [
        'first_name',
        'last_name',
        'age',
        'nationality',
        'description',
        'languages',
        'image',
        'video',
    ];

    protected $casts = [
        'languages' => 'array',
    ];

    public function order()
    {
        return $this->hasOne(Order::class);
    }
}
