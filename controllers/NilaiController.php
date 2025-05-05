<?php

require_once 'models/Nilai.php';
require_once 'models/Mahasiswa.php';
require_once 'models/MataKuliah.php';

class NilaiController
{
    private $model, $mahasiswaModel, $mataKuliahModel;

    public function __construct($db)
    {
        $this->model = new Nilai($db);
        $this->mahasiswaModel = new Mahasiswa($db);
        $this->mataKuliahModel = new MataKuliah($db);
    }

    public function index()
    {
        $data = $this->model->getAll()->fetchAll(PDO::FETCH_ASSOC);
        include 'views/nilai/index.php';
    }

    public function tambah()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->model->insert($_POST);
            header("Location: index.php?page=nilai");
        } else {
            $mahasiswa = $this->mahasiswaModel->getAll()->fetchAll(PDO::FETCH_ASSOC);
            $mata_kuliah = $this->mataKuliahModel->getAll()->fetchAll(PDO::FETCH_ASSOC);
            include 'views/nilai/tambah.php';
        }
    }

    public function hapus()
    {
        $id = $_GET['id'];
        $this->model->delete($id);
        header("Location: index.php?page=nilai");
    }
}
