<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
   protected $table = 'users';

   protected $fillable = ['name', 'cpf', 'email', 'dt_birth', 'tel', 'address', 'city', 'state'];
}
