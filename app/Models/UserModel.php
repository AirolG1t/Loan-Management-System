<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    use HasFactory;
    protected $table = 'users';
    protected $fillable = [
        'role_id',
        'first_name',
        'middlde_name',
        'last_name',
        'email',
        'password',
        'status'
    ];
}
