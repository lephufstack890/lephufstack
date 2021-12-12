<?php

namespace App\Http\Controllers;

use App\list_posts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function listPost($id){
        $post = DB::table('add_cat_posts')->where('id',$id)->get();
        $posts = list_posts::where('post_id',$id)->get();
        return view('post.listPost', compact('post','posts'));
    }

    public function detailPost($id){
        $post_detail = DB::table('list_posts')->where('id', $id)->get();
        $posts = list_posts::all();
        // dd($posts);
        return view('post.detailPost',compact('post_detail','posts'));
    }

    public function listCatelogue(){
        return view('post.listCatelogue');
    }
}
