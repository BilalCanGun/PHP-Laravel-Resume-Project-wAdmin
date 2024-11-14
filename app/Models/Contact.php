<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    protected $fillable = [
        'social_name',
        'social_url',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}