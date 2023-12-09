<?php
if($_POST){
    $id_produk=$_POST['id_produk'];
    $nama_produk=$_POST['nama_produk'];
    $harga=$_POST['harga'];
    if(empty($nama_produk)){
        echo "<script>alert('nama produk tidak boleh kosong');location.href='tambah_produk.php';</script>";
    } else {
        include "koneksi.php";
            $update=mysqli_query($conn,"update produk set nama_produk='".$nama_produk."',harga ='".$harga."', id_produk='".$id_produk."' where id_produk = '".$id_produk."' ") or die(mysqli_error($conn));
            if($update){
                echo "<script>alert('Sukses update produk');location.href='tampil.php';</script>";
            } else {
                echo "<script>alert('Gagal update produk');location.href='ubah_produk.php?id_produk=".$id_produk."';</script>";
            }
        
    } 
}
?>
