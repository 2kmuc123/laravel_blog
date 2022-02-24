<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\blog;


class BlogController extends Controller
{
    public function index()
    {
        $blog = new Blog();
        $blog = blog::paginate(4);
        //dd($blog);

        return view('blog.index', compact('blog'));
    }
    public function blog()
    {
        $blog = new Blog();
        $blog = blog::paginate(4);
        //dd($blog);

        return view('blog.blog', compact('blog'));;
    }
    public function contact()
    {
        return view('blog.contact');
    }

    public function post(Request $request)
    {
        $blog = new Blog();
        $blog = Blog::where('id', '=', $request->id)->first();
        if (!empty($blog[0])) {
            $blog = $blog[0];
        }
        $data = new blog();
        $data = Blog::paginate(5);
        return view('blog.post', compact('blog', 'data'));
    }
}
