<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LihatKelasController extends Controller{
    public function getListAnggotaKelas(){
        $dataDaftarKelas = DB::table('tabel_kelas')
            ->join('tabel_guru', 'tabel_kelas.NIP', '=', 'tabel_guru.NIP')
            ->select('tabel_kelas.*', 'tabel_guru.Nama_Guru')
            ->get();
    	return view('lihatKelas',['dataDaftarKelas' => $dataDaftarKelas]);
	}

    public function btnDetailAnggotaKelas($ID_Kelas){
        $dataDetailKelas = DB::table('tabel_daftar_kelas')
            ->join('tabel_kelas', 'tabel_daftar_kelas.ID_Kelas', '=', 'tabel_kelas.ID_Kelas')
            ->select('tabel_daftar_kelas.*')
            ->where('tabel_daftar_kelas.ID_Kelas',$ID_Kelas)
            ->get();
    	return view('detailKelas',['dataDetailKelas' => $dataDetailKelas]);
	}
}
