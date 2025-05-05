<?php
class Mahasiswa {
    private $conn;
    private $table = "mahasiswa";

    public function __construct($db) {
        $this->conn = $db;
    }

    public function getAll() {
        $query = "SELECT m.*, j.nama_jurusan FROM mahasiswa m 
                  LEFT JOIN jurusan j ON m.jurusan_id = j.id";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }

    public function insert($data) {
        $query = "INSERT INTO mahasiswa (nama, nim, jurusan_id) VALUES (?, ?, ?)";
        $stmt = $this->conn->prepare($query);
        return $stmt->execute([$data['nama'], $data['nim'], $data['jurusan_id']]);
    }

    public function delete($id) {
        $stmt = $this->conn->prepare("DELETE FROM mahasiswa WHERE id = ?");
        return $stmt->execute([$id]);
    }

    public function find($id) {
        $stmt = $this->conn->prepare("SELECT * FROM mahasiswa WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function update($id, $data) {
        $stmt = $this->conn->prepare("UPDATE mahasiswa SET nama=?, nim=?, jurusan_id=? WHERE id=?");
        return $stmt->execute([$data['nama'], $data['nim'], $data['jurusan_id'], $id]);
    }
}
?>
