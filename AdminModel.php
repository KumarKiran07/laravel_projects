<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminModel extends Model
{
    protected $table='admin';
    protected $primeryKey='id';
    protected $fillebal=['email','Password'];
}
