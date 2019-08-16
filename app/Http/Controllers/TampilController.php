<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TampilController extends Controller
{
    //
	public function index()
    {
    	
    	//$data['kelas'] = \DB::table('t_kelas')->get();
        $data['dress'] = \App\Dress::orderBy('id')->get();
        $data['judul'] = "Belanja Online Dress";
        return view('tampil',$data);

    }
}
