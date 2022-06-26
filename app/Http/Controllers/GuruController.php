<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class GuruController extends Controller{
	public function getListDataGuru(){
        // $dataGuru = DB::table('tabel_guru')->get();
        $response = Http::get('http://127.0.0.1:8080/listGuru');

        $result = $response->body();
        $dataGuru = json_decode($result);

    	return view('daftarGuru',['dataGuru' => $dataGuru->data]);
	}

    public function btnAddGuru(){
    	return view('tambahGuru');
	}

    public function insertDataGuru(Request $request){
        // $post = DB::table('tabel_guru')->insert([
        //     'NIP' => $request->nip,
        //     'Nama_Guru' => $request->nama,
        //     'Jabatan' => $request->jabatan,
        //     'Umur' => $request->umur,
        //     'Alamat' => $request->alamat,
        //     'Gender' => $request->gender
        // ]);

        $response = Http::post('http://127.0.0.1:8080/insert/guru', [
            'nip' => $request->nip,
            'nama_guru' => $request->nama,
            'jabatan' => $request->jabatan,
            'umur' => (int)$request->umur,
            'alamat' => $request->alamat,
            'gender' => $request->gender
        ]);
        
        return redirect('/sekolah/daftar_guru');
    }

    public function btnEditGuru($NIP){
        // $dataGuru = DB::table('tabel_guru')->where('NIP',$NIP)->get();
        $response = Http::get('http://127.0.0.1:8080/guru/' .$NIP);

        $result = $response->body();
        $dataGuru = json_decode($result);
        // dd($dataGuru);
        
        return view('editDataGuru',['dataGuru' => $dataGuru]);
    }

    public function updateDataGuru(Request $request){
        // $post = DB::table('tabel_guru')->where('NIP',$request->NIP)->update([
        //     'Nama_Guru' => $request->nama,
        //     'Jabatan' => $request->jabatan,
        //     'Umur' => $request->umur,
        //     'Alamat' => $request->alamat,
        //     'Gender' => $request->gender
        // ]);

        $response = Http::patch('http://127.0.0.1:8080/guru/' .$request->nip, [
            'nip' => $request->nip,
            'nama_guru' => $request->nama,
            'jabatan' => $request->jabatan,
            'umur' => (int)$request->umur,
            'alamat' => $request->alamat,
            'gender' => $request->gender,
        ]);

        return redirect('/sekolah/daftar_guru');
    }

    // public function deleteDataGuru($NIP){
    //     DB::table('tabel_guru')->where('NIP',$NIP)->delete();

    //     return redirect('/sekolah/daftar_guru');
    // }
}
