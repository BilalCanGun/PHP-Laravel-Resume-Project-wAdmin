<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'phone', 'email', 'website', 'address', 'profile_image',  'user_id'];



    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
