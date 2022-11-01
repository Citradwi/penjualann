<?php
include("koneksi.php");?>

<html>
    <head>
</head>
<body>
    <h1>Tabel Pendaftaran</h1>
    <h4><a href=tambah_pendaftaran.php>Tambah Daftar</a></h4>
    <table border="1">
        <tr>
            <th>id</th>
            <th>Nama lengkap</th>
            <th>Tempat lahir</th>
            <th>Tanggal lahir</th>
            <th>Alamat</th>
            <th>Jenis kelamin</th>
            <th>Agama</th>
        </tr>


<?php
    include("koneksi.php");
    $sql='SELECT * FROM tb_daftar';
    $query = mysqli_query($db, $sql);

    while($daftar=mysqli_fetch_array($query)){
        echo "<tr>";
               echo "<td>".$daftar['id']."</td>";
               echo "<td>".$daftar['nama']."</td>";
               echo "<td>".$daftar['tempat_lahir']."</td>";
               echo "<td>".$daftar['tanggal_lahir']."</td>";
               echo "<td>".$daftar['jenis_kelamin']."</td>";
               echo "<td>".$daftar['agama']."</td>";

               echo "</td>";
               echo "<a href='edit-daftar.php?id=".$daftar['id']."'Edit</a> |";
               echo "<a href='hapus-daftar.php?id=".$daftar['id']."'Hapus</a> |";
               echo "</td>";

        echo "</tr>";

}
    ?>
</table>
</html>
</body>