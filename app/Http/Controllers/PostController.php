<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Pots;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class PostController extends Controller
{
    public function index(){
    //     //get posts
    // $posts = Post::latest()->paginate(5);
    // $title = 'title';
    // // $title = ['title'=>'Museum1'];
    // return view('museum1',compact($title,'posts'));
        $title='title';
        //$title = ["title" => "Admin"];
        // $data = DB::table('posts')->get();
        return view('Admin.admin',
            ["title"=>"Admin"]
        );

    }

    //$data = DB::table('posts')->get();
    //return view('Admin.admin', compact('data'));

    public function daftar(){
        $posts = DB::table('posts')->get();
        $title = 'title';
        return view('Admin.daftar',[
            "title" => "Daftar",
            "posts" => $posts
        ]);
    } 

    public function museum1(){
        $posts = DB::table('posts')->where('id',1)->get();
        $title = 'title';
        return view('museum1',[
            "title" => "Museum1",
            "posts" => $posts
        ]);
    } 

    public function museum2(){
        $posts = DB::table('posts')->where('id',2)->get();
        $title = 'title';
        return view('museum2',[
            "title" => "Museum2",
            "posts" => $posts
        ]);
    } 

    public function museum3(){
        $posts = DB::table('posts')->where('id',3)->get();
        $title = 'title';
        return view('museum3',[
            "title" => "Museum3",
            "posts" => $posts
        ]);
    } 

    public function museum4(){
        $posts = DB::table('posts')->where('id',4)->get();
        $title = 'title';
        return view('museum4',[
            "title" => "Museum4",
            "posts" => $posts
        ]);
    } 

    public function museum5(){
        $posts = DB::table('posts')->where('id',5)->get();
        $title = 'title';
        return view('museum5',[
            "title" => "Museum5",
            "posts" => $posts
        ]);
    } 

    public function museum6(){
        $posts = DB::table('posts')->where('id',6)->get();
        $title = 'title';
        return view('museum6',[
            "title" => "Museum6",
            "posts" => $posts
        ]);
    }
    
    public function museum7(){
        $posts = DB::table('posts')->where('id',7)->get();
        $title = 'title';
        return view('museum7',[
            "title" => "Museum7",
            "posts" => $posts
        ]);
    } 

    // public function isipost(){
    //     return Post::where('posts_id',auth()->posts()->id)->get();
    // }

    public function create()
    {
        // $posts = DB::table('posts')->get();
        // return dd($posts);
        // return view('Admin.admin', compact('posts'));
        // return view('posts.create');
        
    }

    public function store(Request $request) {
        $this->validate($request, [
            'images1' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'images2' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'images3' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'images4' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'images5' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'images6' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'event' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'tiket' => 'required',
            'jadwal' => 'required',
        ]);
         //upload image
         //$images1 = $request->file('images1');
         $images1 = round(microtime(true) * 1000).'-1'.str_replace(' ','-',$request->file('images1')->getClientOriginalName());
         $request->file('images1')->move(public_path('pots'), $images1);
         //$images1->storeAs('public/pots/', $images1->hashName());

        //  $images2 = $request->file('images2');
         //$images2->storeAs('public/pots/', $images2->hashName());
         $images2 = round(microtime(true) * 1000).'-2'.str_replace(' ','-',$request->file('images2')->getClientOriginalName());
         $request->file('images2')->move(public_path('pots'), $images2);

        //  $images3 = $request->file('images3');
         //$images3->storeAs('public/pots/', $images3->hashName());
         $images3 = round(microtime(true) * 3000).'-3'.str_replace(' ','-',$request->file('images3')->getClientOriginalName());
         $request->file('images3')->move(public_path('pots'), $images3);

        //  $images4 = $request->file('images4');
         //$images4->storeAs('public/pots/', $images4->hashName());
         $images4 = round(microtime(true) * 4000).'-4'.str_replace(' ','-',$request->file('images4')->getClientOriginalName());
         $request->file('images4')->move(public_path('pots'), $images4);

        //  $images5 = $request->file('images5');
         //$images5->storeAs('public/pots/', $images5->hashName());
         $images5 = round(microtime(true) * 5000).'-5'.str_replace(' ','-',$request->file('images5')->getClientOriginalName());
         $request->file('images5')->move(public_path('pots'), $images5);

        //  $images6 = $request->file('images6');
         //$images6->storeAs('public/pots/', $images6->hashName());
         $images6 = round(microtime(true) * 6000).'-6'.str_replace(' ','-',$request->file('images6')->getClientOriginalName());
         $request->file('images6')->move(public_path('pots'), $images6);

        // $event = $request->file('event');
        //$event->storeAs('public/pots/', $event->hashName());
        $event = round(microtime(true) * 6000).'-7'.str_replace(' ','-',$request->file('event')->getClientOriginalName());
        $request->file('event')->move(public_path('pots'), $event);

        //  create post
     Post::create([
    'images1'     => $images1,
    'images2'     => $images2,
    'images3'     => $images3,
    'images4'     => $images4,
    'images5'     => $images5,
    'images6'     => $images6,
    'event'     => $event,
    'tiket'    => $request->tiket,
    'jadwal'    => $request->jadwal,
    
 ]);



 //redirect to index
    $msg='Data Berhasil Disimpan!';
    return redirect('/admin')->with('success', $msg);
    //return redirect()->action([])->with(['success' , 'Data Berhasil Disimpan!']);
    }

    // public function museum()
    // {
    //     $data = DB::table('posts')->get();
    //     return view('Admin.admin', compact('data'));
    //     // return view('posts.create');
        
    // }

public function tampilkandata($id){

    //$posts=Post::find($id);
    //dd($id);
    $posts = Post::findOrFail($id);
    return view('Admin.tampildata', compact('posts'));

}

public function update(Request $request, $id){
    $posts=Post::findOrFail($id);

    // $posts->update($request->all());
    // $posts->images1 = $request->images1;
    // $posts->images2 = $request->images2;
    // $posts->images3 = $request->images3;
    // $posts->images4 = $request->images4;
    // $posts->images5 = $request->images5;
    // $posts->images6 = $request->images6;


    if($request->hasfile('images1')){
        $file = $request->file('images1');
        $extension = $file->getClientOriginalExtension();
        $filename = time() . '.' . $extension;
        $file->move(public_path('pots'), $filename);
        $posts->images1 = $filename;
    }

    else if($request->hasfile('images2')){
        $file = $request->file('images2');
        $extension = $file->getClientOriginalExtension();
        $filename = time() . '.' . $extension;
        $file->move(public_path('pots'), $filename);
        $posts->images2 = $filename;
    }

    else if($request->hasfile('images3')){
        $file = $request->file('images3');
        $extension = $file->getClientOriginalExtension();
        $filename = time() . '.' . $extension;
        $file->move(public_path('pots'), $filename);
        $posts->images3 = $filename;
    }

    else if($request->hasfile('images4')){
        $file = $request->file('images4');
        $extension = $file->getClientOriginalExtension();
        $filename = time() . '.' . $extension;
        $file->move(public_path('pots'), $filename);
        $posts->images4 = $filename;
    }

    else if($request->hasfile('images5')){
        $file = $request->file('images5');
        $extension = $file->getClientOriginalExtension();
        $filename = time() . '.' . $extension;
        $file->move(public_path('pots'), $filename);
        $posts->images5 = $filename;
    }

    else if($request->hasfile('images6')){
        $file = $request->file('images6');
        $extension = $file->getClientOriginalExtension();
        $filename = time() . '.' . $extension;
        $file->move(public_path('pots'), $filename);
        $posts->images6 = $filename;
    }

    else if($request->hasfile('event')){
        $file = $request->file('event');
        $extension = $file->getClientOriginalExtension();
        $filename = time() . '.' . $extension;
        $file->move(public_path('pots'), $filename);
        $posts->event = $filename;
    }
    $posts->tiket = $request->tiket;
    $posts->jadwal = $request->jadwal;
    $posts->save();
    return redirect('/daftar')->with('succes','Data berhasil di hapus');

    
    // $images1 = round(microtime(true) * 1000).'-1'.str_replace(' ','-',$request->file('images1')->getClientOriginalName());
    // $awal= $ubah->images1;
    // $posts = ['images1' => $awal];
    // $request->images1->move(public_path().'pots',$awal);
    // $ubah->update($posts);
    // return redirect('daftar');
}

public function edit(Request $request, $id){

    $posts = Post::findOrFail($id);
    dd($posts);
    return view('Admin.daftar-edit');
}

public function delete1($id){
    $posts   = Post::find($id);
    // Post::delete('public/pots/'. $posts->image);
    $posts->delete();
        //redirect to index
    return redirect('/daftar')->with('succes','Data berhasil di hapus');

}
   
}

