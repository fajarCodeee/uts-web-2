<?php
require_once 'models/Mahasiswa.php';
require_once 'models/Jurusan.php';

class MahasiswaController
{
    private $model;

    public function __construct($db)
    {
        $this->model = new Mahasiswa($db);
    }

    public function index()
    {
        $stmt = $this->model->getAll();
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
        include 'views/mahasiswa/index.php';
    }

    public function tambah()
    {
        require_once 'models/Jurusan.php';
        $jurusan = new Jurusan((new Database())->getConnection());
        $jurusanList = $jurusan->getAll()->fetchAll(PDO::FETCH_ASSOC);

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $this->model->insert($_POST);
            header("Location: index.php?page=mahasiswa");
        } else {
            include 'views/mahasiswa/tambah.php';
        }
    }

    public function edit()
    {
        $id = $_GET['id'];
        $mahasiswa = $this->model->find($id);

        require_once 'models/Jurusan.php';
        $jurusan = new Jurusan((new Database())->getConnection());
        $jurusanList = $jurusan->getAll()->fetchAll(PDO::FETCH_ASSOC);

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $this->model->update($id, $_POST);
            header("Location: index.php?page=mahasiswa");
        } else {
            include 'views/mahasiswa/edit.php';
        }
    }

    public function hapus()
    {
        $this->model->delete($_GET['id']);
        header("Location: index.php?page=mahasiswa");
    }

    // Tambah fungsi edit jika dibutuhkan
}
