<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function view()
    {
        //$test='TEST VAR';
        $title='About';
        $content = DB::table('pages')->select('content')->where('id', 1)->first();
        $content2 = DB::table('pages')->select('content')->where('category', 'image')->get();


        //dd($content2);
        // return view('about',
        // ["title" => "title"],
        // ['content' => $content],
        // ['imgs' => $content2]);
        return view('about', compact('title','content','content2'));
        //return view(('about'),compact('"title" => "About"','content'));
    }
    
}
