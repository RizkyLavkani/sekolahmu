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
            <td>{{ $dk->ID_Kelas }}</td>
			<td>{{ $dk->Nama_Guru }}</td>
			<td>{{ $dk->Nama_MatPel }}</td>
			<td>
				<a href="/sekolah/daftar_kelas/gabungKelas/{{ $dk->ID_Kelas }}">Daftar</a>
			</td>
		</tr>
		@endforeach
	</table>
 
@endsection