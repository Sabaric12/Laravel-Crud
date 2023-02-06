<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Contact;
use App\Models\Post;
use Illuminate\Http\Request;


class AdminController extends Controller
{
    public function add(){
        return view('add');
    }
    public function addPost(){
        return view('add-post');
    }
    public function savePost(Request $request){
        $input = $request->all();
        Post::create($input);
return back()->with('post-add','Post Added Successfully');
    }
    public function postList(){
        $admin = Post::orderBy('id')->get();
        return view('post-list',compact('admin'));
    }
    public function viewPost($id)
    {
        $admin = Post::find($id);
        return view('view-post',compact('admin'));
    }
    public function editPost($id){
        $admin = Post::find($id);
        return view('edit-post',compact('admin'));
    }
    public function updatePost(Request $request){
       $admin = Post::find($request->id);
        $input = $request->all();
        $admin->update($input);
        return redirect('post-list');
    }
    public function deletePost($id){
        Post::destroy($id);
        return redirect('post-list');
    }
}
