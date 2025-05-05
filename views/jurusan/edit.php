<?php include 'views/template/header.php'; ?>

<h3>Edit Jurusan</h3>
<form method="post" action="">
    <div class="mb-3">
        <label class="form-label">Nama Jurusan</label>
        <input type="text" name="nama_jurusan" class="form-control" value="<?= $jurusan['nama_jurusan'] ?>" required>
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
    <a href="index.php?page=jurusan" class="btn btn-secondary">Batal</a>
</form>

<?php include 'views/template/footer.php'; ?>