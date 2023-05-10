<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SignupModel extends Model
{
    protected $table='_signup';
    protected $primeryKey='id';
    protected $fillebal=['username','email','Password'];
}
