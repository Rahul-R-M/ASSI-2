<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class admincontrol extends Controller
{
    //
    function addprod(Request $req)
    {
        DB::table('product_mstr')->insert([
            'name'=>$req->txtpname,
            'description'=>$req->txtpdesc
        ]);

        return redirect('addprod');
    }

    function insser(Request $req)
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
            'status'=>'service'
        ]);
        return redirect('login');
    }

    function adshowdata()
    {
        $data = DB::table('complaint_mstr')->get();
        return view('showadcom',['Data'=>$data]);
    }

    function dispservicep($id)
    {
        // $data = DB::table('complaint_mstr')->get();
        $serv = DB::table('registration')->where('status','service')->get();
        return view('serviceallocate',['servp'=>$serv,'id'=>$id]);
    }

    function addservicepro(Request $req)
    {  
        DB::table('complaint_mstr')->where('complaint_id',$req->hd)->update(['status'=>'panding']);
        return redirect('adshowdata');
    }
}
