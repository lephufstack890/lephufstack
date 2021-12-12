<?php

namespace App\Http\Controllers;

use App\list_pages;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function listPage($id){
        $pages = list_pages::where('page_cat_id',$id)->get();
        return view('page.contact', compact('pages'));
    }

    public function detailPage($id){
        $page_detail = list_pages::where('id',$id)->get();
        $pages = list_pages::all();
        return view('page.detailPage',compact('page_detail','pages'));
    }
}
