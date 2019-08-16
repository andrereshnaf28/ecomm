<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PembeliController extends Controller
{
    //

    public function create(){
        return view('pembeli.form');
    }
    public function index()
    {
    	
    	//$data['kelas'] = \DB::table('t_kelas')->get();
        $data['pembeli'] = \App\Pembeli::orderBy('id')->get();
        $data['judul'] = "Table Pembeli";
        return view('pembeli',$data);
    }

    public function store(Request $request){
        $rule = [
                'nama_pelanggan' => 'required|string',
                'alamat_lengkap' => 'required|string',
                'no_telp'=> 'required|string',
                'kode_pos_pelanggan' => 'required|string'

        ];
        $this->validate($request,$rule);

        $input = $request->all();
        //unset($input['_token']);
        //$status = \DB::table('t_kelas')->insert($input);

         $status = \App\Pembeli::create($input);
        if ($status) {
            return redirect ('/pembeli')->with('success', 'Data Berhasil Ditambahkan');
        }else{
            return redirect ('/pembeli/create')->with('error', 'Data Gagal Ditambahkan');
        }
    }

    public function edit(Request $request, $id){
        $data{'pembeli'} = \DB::table('pembeli')->find($id);
        return view('pembeli.form', $data);
    }

    public function update(Request $request, $id){
        $rule = [
                'nama_pelanggan' => 'required|string',
                'alamat_lengkap' => 'required|string',
                'no_telp'=> 'required|string',
                'kode_pos_pelanggan' => 'required|string'
        ];
        $this->validate($request,$rule);

        $input = $request->all();
        //unset($input['_token']);
        //unset($input['_method']);

        //$status = \DB::table('t_kelas')->where('id', $id)->update($input);

        $pembeli = \App\Pembeli::find($id);
        $status = $pembeli->update($input);

        if ($status) {
            return redirect ('/pembeli')->with('success', 'Data Berhasil Diubah');
        }else{
            return redirect ('/pembeli/create')->with('error', 'Data Gagal Diubah');
        }
    }

    //Function untuk delete

    public function destroy( Request $request, $id){
        //$status = \DB::table('t_kelas')->where('id', $id)->delete();

        $pembeli = \App\Pembeli::find($id);
        $status = $pembeli->delete();

        if ($status) {
            return redirect ('/pembeli')->with('success', 'Data Berhasil Dihapus');
        }else{
            return redirect ('/pembeli/create')->with('error', 'Data Gagal Dihapus');
        }

    }
}
