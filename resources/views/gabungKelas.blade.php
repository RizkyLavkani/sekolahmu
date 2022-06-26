<!DOCTYPE html>
<html>
<head>
	<title>SEKOLAH</title>
</head>
<body>
	<h3>Form Gabung Kelas</h3>
    <hr/>
    @foreach($dataGabungKelas as $dgk)
	<form action="/sekolah/daftar_kelas/gabungKelas/insertDataGabungKelas" method="post">
		{{ csrf_field() }}
        <input type="hidden" name="id_kelas" value="{{ $dgk->id_kelas }}"> <br/>
        <table border="0">
            <tr>
                <td>ID Kelas</td>
                <td>:</td>
                <td><input type="text" name="id_kelas" disabled="true" required="required" value="{{ $dgk->id_kelas }}"></td>
            </tr>
            <tr>
                <td>Nama Guru</td>
                <td>:</td>
                <td><input type="text" name="nama_guru" disabled="true" required="required" value="{{ $dgk->nama_guru }}"></td>
            </tr>
            <tr>
                <td>Nama Mata Pelajaran</td>
                <td>:</td>
                <td><input type="text" name="nama_matpel" disabled="true" required="required" value="{{ $dgk->nama_matpel }}"></td>
            </tr>
            <tr>
                <td>NIS</td>
                <td>:</td>
                <td><input type="text" name="nis" required="required"></td>
            </tr>
            <tr>
                <td>Nama Siswa</td>
                <td>:</td>
                <td><input type="text" name="nama_siswa" required="required"></td>
            </tr>
        </table>
		<input type="submit" value="Daftar">
        <a href="/sekolah/daftar_kelas"> Kembali</a>
	</form>
    @endforeach
</body>
</html>