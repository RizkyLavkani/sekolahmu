@extends('master')

@section('judul_halaman', 'Kelas')
 
@section('isi')
 
	<a href="/sekolah/tambah_kelas/tambahKelas"> + Tambah Kelas Baru</a>
	
	<br/>
	<br/>
 
	<table border="1">
		<tr>
			<th>ID</th>
			<th>NIP</th>
			<th>Nama Mata Pelajaran</th>
			<th>Opsi</th>
		</tr>
		@foreach($dataKelas as $k)
		<tr>
            <td>{{ $k->id_kelas }}</td>
			<td>{{ $k->nip }}</td>
			<td>{{ $k->nama_matpel }}</td>
			<td>
				<a href="/sekolah/tambah_kelas/editKelas/{{ $k->id_kelas }}">Ubah</a>
				<!-- |
				<a href="/sekolah/tambah_kelas/deleteKelas/{{ $k->id_kelas }}">Hapus</a> -->
			</td>
		</tr>
		@endforeach
	</table>
 
@endsection