<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Skill;
use App\Models\Project;
use App\Models\Student;
use App\Models\Category;
use App\Models\Post;
use App\Models\LikesDislike;
use App\Models\Comment;
use Auth;
use Illuminate\Support\Facades\Auth as FacadesAuth;

class UiController extends Controller
{
    public function index(){
        $skills=Skill::all();
        $projects=Project::all();
        $students=Student::all();
        $posts=Post::latest()->take(6)->get();
        return view('ui-panel.index',compact('skills','projects','students','posts'));
    }
    public function postIndex(){
        $categories=Category::all();
        $posts=Post::all();
        return view('ui-panel.posts',compact('categories','posts'));
    }
    public function postDetailIndex($id)
    {
        if(!Auth::check()){
            return redirect('login');
        }
        $post=Post::find($id);
        $like=LikesDislike::where('post_id',$id)->where('type','like')->get();
        $dislike=LikesDislike::where('post_id',$id)->where('type','dislike')->get();
        $likeStatus=LikesDislike::where('post_id',$id)->where('user_id',Auth::user()->id)->first();

        $comments=Comment::where('post_id',$id)->where('status','show')->get();
        return view('ui-panel.post-details',compact('post','like','dislike','likeStatus','comments'));
    }

    public function search(Request $request){
        $categories=Category::all();

        $searchData= "%".$request->data."%";

        $posts=Post::where('title','like',$searchData) 
        
         ->orWhere('content','like',$searchData)

         ->orWhereHas('category',function($category) use($searchData){
           $category->where('name','like',$searchData);
         });
        
         return view('ui-panel.posts',compact('posts','categories'));
    }
    public function categoryData($catId){
        $categories=Category::all();
        $posts=Post::where('category_id','=',$catId);
        return view('ui-panel.posts',compact('categories','posts'));
    }
   
    
}
