<?php include 'views/template/header.php'; ?>

<h3>Data Nilai Mahasiswa</h3>
<a href="index.php?page=nilai&action=tambah" class="btn btn-success mb-3">+ Tambah Nilai</a>

<table class="table table-bordered">
    <thead class="table-dark">
        <tr>
            <th>No</th>
            <th>Nama Mahasiswa</th>
            <th>Mata Kuliah</th>
            <th>Nilai</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php $no = 1;
        foreach ($data as $row): ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $row['nama'] ?></td>
                <td><?= $row['nama_mk'] ?></td>
                <td><?= $row['nilai'] ?></td>
                <td>
                    <a href="index.php?page=nilai&action=hapus&id=<?= $row['id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin mau hapus?')">Hapus</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?php include 'views/template/footer.php'; ?>