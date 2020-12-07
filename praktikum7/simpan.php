<?php
/*untuk menyimpan data mahasiswa ke database*/
 include "koneksi.php";
/*menyimpan nama kelas dan alamat mahasiswa */
 $nama = $_POST['nama'];
 $kelas = $_POST['kelas'];
 $alamat = $_POST['alamat'];
/*untuk menginput nama kelas dan alamat mahasiswa */
 $sql = "INSERT into data(nama, kelas, alamat) VALUES('$nama','$kelas','$alamat')";
 $add = $conn->query($sql);
/*sebagai lokasi penyimpanan data mahasiswa */
 if($add){
     $conn->close();
     header("location:index.php");
     exit();
/*jika terjadi error maka data tidak bisa tersimpan*/
 }else{
     echo "error : ".$conn->error;
     $conn->close();
     exit();
 }
?>