@extends('master')

@section('judul_halaman', 'Detail Anggota Kelas')
 
@section('isi')
	<table border="1">
		<tr>
            <th>NIS</th>
			<th>Nama Siswa</th>
		</tr>
		@foreach($dataDetailKelas as $dk)
		<tr>
			<td>{{ $dk->nis }}</td>
			<td>{{ $dk->nama_siswa }}</td>
		</tr>
		@endforeach
	</table>
    <a href="/sekolah/lihat_kelas"> Kembali</a>
 
@endsection