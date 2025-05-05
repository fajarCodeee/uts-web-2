<?php

require_once 'models/MataKuliah.php';

class MataKuliahController
{
    private $model;

    public function __construct($db)
    {
        $this->model = new MataKuliah($db);
    }

    // Tampilkan semua mata kuliah
    public function index()
    {
        $data = $this->model->getAll()->fetchAll(PDO::FETCH_ASSOC);
        include 'views/mata_kuliah/index.php';
    }

    // Tambah
    public function tambah()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->model->insert($_POST);
            header('Location: index.php?page=mata_kuliah');
        } else {
            include 'views/mata_kuliah/tambah.php';
        }
    }

    // Edit
    public function edit()
    {
        $id = $_GET['id'];
        $mata_kuliah = $this->model->find($id);

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->model->update($id, $_POST);
            header('Location: index.php?page=mata_kuliah');
        } else {
            include 'views/mata_kuliah/edit.php';
        }
    }

    // Hapus
    public function hapus()
    {
        $id = $_GET['id'];
        $this->model->delete($id);
        header('Location: index.php?page=mata_kuliah');
    }
}
