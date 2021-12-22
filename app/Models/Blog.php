<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $table = 'blogs'; //fetching database

    protected $primaryKey = 'id'; // allows you to change primary key or remove it by equalling it to false.


    protected $fillable = ['blog_title', 'description']; // VERY IMPORTANT IF YOU WANT TO INSERT WITH AN ARRAY!!!!!

}
