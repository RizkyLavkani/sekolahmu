<!DOCTYPE html>
<html>
<head>
	<title>SEKOLAH</title>
</head>
<body>
	<h3>Form Input</h3>
    <hr/>
	<form action="/sekolah/daftar_guru/tambahGuru/insertDataGuru" method="post">
		{{ csrf_field() }}
        <table border="0">
            <tr>
                <td>NIP</td>
                <td>:</td>
                <td><input type="text" name="nip" required="required"></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" name="nama" required="required"></td>
            </tr>
            <tr>
                <td>Jabatan</td>
                <td>:</td>
                <td><input type="text" name="jabatan" required="required"></td>
            </tr>
            <tr>
                <td>Umur</td>
                <td>:</td>
                <td><input type="number" name="umur" required="required"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td><textarea name="alamat" required="required"></textarea></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td>
                    <select name="gender" class="form-control" required>
                        <option value="L" selected>Laki-Laki</option>
                        <option value="P">Perempuan</option>
                    </select>
                </td>
            </tr>
        </table>
        <input type="submit" value="Simpan Data">
        <a href="/sekolah/daftar_guru"> Kembali</a>
	</form>
</body>
</html>