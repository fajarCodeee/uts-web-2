<?php include 'views/template/header.php'; ?>

<h2>Data Mahasiswa</h2>
<a href="index.php?page=mahasiswa&action=tambah" class="btn btn-success mb-3">+ Tambah Mahasiswa</a>

<table class="table table-striped table-bordered">
    <thead class="table-dark">
        <tr>
            <th>No.</th>
            <th>Nama</th>
            <th>NIM</th>
            <th>Jurusan</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php $no = 1;
        foreach ($data as $row): ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $row['nama'] ?></td>
                <td><?= $row['nim'] ?></td>
                <td><?= $row['nama_jurusan'] ?></td>
                <td>
                    <a href="index.php?page=mahasiswa&action=edit&id=<?= $row['id'] ?>" class="btn btn-warning btn-sm">Edit</a>
                    <a href="index.php?page=mahasiswa&action=hapus&id=<?= $row['id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin?')">Hapus</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?php include 'views/template/footer.php'; ?>