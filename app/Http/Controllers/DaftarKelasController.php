<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DaftarKelasController extends Controller{
    public function getListDaftarKelas(){
        $dataDaftarKelas = DB::table('tabel_kelas')
            ->join('tabel_guru', 'tabel_kelas.NIP', '=', 'tabel_guru.NIP')
            ->select('tabel_kelas.*', 'tabel_guru.Nama_Guru')
            ->get();
    	return view('daftarKelas',['dataDaftarKelas' => $dataDaftarKelas]);
	}

    public function btnGabungKelas($ID_Kelas){
        $dataGabungKelas = DB::table('tabel_kelas')
            ->join('tabel_guru', 'tabel_kelas.NIP', '=', 'tabel_guru.NIP')
            ->select('tabel_kelas.*', 'tabel_guru.Nama_Guru')
            ->where('ID_Kelas',$ID_Kelas)
            ->get();
    	return view('gabungKelas',['dataGabungKelas' => $dataGabungKelas]);
	}

    public function insertDataGabungKelas(Request $request){
        $post = DB::table('tabel_daftar_kelas')->insert([
            'ID_Kelas' => $request->ID_Kelas,
            'NIS' => $request->NIS,
            'Nama_Siswa' => $request->Nama_Siswa
        ]);
        return redirect('/sekolah/daftar_kelas');
    }
}
