<?php

namespace App\Http\Controllers;

use App\Models\blog;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }
    public function list()
    {
        $blog = new blog();
        $blog = blog::paginate(5);
        return view('admin.list', compact('blog'));
    }
    //thêm 
    public function add()
    {
        return view('admin.add');
    }
    public function acadd(Request $request)
    {
        $request->validate([
            'title' => 'required|min:6',
            'quote' => 'required|min:6',
            'content1' => 'required|min:6',
            'content2' => 'required|min:6',
            'image1' => 'required|min:6',
            'image2' => 'required|min:6',
            'image3' => 'required|min:6',
        ]);
        $blog = new Blog();
        $blog->title = $request->title;
        $blog->quote = $request->quote;
        $blog->content1 = $request->content1;
        $blog->content2 = $request->content2;
        $blog->image1 = $request->image2;
        $blog->image2 = $request->image2;
        $blog->image3 = $request->image3;
        $blog->save();
        return back()->with('msg', 'Thêm vào database thành công !!!');
    }
    //sửa
    public function update(Request $request)
    {
        $blog = new Blog();
        $blog = Blog::where('id', '=', $request->id)->first();
        if (!empty($blog[0])) {
            $blog = $blog[0];
        }
        return view('admin.update', compact('blog'));
    }
    public function acupdate(Request $request)
    {
        $request->validate([
            'title' => 'required|min:6',
            'quote' => 'required|min:6',
            'content1' => 'required|min:6',
            'content2' => 'required|min:6',
            'image1' => 'required|min:6',
            'image2' => 'required|min:6',
            'image3' => 'required|min:6',
        ]);
        Blog::where('id', '=', $request->id)->update([
            'title' => $request->title,
            'quote' => $request->quote,
            'content1' => $request->content1,
            'content2' => $request->content2,
            'image1' => $request->image1,
            'image2' => $request->image2,
            'image3' => $request->image3
        ]);

        return back()->with('msg', 'sửa bài viết thành công !!!');
    }
    //xóa
    public function delete(Request $request)
    {
        Blog::where('id', '=', $request->id)->delete();
        return back();
    }
}
