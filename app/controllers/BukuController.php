<?php

class BukuController
{
    public function __construct(private Buku $model) {}

    public function index(): void
    {
        $buku = $this->model->getAll();
        require __DIR__ . '/../views/buku/index.php';
    }

    public function create(): void
    {
        require __DIR__ . '/../views/buku/create.php';
    }

    public function store(): void
    {
        try {
            $data = $this->validateInput($_POST);
            $this->model->insert($data);
            $_SESSION['flash'] = ['type' => 'success', 'message' => 'Data buku berhasil ditambahkan!'];
        } catch (Exception $e) {
            $_SESSION['flash'] = ['type' => 'danger', 'message' => $e->getMessage()];
        }
        header('Location: index.php?page=buku');
        exit;
    }

    public function edit(): void
    {
        $id = (int) ($_GET['id'] ?? 0);
        $buku = $this->model->findById($id);
        if (!$buku) {
            $_SESSION['flash'] = ['type' => 'danger', 'message' => 'Data buku tidak ditemukan.'];
            header('Location: index.php?page=buku');
            exit;
        }
        require __DIR__ . '/../views/buku/edit.php';
    }

    public function update(): void
    {
        try {
            $id = (int) ($_POST['id'] ?? 0);
            $data = $this->validateInput($_POST);
            $this->model->update($id, $data);
            $_SESSION['flash'] = ['type' => 'success', 'message' => 'Data buku berhasil diperbarui!'];
        } catch (Exception $e) {
            $_SESSION['flash'] = ['type' => 'danger', 'message' => $e->getMessage()];
        }
        header('Location: index.php?page=buku');
        exit;
    }

    public function delete(): void
    {
        $id = (int) ($_POST['id'] ?? 0);
        if ($this->model->delete($id)) {
            $_SESSION['flash'] = ['type' => 'success', 'message' => 'Data buku berhasil dihapus!'];
        } else {
            $_SESSION['flash'] = ['type' => 'danger', 'message' => 'Gagal menghapus data buku.'];
        }
        header('Location: index.php?page=buku');
        exit;
    }

    private function validateInput(array $input): array
    {
        $data = [
            'isbn'         => trim($input['isbn'] ?? ''),
            'judul'        => trim($input['judul'] ?? ''),
            'penulis'      => trim($input['penulis'] ?? ''),
            'penerbit'     => trim($input['penerbit'] ?? ''),
            'tahun_terbit' => (int) ($input['tahun_terbit'] ?? 0)
        ];

        if ($data['isbn'] === '' || $data['judul'] === '' || $data['penulis'] === '' || $data['penerbit'] === '' || $data['tahun_terbit'] <= 0) {
            throw new Exception('Semua bidang wajib diisi dengan benar.');
        }

        return $data;
    }
}
