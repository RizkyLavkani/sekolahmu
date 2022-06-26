<?php

use Illuminate\Support\Facades\Route;
    
Route::get('/', "App\Http\Controllers\SekolahController@index");

// Main Menu
Route::get('/sekolah', 'App\Http\Controllers\SekolahController@index');
Route::get('/sekolah/daftar_guru', 'App\Http\Controllers\GuruController@getListDataGuru');
Route::get('/sekolah/daftar_siswa', 'App\Http\Controllers\SiswaController@getListDataSiswa');
Route::get('/sekolah/tambah_kelas', 'App\Http\Controllers\KelasController@getListDataKelas');
Route::get('/sekolah/daftar_kelas', 'App\Http\Controllers\DaftarKelasController@getListDaftarKelas');
Route::get('/sekolah/lihat_kelas', 'App\Http\Controllers\LihatKelasController@getListAnggotaKelas');

// Add Data Guru
Route::get('/sekolah/daftar_guru/tambahGuru', 'App\Http\Controllers\GuruController@btnAddGuru');
Route::post('/sekolah/daftar_guru/tambahGuru/insertDataGuru', 'App\Http\Controllers\GuruController@insertDataGuru');

// Edit Data Guru
Route::get('/sekolah/daftar_guru/editDataGuru/{NIP}','App\Http\Controllers\GuruController@btnEditGuru');
Route::post('/sekolah/daftar_guru/editDataGuru/updateDataGuru','App\Http\Controllers\GuruController@updateDataGuru');

// Delete Data Guru
// Route::get('/sekolah/daftar_guru/deleteDataGuru/{NIP}','App\Http\Controllers\GuruController@deleteDataGuru');

// Add Data Murid
Route::get('/sekolah/daftar_siswa/tambahSiswa', 'App\Http\Controllers\SiswaController@btnAddSiswa');
Route::post('/sekolah/daftar_siswa/tambahSiswa/insertDataSiswa', 'App\Http\Controllers\SiswaController@insertDataSiswa');

// Edit Data Murid
Route::get('/sekolah/daftar_siswa/editDataSiswa/{NIS}','App\Http\Controllers\SiswaController@btnEditSiswa');
Route::post('/sekolah/daftar_siswa/editDataSiswa/updateDataSiswa','App\Http\Controllers\SiswaController@updateDataSiswa');

// Delete Data Murid
// Route::get('/sekolah/daftar_siswa/deleteDataSiswa/{NIS}','App\Http\Controllers\SiswaController@deleteDataSiswa');

// Add Kelas
Route::get('/sekolah/tambah_kelas/tambahKelas', 'App\Http\Controllers\KelasController@btnAddKelas');
Route::post('/sekolah/tambah_kelas/tambahKelas/insertDataKelas', 'App\Http\Controllers\KelasController@insertDataKelas');

// Edit Kelas
Route::get('/sekolah/tambah_kelas/editKelas/{ID_Kelas}','App\Http\Controllers\KelasController@btnEditKelas');
Route::post('/sekolah/tambah_kelas/editKelas/updateKelas','App\Http\Controllers\KelasController@updateKelas');

// Delete Kelas
// Route::get('/sekolah/tambah_kelas/deleteKelas/{ID_Kelas}','App\Http\Controllers\KelasController@deleteKelas');

// Pilih Gabung Kelas
Route::get('/sekolah/daftar_kelas/gabungKelas/{ID_Kelas}', 'App\Http\Controllers\DaftarKelasController@btnGabungKelas');
Route::post('/sekolah/daftar_kelas/gabungKelas/insertDataGabungKelas', 'App\Http\Controllers\DaftarKelasController@insertDataGabungKelas');

// Pilih Lihat Kelas
Route::get('/sekolah/lihat_kelas/detailKelas/{ID_Kelas}', 'App\Http\Controllers\LihatKelasController@btnDetailAnggotaKelas');

