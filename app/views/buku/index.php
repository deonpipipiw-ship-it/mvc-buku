<!DOCTYPE html>
<html lang="id">
<head>
    <title>Katalog Buku</title>
    <style>
        body { font-family: Arial; margin: 20px; }
        table { width: 100%; border-collapse: collapse; margin-top: 15px; }
        th, td { border: 1px solid #ddd; padding: 10px; }
        th { background-color: #f4f4f4; }
        .alert-success { background: #d4edda; color: #155724; padding: 10px; margin-bottom: 15px; }
        .alert-danger { background: #f8d7da; color: #721c24; padding: 10px; margin-bottom: 15px; }
    </style>
</head>
<body>
    <h2>Katalog Data Buku Perpustakaan</h2>
    
    <?php if (isset($_SESSION['flash'])): ?>
        <div class="alert-<?= $_SESSION['flash']['type'] ?>">
            <?= $_SESSION['flash']['message'] ?>
        </div>
        <?php unset($_SESSION['flash']); ?>
    <?php endif; ?>

    <a href="index.php?page=buku&action=create">+ Tambah Buku Baru</a>
    
    <table>
        <tr>
            <th>ISBN</th><th>Judul</th><th>Penulis</th><th>Penerbit</th><th>Tahun</th><th>Aksi</th>
        </tr>
        <?php foreach ($buku as $row): ?>
        <tr>
            <td><?= htmlspecialchars($row['isbn']) ?></td>
            <td><?= htmlspecialchars($row['judul']) ?></td>
            <td><?= htmlspecialchars($row['penulis']) ?></td>
            <td><?= htmlspecialchars($row['penerbit']) ?></td>
            <td><?= htmlspecialchars($row['tahun_terbit']) ?></td>
            <td>
                <a href="index.php?page=buku&action=edit&id=<?= $row['id'] ?>">Edit</a>
                <form action="index.php?page=buku&action=delete" method="POST" style="display:inline;" onsubmit="return confirm('Yakin ingin menghapus buku ini?');">
                    <input type="hidden" name="id" value="<?= $row['id'] ?>">
                    <button type="submit">Hapus</button>
                </form>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
