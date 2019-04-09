<?php

namespace App\Http\Controllers;
use App\Tamu;
use Illuminate\Http\Request;

class BukuTamuController extends Controller
{
    // untuk isi buku tamu
    public function create(Request $request){

        $name=$request['name'];
        $password=$request['password'];
        $email=$request['email'];
        $telp=$request['telp'];
        $referal_id=$request['referal_id'];

        $tamu=new Tamu();

        $tamu->name=$name;
        $tamu->password=$password;
        $tamu->email=$email;
        $tamu->telp=$telp;
        $tamu->referal_id=$referal_id;
        if ($tamu->name!='admin'){
        $tamu->save();
        }
        if ($tamu->name=='admin' and $tamu->password=='admin'){
            return redirect()->route('admin');
        }
        else{
        return redirect()->back();
        }
    }
    // untuk lihat buku tamu
    public function show(){
        $tamus=Tamu::all();
        return view('login',['tamus'=>$tamus]);
}
public function admin(){
    $tamus=Tamu::all();
    return view('index',['tamus'=>$tamus]);
}

}
