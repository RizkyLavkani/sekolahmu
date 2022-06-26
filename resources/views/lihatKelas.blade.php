@extends('master')

@section('judul_halaman', 'Detail Kelas')
 
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
				<a href="/sekolah/lihat_kelas/detailKelas/{{ $dk->ID_Kelas }}">Detail</a>
			</td>
		</tr>
		@endforeach
	</table>
 
@endsection