<?php

    include "koneksi.php";

    $nama=$_POST['nama'];
    $pengarang=$_POST['pengarang'];
    $kategori=$_POST['kategori'];
    $penerbit=$_POST['penerbit'];

    $query="INSERT INTO tbl_buku VALUES ('','$nama','$pengarang','$kategori','$penerbit')";
    $sql=mysqli_query($conn,$query);
    if($sql){
        echo "<script>alert('Berhasil Menambahkan data');window.location.href='index.php'</script>";
    }
?>