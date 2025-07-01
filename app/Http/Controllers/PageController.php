<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PageController extends Controller
{
    public function home(){
      return view('posts');
    }
    public function contact(){
        $data = 0;
        return view('contact',['data'=>$data]);
    }
     public function DataContact(Request $request){
      $data = [
        [
        "name" => $request->name,
        "email"=> $request->email
        ]
      ];
      return view('contact',['data'=>$data]);
    }
    public function posts(){
      $date = Post::count();
      $select = Post::all();
       return view('Posts',['date'=>$date,"select"=>$select]);
    }
    public function add_posts(Request $request){
      // dd($request->is_published);
      $title = $request->title;
      $content = $request->content;
      $is_published = $request->is_published;

      Post::create([
        "title"=>$title,
        "content"=>$content,
        "is_published"=>$is_published
    
      ]);
  $date = Post::count();
      return redirect()->route('post_form')->with('date', $date);
       
    }
    public function edit_post($id){
      $post = Post::findOrFail($id);
      return view('edit_page',["post"=>$post]);
    }
      public function update_post(Request $request , $id){
        
      $post = Post::findOrFail($id);
      // return view('edit_page',["post"=>$post]);.
         $title = $request->title;
      $content = $request->content;
      $is_published = $request->is_published;
      $post -> update([
           "title"=>$title,
        "content"=>$content,
           'is_published' => $request->is_published,
      ]);
      $mess = 1;
      return redirect()->route('post_form')->with('mess', $mess);
    }

  ///
  public function delete_post($id)
  {
    $post = Post::findOrFail($id);
    $post->delete();
          $delete = 1;
      return redirect()->route('post_form')->with('delete', $delete);
  }
}
