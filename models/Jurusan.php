<?php

class Jurusan
{
    private $conn;
    private $table = "jurusan";

    public function __construct($db)
    {
        $this->conn = $db;
    }

    // Ambil semua data jurusan
    public function getAll()
    {
        $query = "SELECT * FROM $this->table ORDER BY nama_jurusan ASC";
        return $this->conn->query($query);
    }

    // Ambil satu jurusan berdasarkan ID
    public function find($id)
    {
        $stmt = $this->conn->prepare("SELECT * FROM $this->table WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    // Tambah jurusan
    public function insert($data)
    {
        $stmt = $this->conn->prepare("INSERT INTO $this->table (nama_jurusan) VALUES (?)");
        return $stmt->execute([$data['nama_jurusan']]);
    }

    // Update jurusan
    public function update($id, $data)
    {
        $stmt = $this->conn->prepare("UPDATE $this->table SET nama_jurusan = ? WHERE id = ?");
        return $stmt->execute([$data['nama_jurusan'], $id]);
    }

    // Hapus jurusan
    public function delete($id)
    {
        $stmt = $this->conn->prepare("DELETE FROM $this->table WHERE id = ?");
        return $stmt->execute([$id]);
    }
}
