<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    use HasFactory;

    protected $fillable = ['code', 'discount'];

    public function users()
    {
        return $this->belongsToMany(User::class)->withTimestamps();
    }
}
