@extends('master')

@section('judul_halaman', 'Daftar Kelas')
 
@section('isi')
	<table border="1">
		<tr>
			<th>ID Kelas</th>
            <th>Nama Guru</th>
			<th>Nama Mata Pelajaran</th>
			<th>Opsi</th>
		</tr>
		@foreach($dataDaftarKelas as $dk)
		<tr>
            <td>{{ $dk->id_kelas }}</td>
			<td>{{ $dk->nama_guru }}</td>
			<td>{{ $dk->nama_matpel }}</td>
			<td>
				<a href="/sekolah/daftar_kelas/gabungKelas/{{ $dk->id_kelas }}">Daftar</a>
			</td>
		</tr>
		@endforeach
	</table>
 
@endsection