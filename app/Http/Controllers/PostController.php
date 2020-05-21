<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

use DB;

class PostController extends Controller
{

    public function newPost(Request $req)
    {
		return view('newpost');
		
    }

    public function allPosts()
    {
        $posts = DB::table('posts')->get();
        return view('allposts' , compact('posts'));
        //return response()->json($posts);
    }

    public function myPosts($email)
    {
        $myposts = DB::table('posts')->where('email', $email)->get();
        return view('myposts' , compact('myposts'));
        //return response()->json($myposts);
    }


    public function createPost(Request $req){
        
        $data = array();
        $data['email'] = $req->email;
        $data['body'] = $req->body;

        $posts = DB::table('posts')->insert($data);
        //return response()->json($data);
        if($posts){

            echo("Post Created Successfully!");

        }else{
          
                echo("Failed!");
          
        }
    }


    public function myPostDelete($id){

        $dltpost = DB::table('posts')->where('id', $id)->delete();
        if($dltpost){
            echo "Post Deleted!";
        }else{

            echo "Deleting Failed!";
        }
    }



}
