<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{

    use HasFactory;
    //soft Delete
    use SoftDeletes;

    //Fillable

    protected $fillable  =['name','detail'];

    //Table Name
    //Hidden
    //TimeStamp
}
