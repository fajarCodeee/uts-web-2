<?php include 'views/template/header.php'; ?>

<h3>Data Jurusan</h3>
<a href="index.php?page=jurusan&action=tambah" class="btn btn-success mb-3">+ Tambah Jurusan</a>

<table class="table table-bordered">
    <thead class="table-dark">
        <tr>
            <th>No</th>
            <th>Nama Jurusan</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php $no = 1;
        foreach ($data as $jurusan): ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $jurusan['nama_jurusan'] ?></td>
                <td>
                    <a href="index.php?page=jurusan&action=edit&id=<?= $jurusan['id'] ?>" class="btn btn-warning btn-sm">Edit</a>
                    <a href="index.php?page=jurusan&action=hapus&id=<?= $jurusan['id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus?')">Hapus</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?php include 'views/template/footer.php'; ?>