<!-- filepath: c:\xampp\htdocs\Sungai Besar\Sungai-Besar\resources\views\admin.blade.php -->
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - CRUD Berita</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <?php echo $__env->make('navbar', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

<div class="container">
    <h2 class="mb-4">Kelola Berita</h2>
    <!-- Tombol tambah berita -->
    <button class="btn btn-success mb-3" data-bs-toggle="modal" data-bs-target="#tambahBeritaModal">Tambah Berita</button>
    <!-- Tabel berita -->
    <div class="table-responsive">
        <table class="table table-bordered table-hover align-middle">
            <thead class="table-primary">
                <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Kategori</th>
                    <th>Tanggal</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Judul Berita 1</td>
                    <td>Politik</td>
                    <td>25 Juni 2025</td>
                    <td>
                        <button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editBeritaModal">Edit</button>
                        <button class="btn btn-danger btn-sm">Hapus</button>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Judul Berita 2</td>
                    <td>Teknologi</td>
                    <td>24 Juni 2025</td>
                    <td>
                        <button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editBeritaModal">Edit</button>
                        <button class="btn btn-danger btn-sm">Hapus</button>
                    </td>
                </tr>
                <!-- End contoh data -->
            </tbody>
        </table>
    </div>
</div>

<!-- Modal Tambah Berita -->
<div class="modal fade" id="tambahBeritaModal" tabindex="-1" aria-labelledby="tambahBeritaModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <form class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="tambahBeritaModalLabel">Tambah Berita</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
      </div>
      <div class="modal-body">
        <div class="mb-3">
          <label for="judul" class="form-label">Judul</label>
          <input type="text" class="form-control" id="judul" required>
        </div>
        <div class="mb-3">
          <label for="kategori" class="form-label">Kategori</label>
          <select class="form-select" id="kategori" required>
            <option value="">Pilih Kategori</option>
            <option value="Politik">Politik</option>
            <option value="Teknologi">Teknologi</option>
            <option value="Olahraga">Olahraga</option>
          </select>
        </div>
        <div class="mb-3">
          <label for="tanggal" class="form-label">Tanggal</label>
          <input type="date" class="form-control" id="tanggal" required>
        </div>
        <div class="mb-3">
          <label for="isi" class="form-label">Isi Berita</label>
          <textarea class="form-control" id="isi" rows="4" required></textarea>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-success">Simpan</button>
      </div>
    </form>
  </div>
</div>

<!-- Modal Edit Berita (contoh, isi sama seperti tambah) -->
<div class="modal fade" id="editBeritaModal" tabindex="-1" aria-labelledby="editBeritaModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <form class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editBeritaModalLabel">Edit Berita</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
      </div>
      <div class="modal-body">
        <div class="mb-3">
          <label for="edit_judul" class="form-label">Judul</label>
          <input type="text" class="form-control" id="edit_judul" required>
        </div>
        <div class="mb-3">
          <label for="edit_kategori" class="form-label">Kategori</label>
          <select class="form-select" id="edit_kategori" required>
            <option value="">Pilih Kategori</option>
            <option value="Politik">Politik</option>
            <option value="Teknologi">Teknologi</option>
            <option value="Olahraga">Olahraga</option>
          </select>
        </div>
        <div class="mb-3">
          <label for="edit_tanggal" class="form-label">Tanggal</label>
          <input type="date" class="form-control" id="edit_tanggal" required>
        </div>
        <div class="mb-3">
          <label for="edit_isi" class="form-label">Isi Berita</label>
          <textarea class="form-control" id="edit_isi" rows="4" required></textarea>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-warning">Update</button>
      </div>
    </form>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html><?php /**PATH C:\xampp\htdocs\Sungai Besar\Sungai-Besar\resources\views/admin.blade.php ENDPATH**/ ?>