<?php include 'views/template/header.php'; ?>

<h3>Edit Mata Kuliah</h3>
<form method="post" action="">
    <div class="mb-3">
        <label class="form-label">Nama Mata Kuliah</label>
        <input type="text" name="nama_mk" class="form-control" value="<?= $mata_kuliah['nama_mk'] ?>" required>
    </div>
    <div class="mb-3">
        <label class="form-label">SKS</label>
        <input type="number" name="sks" class="form-control" value="<?= $mata_kuliah['sks'] ?>" required min="1" max="6">
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
    <a href="index.php?page=mata_kuliah" class="btn btn-secondary">Batal</a>
</form>

<?php include 'views/template/footer.php'; ?>