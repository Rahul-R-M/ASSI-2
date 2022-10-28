<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class mycontrol extends Controller
{
    //
    function ins(Request $req)
    {
        $bname = $req->txtphoto->GetClientOriginalName();
        $name = substr($bname,0,stripos($bname,'.'));
        $ext = $req->txtphoto->getClientOriginalExtension();
        $newfile = md5($name).rand(1,100).'.'.$ext;
        $req->txtphoto->move(public_path('uplods'),$newfile);

        DB::table('registration')->insert([
            'name'=>$req->txtname,
            'password'=>$req->txtpass,
            'age'=>$req->txtage,
            'contact'=>$req->txtphno,
            'photo'=>$newfile,
            'status'=>'user'
        ]);
        return redirect('reg');
    }
    function login(Request $req)
    {
        $user = DB::table('registration')->where([
            ['name',$req->txtname],
            ['password',$req->txtpass],
            ['status','user']
        ])->first();

        $admin = DB::table('registration')->where([
            ['name',$req->txtname],
            ['password',$req->txtpass],
            ['status','admin']
        ])->first();
        
        $service = DB::table('registration')->where([
            ['name',$req->txtname],
            ['password',$req->txtpass],
            ['status','service']
        ])->first();

        if($user)
        {
            return redirect('showdata');
        }
        elseif($admin)
        {
            return redirect('adshowdata');

        }
        elseif($service)
        {
            return redirect('shome');
        }
    }
}
