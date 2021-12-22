<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostsController extends Controller
{
    public function index()
    {
        $id = 7;
        // ->first() gets the first result of the query builder
        // ->find('value') fetches the value from query builder
        // ->count('value') amount of results in your database in this case 1 because we only found 1 number which is 7 ($id)
        // ->min('value') fetches the lowest int in query builder
        // ->max('value') fetches the highest int in query builder
        // ->sum('value') calculates the int values with +
        // ->avg('value') calculates the average int value of the query builder

        // ->insert([
        //      'blog_title' => 'Intro', 'body' => 'Hello I'm Dion'
        //  ]) inserts data into database

        // ->where('where_value', '=', int_value)
        // ->update([
        //      'blog_title' => 'New intro', 'body' => 'Hi I'm poop'
        // ]);

        // ->where('where, '=', int)


        $posts = DB::table('posts')
            ->where('id', $id)
            ->get();


        dd($posts); // dump and die function allows variables to be echo'd
    }
}
