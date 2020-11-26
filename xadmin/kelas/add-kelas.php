<h2>Tambah Data Kelas</h2>

<form action="" method="POST">
    <input type="text" name="id_kelas" hidden>
    Nama Kelas : <input type="text" name="nama_kelas"><br>
    Dosen Pembimbing Akademik : <input type="text" name="dpa"><br>
    <input type="submit" name="simpan" value="SAVE">
</form>

<?php

if(isset($_POST['simpan'])){
    $id_kelas = $_POST['id_kelas'];
    $nama_kelas = $_POST['nama_kelas'];
    $dpa = $_POST['dpa'];

    $xquery = mysqli_query($koneksi, "insert into kelas values(NULL,'$nama_kelas','$dpa') ")or die(mysqli_error());
    if($xquery == 1){
        echo "DATA BERHASIL DISIMPAN";
        header('location: index.php?page=Kelas');
    }else{
        echo "DATA GAGAL DISIMPAN ".mysqli_error();
    }
}

?>