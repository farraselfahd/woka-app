<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Billing extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'name',
        'phone',
        'address',
        'province',
        'city',
        'post_code'
    ];

    public function user() {
        return $this->belongsTo('App\User', 'user_id');
    }
}
