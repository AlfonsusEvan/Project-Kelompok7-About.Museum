<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;



use function GuzzleHttp\Promise\all;

class ContactController extends Controller
{
   
    public function index()
    {
        $title = 'title';
        return view('Contact.contact',[
            "title" => "Contact"
        ]);
    }

    public function store(Request $request){

        // return request()-all();
        $validatedData =  $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email:dns|unique:users',
            'telepon' => 'required',
            'pesanan' => 'required',
            'umur' => 'required',
            'tanggal'=> 'required'
        ]);
        Contact::create($validatedData);

        $msg='Pesanan dalam proses. Kami akan segera menghubungi anda!!';
        return redirect('/contact')->with('success', $msg);

        // if(Auth::attempt($validatedData)) co{
        //     $request->session()->regenerate(); 
        //     return redirect()->intended('/contact');
        // }
        // return back()->with('loginError', 'Login Failed');
        // Contact::create([
        //     'name' => $request->name,
        //     'email' => $request->email,
        //     'no_telepon' => $request->telepon,
        //     'isi' => $request->isi
        // ]);
        // dd('registrasi berhasil');
        // return redirect('/contact');
    }

    public function delete($id) {
        $contact   = Contact::find($id);
        $contact->delete();
        //redirect to index
        return redirect('/pesanan')->with('succes','Data berhasil di hapus');
        }

    public function pesanan(){
        $posts = DB::table('contacts')->get();
        $title = 'title';
        return view('Admin.pesanan',[
            "title" => "Pesanan",
            "posts" => $posts
        ]);
    } 
    public function TampilPesanan($id){

        //$posts=Post::find($id);
        //dd($id);
        $contact = Contact::findOrFail($id);
        return view('Admin.TampilPesanan', compact('contact'));
    
    }

    public function update(Request $request, $id){
        $contact = Contact::findOrFail($id);
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->telepon = $request->telepon;
        $contact->pesanan = $request->pesanan;
        $contact->umur = $request->umur;
        $contact->tanggal = $request->tanggal;
        $contact->save();
        return redirect('/pesanan');

    }
}
