<!DOCTYPE html>
<html>
<head>
	<title>SEKOLAH</title>
</head>
<body>
	<header>
		<h2>SEKOLAH</h2>
		<nav>
			<a href="/sekolah">Home</a>
			|
			<a href="/sekolah/daftar_guru">Daftar Guru</a>
			|
			<a href="/sekolah/daftar_siswa">Daftar Siswa</a>
			|
			<a href="/sekolah/tambah_kelas">Tambah Kelas Baru</a>
			|
			<a href="/sekolah/daftar_kelas">Daftar Kelas</a>
			|
			<a href="/sekolah/lihat_kelas">Lihat Kelas</a>
		</nav>
	</header>
	<hr/>
	<h3> @yield('judul_halaman') </h3>
	@yield('isi') 
</body>
</html>