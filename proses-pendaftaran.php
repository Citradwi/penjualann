<?php
include("koneksi.php");
if(isset($_POST 'tambah' )){;
        $nm=$_POST['nama'];
        $tempat=$_POST['tempat lahir'];
        $tanggal=$_POST['tanggal lahir'];
        $alamat=$_POST['alamat'];
        $jk=$_POST['jenis_kelamin'];
        $agama=$_POST['agama'];

    $sql = "INSERT INTO tb_daftar(nama, tempat_lahir, tanggal_lahir, alamat, jenis_kelamin, agama)
    VALUES ('$nm', '$tempat', '$tanggal', '$selamat', '$jk', '$agama')";
    $query = mysqli_query($db, $sql);

    if($query){
        header('Location:tbl pendaftaran.php?status=sukses');
     }else{
        header('Location:tbl pendaftaran.php?status=gagal');
     }
}