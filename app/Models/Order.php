<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Order extends Model
{
    use HasFactory, HasTranslations;

    public $translatable = [""];

    protected $fillable = [
        'user_id',
        'maid_id',
        'type',
        'status_id',
        'book_ticket',
        'deliver_service',
    ];

    protected $casts = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function maid()
    {
        return $this->belongsTo(Maid::class);
    }

    public function status()
    {
        return $this->belongsTo(Status::class);
    }

    public function statuses()
    {
        return $this->hasMany(OrderStatus::class);
    }
}
