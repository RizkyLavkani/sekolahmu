@extends('master')
 
@section('judul_halaman', 'Daftar Siswa')
 
@section('isi')
 
	<a href="/sekolah/daftar_siswa/tambahSiswa"> + Tambah Siswa Baru</a>
	
	<br/>
	<br/>
 
	<table border="1">
		<tr>
			<th>NIS</th>
			<th>Nama Siswa</th>
			<th>Umur</th>
			<th>Alamat</th>
            <th>Gender</th>
			<th>Opsi</th>
		</tr>
		@foreach($dataSiswa as $s)
		<tr>
            <td>{{ $s->nis }}</td>
			<td>{{ $s->nama_siswa }}</td>
			<td>{{ $s->umur }}</td>
			<td>{{ $s->alamat }}</td>
            <td>{{ $s->gender }}</td>
			<td>
				<a href="/sekolah/daftar_siswa/editDataSiswa/{{ $s->nis }}">Ubah</a>
				<!-- |
				<a href="/sekolah/daftar_siswa/deleteDataSiswa/{{ $s->nis }}">Hapus</a> -->
			</td>
		</tr>
		@endforeach
	</table>
 
@endsection