<?php
//citra dwi
include("koneksi.php");
isset($_GET['id']);
$kode = isset($_GET['id']);
$sql= "DELETE FROM tb_daftar where id=$kode";
$query = mysqli_query($db, $sql);

if($query){
    header("Location:tbl pendaftaran.php?status=sukses");
}else{
        die("akses dilarang");
}
?>