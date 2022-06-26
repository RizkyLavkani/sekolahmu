<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class KelasController extends Controller{
	public function getListDataKelas(){
        // $dataKelas = DB::table('tabel_kelas')->get();
        $response = Http::get('http://127.0.0.1:8080/listTambahKelas');

        $result = $response->body();
        $dataKelas = json_decode($result);

    	return view('buatKelas',['dataKelas' => $dataKelas -> data]);
	}

    public function btnAddKelas(){
        // $countId = DB::table('tabel_kelas')->max('id_kelas');
        $response = Http::get('http://127.0.0.1:8080/maxIdKelas');

        $result = $response->body();
        $maxId = json_decode($result);

    	return view('tambahKelas',['id_kelas' => $maxId -> data]);
	}

    public function insertDataKelas(Request $request){
        // $post = DB::table('tabel_kelas')->insert([
        //     'ID_Kelas' => $request->ID_Kelas,
        //     'NIP' => $request->NIP,
        //     'Nama_MatPel' => $request->Nama_MatPel
        // ]);

        $response = Http::post('http://127.0.0.1:8080/insert/kelas', [
            'id_kelas' => $request->id_kelas,
            'nip' => $request->nip,
            'nama_matpel' => $request->nama_matpel
        ]);
        
        return redirect('/sekolah/tambah_kelas');
    }

    public function btnEditKelas($ID_Kelas){
        // $dataKelas = DB::table('tabel_kelas')->where('ID_Kelas',$ID_Kelas)->get();
        $response = Http::get('http://127.0.0.1:8080/kelas/' .$ID_Kelas);

        $result = $response->body();
        $dataKelas = json_decode($result);

        return view('editKelas',['dataKelas' => $dataKelas]);
    }

    public function updateKelas(Request $request){
        // $post = DB::table('tabel_kelas')->where('ID_Kelas',$request->ID_Kelas)->update([
        //     'Nama_MatPel' => $request->nama
        // ]);

        $response = Http::patch('http://127.0.0.1:8080/kelas/' .$request->id_kelas, [
            'id_kelas' => $request->id_kelas,
            'nip' => $request->nip,
            'nama_matpel' => $request->nama_matpel
        ]);

        return redirect('/sekolah/tambah_kelas');
    }

    // public function deleteKelas($ID_Kelas){
    //     DB::table('tabel_kelas')->where('ID_Kelas',$ID_Kelas)->delete();
    //     return redirect('/sekolah/tambah_kelas');
    // }
}
