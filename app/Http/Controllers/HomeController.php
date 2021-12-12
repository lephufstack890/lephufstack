<?php

namespace App\Http\Controllers;

use App\list_posts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    function dashboard(){
        $posts = list_posts::where('post_id',5)->get();
        $sliders = DB::table('sliders')->get();
        $list_cat_sofa = DB::table('cat_products')->where('id',52)->get();
        $list_cat_chair = DB::table('cat_products')->where('id',61)->get();
        $list_cat_table = DB::table('cat_products')->where('id',60)->get();
        $list_cat_bed = DB::table('cat_products')->where('id',63)->get();
        return view('home.dashboard',compact('posts','sliders','list_cat_sofa', 'list_cat_chair', 'list_cat_table', 'list_cat_bed'));
    }
}
