<!DOCTYPE html>
<html>
<head>
	<title>Sekolah</title>
</head>
<body>
    <h3>Form Edit Data</h3>
    <hr/>
	@foreach($dataKelas as $k)
	<form action="/sekolah/tambah_kelas/editKelas/updateKelas" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id_kelas" value="{{ $k->id_kelas }}"> <br/>
        <table border="0">
            <tr>
                <td>Nama Mata Pelajaran</td>
                <td>:</td>
                <td><input type="text" name="nama_matpel" required="required" value="{{ $k->nama_matpel }}"></td>
            </tr>
        </table>
		<input type="submit" value="Simpan Data">
        <a href="/sekolah/tambah_kelas"> Kembali</a>
	</form>
	@endforeach
</body>
</html>