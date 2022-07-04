<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $table = "customers";
    protected $fillable = [
        'id','customer_name','customer_email','customer_phone','customer_password'
    ];
    public $timestamps = false;
}
