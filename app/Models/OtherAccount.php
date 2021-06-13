<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OtherAccount extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'number_account',
        'user_id',
    ];
}
