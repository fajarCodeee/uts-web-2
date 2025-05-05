<?php

class Nilai
{
    private $conn;
    private $table = "nilai";

    public function __construct($db)
    {
        $this->conn = $db;
    }

    public function getAll()
    {
        $query = "SELECT nilai.id, mahasiswa.nama, mata_kuliah.nama_mk, nilai.nilai
                  FROM nilai
                  JOIN mahasiswa ON nilai.mahasiswa_id = mahasiswa.id
                  JOIN mata_kuliah ON nilai.mata_kuliah_id = mata_kuliah.id
                  ORDER BY mahasiswa.nama";
        return $this->conn->query($query);
    }

    public function insert($data)
    {
        $stmt = $this->conn->prepare("INSERT INTO nilai (mahasiswa_id, mata_kuliah_id, nilai) VALUES (?, ?, ?)");
        return $stmt->execute([
            $data['mahasiswa_id'],
            $data['mata_kuliah_id'],
            $data['nilai']
        ]);
    }

    public function delete($id)
    {
        $stmt = $this->conn->prepare("DELETE FROM nilai WHERE id = ?");
        return $stmt->execute([$id]);
    }
}
