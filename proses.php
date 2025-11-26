<?php
// include  jika file yang dimasukkan eror kode lain ttp dijalankan | require jika file yang dimasukkan eror kode lain nya juga eror| 
//include_once yg dipanggil yg pertama | require_once

require 'koneksi.php'; //memasukkan file koneksi.php agar bisa menggunakan variabel $koneksi
//blok kode untuk menyimpan data
if(isset($_POST['submit'])){
    $nama = $_POST['nama'];
    $email = $_POST['email'];  
    $komentar = $_POST['komentar'];
  //fungsi date untuk mengambil tanggal sekarang dengan format tahun-bulan-tanggal

    $sql ="INSERT INTO tamu(nama,email,komentar)
            VALUES ('$nama','$email','$komentar')";
    $query = $koneksi->query($sql); //eksekusi perintah sql(query))
    if($query){
        echo "Berhasil menyimpan data";
        header('Location: index.php'); //mengalihkan ke halaman list.php
    }
    else {
        echo "Gagal menyimpan data";
    }    
}
//blok kode untuk update data

if(isset($_POST['update'])){
    $nama = $_POST['nama'];
    $email = $_POST['email'];  
    $komentar = $_POST['komentar'];
    $id = $_POST['id'];

    $sql ="UPDATE tamu SET nama='$nama',
            email='$email',
            komentar='$komentar'
            WHERE id= '$id'";
    $query = $koneksi->query($sql); //eksekusi perintah sql(query))
    if($query){
        echo "Berhasil menyimpan data";
        header('Location: index.php'); //mengalihkan ke halaman list.php
    }
    else {
        echo "Gagal menyimpan data";
    }    
}

if(isset($_GET['aksi']) == 'hapus'){
    $id= $_GET['id'];
    $query = $koneksi->query("DELETE FROM tamu WHERE id='$id'");
     if($query){
        header('Location: index.php'); //mengalihkan ke halaman list.php
    }
    else {
        echo "Gagal menghapus data";
    }   
    

}
?> 

