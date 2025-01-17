<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    use HasFactory;

    protected $fillable = ['edu_start', 'edu_end', 'school_name', 'school_description', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
