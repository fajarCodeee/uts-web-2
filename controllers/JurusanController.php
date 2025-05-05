<?php

require_once 'models/Jurusan.php';

class JurusanController {
    private $model;

    public function __construct($db) {
        $this->model = new Jurusan($db);
    }

    // Tampilkan semua jurusan
    public function index() {
        $data = $this->model->getAll()->fetchAll(PDO::FETCH_ASSOC);
        include 'views/jurusan/index.php';
    }

    // Tambah jurusan
    public function tambah() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->model->insert($_POST);
            header('Location: index.php?page=jurusan');
        } else {
            include 'views/jurusan/tambah.php';
        }
    }

    // Edit jurusan
    public function edit() {
        $id = $_GET['id'];
        $jurusan = $this->model->find($id);

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->model->update($id, $_POST);
            header('Location: index.php?page=jurusan');
        } else {
            include 'views/jurusan/edit.php';
        }
    }

    // Hapus jurusan
    public function hapus() {
        $id = $_GET['id'];
        $this->model->delete($id);
        header('Location: index.php?page=jurusan');
    }
}
