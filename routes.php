<?php
$db = (new Database())->getConnection();

$page = $_GET['page'] ?? 'mahasiswa';
$action = $_GET['action'] ?? 'index';

switch ($page) {
    case 'mahasiswa':
        require_once 'controllers/MahasiswaController.php';
        $controller = new MahasiswaController($db);
        break;

    case 'jurusan':
        require_once 'controllers/JurusanController.php';
        $controller = new JurusanController($db);
        break;

    case 'mata_kuliah':
        require_once 'controllers/MataKuliahController.php';
        $controller = new MataKuliahController($db);
        break;

    case 'nilai':
        require_once 'controllers/NilaiController.php';
        $controller = new NilaiController($db);
        break;
    default:
        include 'views/error/404.php';
        exit;
}

$controller->$action();
