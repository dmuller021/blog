<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use mysql_xdevapi\Table;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //SELECT * FROM blogs
        //$blogs = blog::where('blog_title', '=', 'cat girl review') // can use this method for login checks
          //  ->firstOrFail();

        $blogs = blog::all();

        return view('blogs.blog', [
            'blogs' => $blogs
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('blogs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        $blog = new Blog;
//        $blog->blog_title = $request->input('blog_title');
//        $blog->description = $request->input('blog_description');
//        $blog->save();

        $blog = blog::create([
            'blog_title' => $request->input('blog_title'),
            'description' => $request->input('blog_description')
        ]);

        return redirect('/blogs');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blogs = blog::find($id);


        return view('blogs.edit')->with('blogs', $blogs);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $blogs = blog::where('id', $id)
                ->update([
                    'blog_title' => $request->input('blog_title'),
                    'description' => $request->input('blog_description')
            ]);

        return redirect('/blogs');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blogs = blog::find($id);

        $blogs->delete();

        return redirect('/blogs');
    }
}
