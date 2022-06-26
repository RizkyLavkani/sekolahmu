<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class SiswaController extends Controller{
	public function getListDataSiswa(){
        // $dataSiswa = DB::table('tabel_siswa')->get();
        $response = Http::get('http://127.0.0.1:8080/listSiswa');

        $result = $response->body();
        $dataSiswa = json_decode($result);

    	return view('daftarSiswa',['dataSiswa' => $dataSiswa -> data]);
	}

    public function btnAddSiswa(){
    	return view('tambahSiswa');
	}

    public function insertDataSiswa(Request $request){
        // $post = DB::table('tabel_siswa')->insert([
        //     'NIS' => $request->NIS,
        //     'Nama_Siswa' => $request->nama,
        //     'Umur' => $request->umur,
        //     'Alamat' => $request->alamat,
        //     'Gender' => $request->gender
        // ]);

        $response = Http::post('http://127.0.0.1:8080/insert/siswa', [
            'nis' => $request->nis,
            'nama_siswa' => $request->nama,
            'umur' => (int)$request->umur,
            'alamat' => $request->alamat,
            'gender' => $request->gender,
        ]);
        
        return redirect('/sekolah/daftar_siswa');
    }

    public function btnEditSiswa($NIS){
        // $dataSiswa = DB::table('tabel_siswa')->where('NIS',$NIS)->get();
        $response = Http::get('http://127.0.0.1:8080/siswa/' .$NIS);

        $result = $response->body();
        $dataSiswa = json_decode($result);

        return view('editDataSiswa',['dataSiswa' => $dataSiswa]);
    }

    public function updateDataSiswa(Request $request){
        // $post = DB::table('tabel_siswa')->where('NIS',$request->NIS)->update([
        //     'Nama_Siswa' => $request->nama,
        //     'Umur' => $request->umur,
        //     'Alamat' => $request->alamat,
        //     'Gender' => $request->gender
        // ]);
        
        $response = Http::patch('http://127.0.0.1:8080/siswa/' .$request->nis, [
            'nis' => $request->nis,
            'nama_siswa' => $request->nama,
            'umur' => (int)$request->umur,
            'alamat' => $request->alamat,
            'gender' => $request->gender
        ]);

        return redirect('/sekolah/daftar_siswa');
    }

    // public function deleteDataSiswa($NIS){
    //     DB::table('tabel_siswa')->where('NIS',$NIS)->delete();

    //     return redirect('/sekolah/daftar_siswa');
    // }
}
