<!DOCTYPE html>
<html>
<head>
	<title>Sekolah</title>
</head>
<body>
    <h3>Form Edit Data</h3>
    <hr/>
	@foreach($dataSiswa as $s)
	<form action="/sekolah/daftar_siswa/editDataSiswa/updateDataSiswa" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="nis" value="{{ $s->nis }}"> <br/>
        <table border="0">
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" name="nama" required="required" value="{{ $s->nama_siswa }}"></td>
            </tr>
            <tr>
                <td>Umur</td>
                <td>:</td>
                <td><input type="number" name="umur" required="required" value="{{ $s->umur }}"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td><textarea name="alamat" required="required">{{ $s->alamat }}</textarea></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td>
                <select name="gender" class="form-control" required value="{{ $s->gender }}">
                        <option value="L" {{ $s->gender == 'L ' ? 'selected':'' }}>Laki-Laki</option>
                        <option value="P" {{ $s->gender == 'P ' ? 'selected':'' }}>Perempuan</option>
                    </select>
                </td>
            </tr>
        </table>
		<input type="submit" value="Simpan Data">
        <a href="/sekolah/daftar_siswa"> Kembali</a>
	</form>
	@endforeach
</body>
</html>