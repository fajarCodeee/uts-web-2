<?php include 'views/template/header.php'; ?>

<h3>Data Mata Kuliah</h3>
<a href="index.php?page=mata_kuliah&action=tambah" class="btn btn-success mb-3">+ Tambah Mata Kuliah</a>

<table class="table table-bordered">
    <thead class="table-dark">
        <tr>
            <th>No</th>
            <th>Nama MK</th>
            <th>SKS</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php $no = 1;
        foreach ($data as $mk): ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $mk['nama_mk'] ?></td>
                <td><?= $mk['sks'] ?></td>
                <td>
                    <a href="index.php?page=mata_kuliah&action=edit&id=<?= $mk['id'] ?>" class="btn btn-warning btn-sm">Edit</a>
                    <a href="index.php?page=mata_kuliah&action=hapus&id=<?= $mk['id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin mau hapus?')">Hapus</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?php include 'views/template/footer.php'; ?>