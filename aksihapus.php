<?php
    include 'koneksi.php';

    $query="DELETE FROM tbl_buku WHERE id_buku='$_GET[id_buku]'";
    $sql=mysqli_query($conn,$query);
    if($sql){
        echo "<script>alert('Berhasil Menhapus Data '); window.location.href='index.php';</script>";
    }

?>