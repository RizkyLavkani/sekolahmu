<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class LihatKelasController extends Controller{
    public function getListAnggotaKelas(){
        // $dataDaftarKelas = DB::table('tabel_kelas')
        //     ->join('tabel_guru', 'tabel_kelas.NIP', '=', 'tabel_guru.NIP')
        //     ->select('tabel_kelas.*', 'tabel_guru.Nama_Guru')
        //     ->get();

        $response = Http::get('http://127.0.0.1:8080/listDaftarKelas');

        $result = $response->body();
        $dataDaftarKelas = json_decode($result);

    	return view('lihatKelas',['dataDaftarKelas' => $dataDaftarKelas -> data]);
	}

    public function btnDetailAnggotaKelas($ID_Kelas){
        // $dataDetailKelas = DB::table('tabel_daftar_kelas')
        //     ->join('tabel_kelas', 'tabel_daftar_kelas.ID_Kelas', '=', 'tabel_kelas.ID_Kelas')
        //     ->select('tabel_daftar_kelas.*')
        //     ->where('tabel_daftar_kelas.ID_Kelas',$ID_Kelas)
        //     ->get();

        $response = Http::get('http://127.0.0.1:8080/anggotaKelas/' .$ID_Kelas);

        $result = $response->body();
        $dataDetailKelas = json_decode($result);

    	return view('detailKelas',['dataDetailKelas' => $dataDetailKelas -> data]);
	}
}
