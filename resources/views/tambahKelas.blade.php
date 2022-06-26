<!DOCTYPE html>
<html>
<head>
	<title>SEKOLAH</title>
</head>
<body>
	<h3>Form Input</h3>
    <hr/>
	<form action="/sekolah/tambah_kelas/tambahKelas/insertDataKelas" method="post">
		{{ csrf_field() }}
        <input type="hidden" name="id_kelas" value="{{ $id_kelas }}"> <br/>
        <table border="0">
            <tr>
                <td>ID Kelas</td>
                <td>:</td>
                <td><input type="text" name="id_kelas" disabled="true" required="required" value="{{ $id_kelas }}"></td>
            </tr>
            <tr>
                <td>NIP</td>
                <td>:</td>
                <td><input type="text" name="nip" required="required"></td>
            </tr>
            <tr>
                <td>Nama Mata Pelajaran</td>
                <td>:</td>
                <td><input type="text" name="nama_matpel" required="required"></th></td>
            </tr>
        </table>
        <input type="submit" value="Simpan Data">
        <a href="/sekolah/tambah_kelas"> Kembali</a>
	</form>
</body>
</html>