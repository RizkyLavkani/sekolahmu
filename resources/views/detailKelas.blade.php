@extends('master')

@section('judul_halaman', 'Detail Anggota Kelas')
 
@section('isi')
	<table border="1">
		<tr>
			<!-- <th>ID Kelas</th> -->
            <th>NIS</th>
			<th>Nama Siswa</th>
		</tr>
		@foreach($dataDetailKelas as $dk)
		<tr>
            <!-- <td>{{ $dk->ID_Kelas }}</td> -->
			<td>{{ $dk->NIS }}</td>
			<td>{{ $dk->Nama_Siswa }}</td>
		</tr>
		@endforeach
	</table>
    <a href="/sekolah/lihat_kelas"> Kembali</a>
 
@endsection