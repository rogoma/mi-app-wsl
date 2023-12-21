<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Model\User;

class Pizza extends Model
{
    use HasFactory;

    protected $guarded = [];


    protected $casts = [
        'toppings' => 'array',        
    ];

    public function User(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
