<h1>List Data Buku Tamu</h1>
    <a href = "index.php?p=create" class="btn btn-primary">Input Buku Tamu</a>
    <br></br>
<table class="table table-hover table-striped table-bordered">
  <thead>
    <tr>
      <th>No</th>
      <th>Nama</th>
      <th>Email</th>
      <th>Komentar</th>
      <th>Timestamp</th>
      <th>Aksi</th>
    </tr>
  </thead>

  <tbody>
    <?php 
      require 'koneksi.php';
      $tampil = $koneksi->query("SELECT * FROM tamu");
      $no = 1;
      while ($data = mysqli_fetch_assoc($tampil)) {
        $time = $data['date_created'];
    ?>
    <tr>
      <td><?= $no++ ?></td>
      <td><?= $data['nama']; ?></td>
      <td><?= $data['email']; ?></td>
      <td><?= $data['komentar']; ?></td>
      <td><?= date('d M Y H:i:s', strtotime($time)) ?></td>
      <td>
        <a href="index.php?key=<?= $data['id']; ?>&p=edit" class="btn btn-warning btn-sm">Edit</a>
        <a href="proses.php?id=<?= $data['id'];?>&aksi=hapus" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</a>
      </td>
    </tr>
    <?php } ?>
  </tbody>
</table>