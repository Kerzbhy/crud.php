<?php

    include 'koneksi.php';

    $id_buku=$_POST['id_buku'];
    $nama=$_POST['nama'];
    $pengarang=$_POST['pengarang'];
    $kategori=$_POST['kategori'];
    $penerbit=$_POST['penerbit'];

 $query="UPDATE tbl_buku SET nama='$nama', pengarang='$pengarang', kategori='$kategori', penerbit='$penerbit' WHERE id_buku= '$id_buku' ";
 $sql=mysqli_query($conn,$query);
 if($sql){
    echo "<script>alert('Data Berhasil Diubah');window.location.href='index.php'</script>";
}

?>
