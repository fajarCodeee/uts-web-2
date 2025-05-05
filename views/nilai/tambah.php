<?php include 'views/template/header.php'; ?>

<h3>Tambah Nilai Mahasiswa</h3>
<form method="post" action="">
    <div class="mb-3">
        <label class="form-label">Mahasiswa</label>
        <select name="mahasiswa_id" class="form-select" required>
            <option value="">-- Pilih Mahasiswa --</option>
            <?php foreach ($mahasiswa as $m): ?>
                <option value="<?= $m['id'] ?>"><?= $m['nama'] ?></option>
            <?php endforeach; ?>
        </select>
    </div>

    <div class="mb-3">
        <label class="form-label">Mata Kuliah</label>
        <select name="mata_kuliah_id" class="form-select" required>
            <option value="">-- Pilih Mata Kuliah --</option>
            <?php foreach ($mata_kuliah as $mk): ?>
                <option value="<?= $mk['id'] ?>"><?= $mk['nama_mk'] ?></option>
            <?php endforeach; ?>
        </select>
    </div>

    <div class="mb-3">
        <label class="form-label">Nilai</label>
        <input type="number" step="0.01" name="nilai" class="form-control" required min="0" max="100">
    </div>

    <button type="submit" class="btn btn-primary">Simpan</button>
    <a href="index.php?page=nilai" class="btn btn-secondary">Batal</a>
</form>

<?php include 'views/template/footer.php'; ?>