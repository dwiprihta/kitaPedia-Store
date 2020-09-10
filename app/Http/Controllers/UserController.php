<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Show data user
        $users = User::all();
        return view('users.index',compact('users','users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function create()
    {
        //form untuk tambah user
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { 
     
        //validasi data user ke database
        $request->validate([
            'name'=>'required|min:3|max:50',
            'username'=>'required|min:3|max:50',
            'roles'=>'',
            'phone'=>'required|numeric|min:10',
            'address'=>'required|min:3|max:80',
            'avatar'=>'required|file|image|max:6000',
            'email'=>'required|email',
            'password'=>'required',
            'password_confirmation'=>'required',
        ]);
   
        // Ambil request object untuk proses upload file
        $request = request();

        // Proses upload file gambar profil
        if ($request->hasFile('avatar')) {
           // gunakan slug helper agar "nama" bisa dipakai sebagai bagian dari nama gambar_profil
           $slug = Str::slug($request['name']);

           // Ambil extensi file asli
           $extFile = $request->avatar->getClientOriginalExtension();

           // Generate nama gambar, gabungan dari slug "nama"+time()+extensi file
           $namaFile = $slug.'-'.time().".".$extFile;

           // Proses upload, simpan ke dalam folder "uploads"
           $request->avatar->storeAs('public/uploads',$namaFile);
        }
        else {
           // jika user tidak mengupload gambar, isi dengan gambar default
           $namaFile = 'default_profile.jpg';
        }
        
        // input data ke database
        User::create([
            'name'=>$request['name'],
            'username'=>$request['username'],
            'roles'=>json_encode($request['roles']),
            'phone'=>$request['phone'],
            'address'=>$request['address'],
            'avatar'=>$namaFile,
            'email'=>$request['email'],
            'password'=>Hash::make($request['password']),
        ]);

        //send notification if success
        return redirect()->route('users.index')->with('status', 'User successfully created');;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        dd($id);
        //show detail data user
        return view('users.index',['user'=>$id]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
