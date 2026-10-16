<!DOCTYPE html>
<html lang="id">
<head><title>Tambah Buku</title></head>
<body>
    <h2>Tambah Data Buku Baru</h2>
    <form method="POST" action="index.php?page=buku&action=store">
        ISBN: <input type="text" name="isbn" required><br><br>
        Judul: <input type="text" name="judul" required><br><br>
        Penulis: <input type="text" name="penulis" required><br><br>
        Penerbit: <input type="text" name="penerbit" required><br><br>
        Tahun Terbit: <input type="number" name="tahun_terbit" required><br><br>
        <button type="submit">Simpan</button>
        <a href="index.php?page=buku">Kembali</a>
    </form>
</body>
</html>
