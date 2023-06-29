<?php

namespace App\Http\Controllers;
use App\Models\Typetour;
use Illuminate\Http\Request;
use Session;
use App\Models\Post;
use App\Models\Tour;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;
use PhpParser\Node\Stmt\Return_;
session_start();

class PostController extends Controller
{
   /*CRUD admin*/
   public function index(){
    $this->AuthLogin();
    return view('Admin_Views.Tour_Management.Add_Post');
}
public function AuthLogin(){
    $staff_id = Session::get('staff_id');
    if($staff_id){
        return Redirect::to('dashboard');
    }else{
        return Redirect::to('admin')->send();
    }
}
public function add(Request $request){
    $data=$request->all();
    $post= new Post;
    $post->post_title=$data['post_title'];
    $post->post_content=$data['post_content'];
    $post->post_desc=$data['post_desc'];
    //$post->post_meta_desc=$data['post_meta_desc'];
    $post->post_meta_keyword=$data['post_meta_keyword']; 
    $post->post_status=$data['post_status'];

    $get_thumb = $request->file('post_thumb');
    $get_banner = $request->file('post_banner');
    $get_name_thumb = $get_thumb->getClientOriginalName();
    $name_thumb = current(explode('.',$get_name_thumb));
    $new_thumb =  $name_thumb.rand(0,99).'.'.$get_thumb->getClientOriginalExtension();
    $get_thumb->move('uploads/posts/thumb',$new_thumb);
    $get_name_banner = $get_banner->getClientOriginalName();
    $name_banner = current(explode('.',$get_name_banner));
    $new_banner =  $name_banner.rand(0,99).'.'.$get_banner->getClientOriginalExtension();
    $get_banner->move('uploads/posts/banner',$new_banner);
    $post->post_thumb=$new_thumb;
    $post->post_banner=$new_banner;
    Session::put('message','*successfully added');
    $post->save();
    Return Redirect::to('add-post');
}

public function show_list(){
    $post=Post::OrderBy('post_id','DESC')->paginate(8);
    return view('Admin_Views.Tour_Management.List_Post')->with(compact('post'));
}
public function edit($post_id){
    $edit_post= Post::where('post_id',$post_id)->get();
    return view('Admin_Views.Tour_Management.Edit_Post')->with(compact('edit_post'));
}
public function enable($post_id){
    $post= Post::find($post_id);
    $post->post_status=1;
    $post->save();
    Session::put('message','*successfully enabled');
    return Redirect::to('list-post');

}
public function disable($post_id){
    $post= Post::find($post_id);
    $post->post_status=0;
    $post->save();
    Session::put('message','*successfully disabled');
    return Redirect::to('list-post');

}
public function update(Request $request,$post_id){
    $data=$request->all();
    $post= Post::find($post_id);
    $post->post_title=$data['Post_title'];
    $post->post_content=$data['Post_content'];
    $post->post_desc=$data['Post_desc'];
    $post->post_meta_keyword=$data['Post_meta_keyword']; 
    $post->post_status=$data['Post_status'];
    $get_thumb = $request->file('post_thumb');
    $get_banner = $request->file('post_banner');
if($get_thumb){
    
    /* $get_thumb = $request->file('post_thumb');
 */
    /* $get_banner_old= $post->post_banner;
    $path='uploads/posts/banner/'.$post_banner;
    unlink($path); */
    /* $post_thumb_old= $post->post_thumb;
    $path='public/uploads/posts/thumb/'.$post_thumb_old;
    unlink($path); */

    $get_name_thumb = $get_thumb->getClientOriginalName();
    $name_thumb = current(explode('.',$get_name_thumb));
    $new_thumb =  $name_thumb.rand(0,99).'.'.$get_thumb->getClientOriginalExtension();
    $get_thumb->move('uploads/posts/thumb',$new_thumb);
    
    $post->post_thumb=$new_thumb;
    
    /* DB::table('tbl_post')->where('post_id',$post_id)->update($data);
    Session::put('message','*successfully updated');
    return Redirect::to('list-post'); */
}
if($get_banner){
   /*  $post_banner_old= $post->post_banner;
    $path='public/uploads/posts/banner/'.$post_banner_old;
    unlink($path); */

    $get_name_banner = $get_banner->getClientOriginalName();
    $name_banner = current(explode('.',$get_name_banner));
    $new_banner =  $name_banner.rand(0,99).'.'.$get_banner->getClientOriginalExtension();
    $get_banner->move('uploads/posts/banner',$new_banner);
    $post->post_banner=$new_banner;
}
    $post->save();
    Session::put('message','*successfully updated');
    return Redirect::to('list-post');
}
public function delete($post_id){
    $post= Post::find($post_id);
    $post->delete();
    Session::put('message','*successfully deleted');
    return Redirect::to('list-post');
}
/*End CRUD admin*/
/************************************************************************************/

public function show_post_detail($post_title){

    $post=Post::where('post_title',$post_title)->first();
    $post_id=$post->post_id;
    $post_title=$post->post_title;
    //$Post=Post::orderby('post_id','asc')->where('post_status','1')->get();
    $blog = Post::where('post_status',1)->inRandomOrder()->limit(6)->get();
    $post = Post::where('post_id',$post_id)->first();
    $post->post_view = $post->post_view + 1;
    $post->save();
return view('Page_Views.SinglePost')->with(compact('post'))->with(compact('blog'));

}
public function show_page(){
    $Post = Post::orderby('post_id','DESC')->where('post_status','1')->paginate(3);
    $Blog = Post::where('post_status',1)->inRandomOrder()->limit(6)->get();

    return view('Page_Views.List_Post')->with(compact('Post'))->with(compact('Blog'))->with('i',(request()->input('page',1)-1)*3);
}


}