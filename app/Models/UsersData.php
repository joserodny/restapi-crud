<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UsersData extends Model
{
    protected $fillable = [
        'name',
        'email',
    ];
}
