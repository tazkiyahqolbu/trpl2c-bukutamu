
    <h1>Input Buku Tamu</h1>
    <form action="proses.php" method="post">
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="mb-3">
            <label for="komentar" class="form-label">Komentar</label>
            <textarea class="form-control" id="komentar" rows="3" name="komentar"></textarea>
        </div>
        <div class="mb-3">
            <input type="submit" name="submit" class="btn btn-primary">
            <a href = "index.php" class="btn btn-secondary">List Buku Tamu</a>
        </div>
    </form>
