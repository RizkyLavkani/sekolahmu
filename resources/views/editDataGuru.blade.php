<!DOCTYPE html>
<html>
<head>
	<title>Sekolah</title>
</head>
<body>
    <h3>Form Edit Data</h3>
    <hr/>
	@foreach($dataGuru as $g)
	<form action="/sekolah/daftar_guru/editDataGuru/updateDataGuru" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="nip" value="{{ $g->nip }}"> <br/>
        <table border="0">
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" name="nama" required="required" value="{{ $g->nama_guru }}"></td>
            </tr>
            <tr>
                <td>Jabatan</td>
                <td>:</td>
                <td><input type="text" name="jabatan" required="required" value="{{ $g->jabatan }}"></td>
            </tr>
            <tr>
                <td>Umur</td>
                <td>:</td>
                <td><input type="number" name="umur" required="required" value="{{ $g->umur }}"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td><textarea name="alamat" required="required">{{ $g->alamat }}</textarea></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td>
                    <select name="gender" class="form-control" required value="{{ $g->gender }}">
                        <option value="L" {{ $g->gender == 'L' ? 'selected':'' }}>Laki-Laki</option>
                        <option value="P" {{ $g->gender == 'P' ? 'selected':'' }}>Perempuan</option>
                    </select>
                </td>
            </tr>
        </table>
		<input type="submit" value="Simpan Data">
        <a href="/sekolah/daftar_guru"> Kembali</a>
	</form>
	@endforeach
 
</body>
</html>