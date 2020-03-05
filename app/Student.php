<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = 'student';
    protected $primaryKey = 'email';
    protected $keyType = 'string';
    public $timestamps =false;
    protected $fillable = ['email', 'name','pincode'];
}
