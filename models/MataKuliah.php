<?php

class MataKuliah
{
    private $conn;
    private $table = "mata_kuliah";

    public function __construct($db)
    {
        $this->conn = $db;
    }

    // Ambil semua data mata kuliah
    public function getAll()
    {
        $query = "SELECT * FROM $this->table ORDER BY nama_mk ASC";
        return $this->conn->query($query);
    }

    // Cari berdasarkan ID
    public function find($id)
    {
        $stmt = $this->conn->prepare("SELECT * FROM $this->table WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    // Tambah mata kuliah
    public function insert($data)
    {
        $stmt = $this->conn->prepare("INSERT INTO $this->table (nama_mk, sks) VALUES (?, ?)");
        return $stmt->execute([
            $data['nama_mk'],
            $data['sks']
        ]);
    }

    // Update mata kuliah
    public function update($id, $data)
    {
        $stmt = $this->conn->prepare("UPDATE $this->table SET nama_mk = ?, sks = ? WHERE id = ?");
        return $stmt->execute([
            $data['nama_mk'],
            $data['sks'],
            $id
        ]);
    }

    // Hapus mata kuliah
    public function delete($id)
    {
        $stmt = $this->conn->prepare("DELETE FROM $this->table WHERE id = ?");
        return $stmt->execute([$id]);
    }
}
