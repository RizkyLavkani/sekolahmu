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
            <td>{{ $dk->id_kelas }}</td>
			<td>{{ $dk->nama_guru }}</td>
			<td>{{ $dk->nama_matpel }}</td>
			<td>
				<a href="/sekolah/lihat_kelas/detailKelas/{{ $dk->id_kelas }}">Detail</a>
			</td>
		</tr>
		@endforeach
	</table>
 
@endsection