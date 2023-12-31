<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminChat extends Model
{
    protected $fillable = ['name','product_name', 'content', 'email', 'user_id'];


    
    public function users()
    {
        return $this->belongsToMany(User::class)->withTimestamps();
    }
}
