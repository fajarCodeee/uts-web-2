<?php include 'views/template/header.php'; ?>

<h3>Tambah Mahasiswa</h3>
<form action="" method="post">
    <div class="mb-3">
        <label for="nama" class="form-label">Nama Mahasiswa</label>
        <input type="text" name="nama" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="nim" class="form-label">NIM</label>
        <input type="text" name="nim" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="jurusan_id" class="form-label">Jurusan</label>
        <select name="jurusan_id" class="form-select" required>
            <option value="">-- Pilih Jurusan --</option>
            <?php foreach ($jurusanList as $jurusan): ?>
                <option value="<?= $jurusan['id'] ?>"><?= $jurusan['nama_jurusan'] ?></option>
            <?php endforeach; ?>
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
    <a href="index.php?page=mahasiswa" class="btn btn-secondary">Batal</a>
</form>

<?php include 'views/template/footer.php'; ?>