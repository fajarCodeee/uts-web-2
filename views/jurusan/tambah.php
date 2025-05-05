<?php include 'views/template/header.php'; ?>

<h3>Tambah Jurusan</h3>
<form method="post" action="">
    <div class="mb-3">
        <label class="form-label">Nama Jurusan</label>
        <input type="text" name="nama_jurusan" class="form-control" required>
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
    <a href="index.php?page=jurusan" class="btn btn-secondary">Batal</a>
</form>

<?php include 'views/template/footer.php'; ?>