<?php

$no = $_GET['No'];

$query = mysqli_query($koneksi, "delete from kelas where id_kelas='$no'");
if($query == 1){
    echo "DATA BERHASIL DISIMPAN";
    header('location: index.php?page=Kelas');
}else{
    echo "DATA GAGAL DISIMPAN ".mysqli_error();
}

?>