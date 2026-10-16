<!DOCTYPE html>
<html lang="id">
<head><title>Edit Buku</title></head>
<body>
    <h2>Edit Data Buku</h2>
    <form method="POST" action="index.php?page=buku&action=update">
        <input type="hidden" name="id" value="<?= $buku['id'] ?>">
        ISBN: <input type="text" name="isbn" value="<?= htmlspecialchars($buku['isbn']) ?>" required><br><br>
        Judul: <input type="text" name="judul" value="<?= htmlspecialchars($buku['judul']) ?>" required><br><br>
        Penulis: <input type="text" name="penulis" value="<?= htmlspecialchars($buku['penulis']) ?>" required><br><br>
        Penerbit: <input type="text" name="penerbit" value="<?= htmlspecialchars($buku['penerbit']) ?>" required><br><br>
        Tahun Terbit: <input type="number" name="tahun_terbit" value="<?= htmlspecialchars($buku['tahun_terbit']) ?>" required><br><br>
        <button type="submit">Update</button>
        <a href="index.php?page=buku">Kembali</a>
    </form>
</body>
</html>
