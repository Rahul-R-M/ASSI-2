<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class usercontrol extends Controller
{
    //
    function loadprod()
    {
        $pname = DB::table('product_mstr')->select('name','product_id')->get();
        return view('addcomplaint',['prodname'=>$pname]);
    }

    function addcom(Request $req)
    {
        DB::table('complaint_mstr')->insert([
            'product_id'=>$req->pname,
            'complaint_desc'=>$req->txtpdesc,
            'status'=>'new'
        ]);

        return redirect('loadcom');
    }

    function showdata()
    {
        $data = DB::table('complaint_mstr')->get();
        return view('showcompalint',['Data'=>$data]);
    }
}
