<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DressController extends Controller
{
    //
    public function index()
    {
    	
    	//$data['kelas'] = \DB::table('t_kelas')->get();
        $data['dress'] = \App\Dress::orderBy('id')->get();
        $data['judul'] = "Table Dress";
        return view('dress',$data);

    }

    public function create(){
        return view('dress.form');
    }

    public function store(Request $request){
        $rule = [
                'nama_barang' => 'required|string',
                'jenis_produk' => 'required|string',
                'color'=> 'required|string',
                'ukuran_produk' => 'required|string',
                'stock' => 'required|integer',
                'deskripsi' => 'required|string'


        ];
        $this->validate($request,$rule);

        $input = $request->all();
        //unset($input['_token']);
        //$status = \DB::table('t_kelas')->insert($input);

        $status = \App\Dress::create($input);
        if ($status) {
            return redirect ('/dress')->with('success', 'Data Berhasil Ditambahkan');
        }else{
            return redirect ('/dress/create')->with('error', 'Data Gagal Ditambahkan');
        }
    }

    public function edit(Request $request, $id){
        $data{'dress'} = \DB::table('dress')->find($id);
        return view('dress.form', $data);
    }

    public function update(Request $request, $id){
        $rule = [
                'nama_barang' => 'required|string',
                'jenis_produk' => 'required|string',
                'color'=> 'required|string',
                'ukuran_produk' => 'required|string',
                'stock' => 'required|integer',
                'deskripsi' => 'required|string'

        ];
        $this->validate($request,$rule);

        $input = $request->all();
        //unset($input['_token']);
        //unset($input['_method']);

        //$status = \DB::table('t_kelas')->where('id', $id)->update($input);

        $dress = \App\Dress::find($id);
        $status = $dress->update($input);

        if ($status) {
            return redirect ('/dress')->with('success', 'Data Berhasil Diubah');
        }else{
            return redirect ('/dress/create')->with('error', 'Data Gagal Diubah');
        }
    }

    //Function untuk delete

    public function destroy( Request $request, $id){
        //$status = \DB::table('t_kelas')->where('id', $id)->delete();

        $dress = \App\Dress::find($id);
        $status = $dress->delete();

        if ($status) {
            return redirect ('/dress')->with('success', 'Data Berhasil Dihapus');
        }else{
            return redirect ('/dress/create')->with('error', 'Data Gagal Dihapus');
        }

    }


}
