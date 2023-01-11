<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    // protected $primaryKey = 'user_id';
    use HasFactory;

    // public function getOrder()
    // {
    //     return $this->hasOne(User::class, 'user_id');
    // }

    // public function getOrder()
    // {
    //     return $this->belongsTo(User::class);
    // }

    // public function user()
    // {
    //     return $this->hasOne(User::class, 'user_id');
    // }
}
