<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class DaftarKelasController extends Controller{
    public function getListDaftarKelas(){
        // $dataDaftarKelas = DB::table('tabel_kelas')
        //     ->join('tabel_guru', 'tabel_kelas.NIP', '=', 'tabel_guru.NIP')
        //     ->select('tabel_kelas.*', 'tabel_guru.Nama_Guru')
        //     ->get();

        $response = Http::get('http://127.0.0.1:8080/listDaftarKelas');

        $result = $response->body();
        $dataDaftarKelas = json_decode($result);

    	return view('daftarKelas',['dataDaftarKelas' => $dataDaftarKelas -> data]);
	}

    public function btnGabungKelas($ID_Kelas){
        // $dataGabungKelas = DB::table('tabel_kelas')
        //     ->join('tabel_guru', 'tabel_kelas.NIP', '=', 'tabel_guru.NIP')
        //     ->select('tabel_kelas.*', 'tabel_guru.Nama_Guru')
        //     ->where('ID_Kelas',$ID_Kelas)
        //     ->get();

        $response = Http::get('http://127.0.0.1:8080/getGabungKelas/' .$ID_Kelas);

        $result = $response->body();
        $dataGabungKelas = json_decode($result);

    	return view('gabungKelas',['dataGabungKelas' => $dataGabungKelas]);
	}

    public function insertDataGabungKelas(Request $request){
        // $post = DB::table('tabel_daftar_kelas')->insert([
        //     'ID_Kelas' => $request->ID_Kelas,
        //     'NIS' => $request->NIS,
        //     'Nama_Siswa' => $request->Nama_Siswa
        // ]);

        $response = Http::post('http://127.0.0.1:8080/insert/daftarKelas', [
            'id_kelas' => $request->id_kelas,
            'nis' => $request->nis,
            'nama_siswa' => $request->nama_siswa
        ]);

        return redirect('/sekolah/daftar_kelas');
    }
}
