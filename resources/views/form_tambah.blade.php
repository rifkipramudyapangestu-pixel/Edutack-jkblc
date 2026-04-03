<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>form tambah</title>
</head>
<body>
   <h2>Silahkan isi Data mahasiswa</h2>
   <form action="/mahasiswa/proses" method="POST">
    @csrf <label for="nama">Nama :</label> <br>
    <input type="text" id="nama" name="nama"> <br><br>

    <label for="alamat">Alamat :</label>
    <input type="text" id="alamat" name="alamat"> <br><br>

    <input type="submit" value="Simpan Data">
</form>
</body>
</html>