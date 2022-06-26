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
        <input type="hidden" name="ID_Kelas" value="{{ $dgk->ID_Kelas }}"> <br/>
        <table border="0">
            <tr>
                <td>ID Kelas</td>
                <td>:</td>
                <td><input type="text" name="id" disabled="true" required="required" value="{{ $dgk->ID_Kelas }}"></td>
            </tr>
            <tr>
                <td>Nama Guru</td>
                <td>:</td>
                <td><input type="text" name="Nama_Guru" disabled="true" required="required" value="{{ $dgk->Nama_Guru }}"></td>
            </tr>
            <tr>
                <td>Nama Mata Pelajaran</td>
                <td>:</td>
                <td><input type="text" name="Nama_MatPel" disabled="true" required="required" value="{{ $dgk->Nama_MatPel }}"></td>
            </tr>
            <tr>
                <td>NIS</td>
                <td>:</td>
                <td><input type="text" name="NIS" required="required"></td>
            </tr>
            <tr>
                <td>Nama Siswa</td>
                <td>:</td>
                <td><input type="text" name="Nama_Siswa" required="required"></td>
            </tr>
        </table>
		<input type="submit" value="Daftar">
        <a href="/sekolah/daftar_kelas"> Kembali</a>
	</form>
    @endforeach
</body>
</html>