@extends('master')

@section('judul_halaman', 'Daftar Guru')
 
@section('isi')
 
	<a href="/sekolah/daftar_guru/tambahGuru"> + Tambah Guru Baru</a>
	
	<br/>
	<br/>
 
	<table border="1">
		<tr>
			<th>NIP</th>
			<th>Nama</th>
			<th>Jabatan</th>
			<th>Umur</th>
			<th>Alamat</th>
            <th>Gender</th>
			<th>Opsi</th>
		</tr>
		@foreach($dataGuru as $g)
		<tr>
		<td>{{ $g->nip }}</td>
			<td>{{ $g->nama_guru }}</td>
			<td>{{ $g->jabatan }}</td>
			<td>{{ $g->umur }}</td>
			<td>{{ $g->alamat }}</td>
            <td>{{ $g->gender }}</td>
			<td>
				<a href="/sekolah/daftar_guru/editDataGuru/{{ $g->nip }}">Ubah</a>
				<!-- |
				<a href="/sekolah/daftar_guru/deleteDataGuru/{{ $g->nip }}">Hapus</a> -->
			</td>
		</tr>
		@endforeach
	</table>
 
@endsection