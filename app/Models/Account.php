<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'number_account',
        'saldo',
        'status',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function movements()
    {
    	return $this->hasMany(Movement::class);
    }
}