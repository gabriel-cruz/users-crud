<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
   protected $table = 'users';

   protected $fillable = ['name', 'cpf', 'dt_birth', 'email', 'tel', 'address', 'city', 'state'];
}
