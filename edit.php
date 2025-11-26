
    <h1>Input Buku Tamu</h1>
    <?php 
    require 'koneksi.php'; //memasukkan file koneksi.php agar bisa menggunakan variabel $koneksi
    $id = $_GET['key'];
    $edit =$koneksi->query("SELECT * FROM tamu WHERE id= '$id'");
    $data =$edit->fetch_assoc();
    
    ?>
   

    <form action="proses.php" method="POST"> <!--tidak ditulis default action halaman nya sendiri, kalau method defaultnya get => di gabungkan ke url--> 
        <input type="text" name="id" value="<?= $data['id'] ?>" hidden>
        <div class="mb-3">
        <label for="nama" class="form-label">Nama</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" name ="nama" value="<?= $data['nama'] ?>" required>
        </div>
        <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="exampleFormControlInput1" name ="email" value=<?= $data['email'] ?> required>
        </div>
        <div class="mb-3">
        <label for="komentar" class="form-label">Komentar</label>
        <textarea class="form-control" name = "komentar" id="exampleFormControlTextarea1" rows="3"><?= $data['komentar'] ?></textarea>
        </div>
        <div class="mb-3">
            <input type="submit" name ="update" class="btn btn-primary" value="Submit" > 
             <a href="list.php" class= "btn btn-secondary">List buku tamu</a>

        </div>
    </form>
   