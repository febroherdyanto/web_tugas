<h2>Tambah Data Mata Kuliah</h2>

<form action="" method="POST">
    <input type="text" name="id_matkul" hidden>
    Kode Mata Kuliah : <input type="text" name="kode_matkul"><br>
    Nama Mata Kuliah : <input type="text" name="nama_matkul"><br>
    Dosen Mata Kuliah: <input type="text" name="dosen"><br>
    <input type="button" ... value="CANCEL" onclick="history.back();" />
    <input type="submit" name="simpan" value="SAVE">
</form>

<?php

if(isset($_POST['simpan'])){
    $id_matkul = $_POST['id_matkul'];
    $kode_matkul = $_POST['kode_matkul'];
    $nama_matkul = $_POST['nama_matkul'];
    $dosen = $_POST['dosen'];

    $xquery = mysqli_query($koneksi, "insert into matkul values(NULL,'$kode_matkul','$nama_matkul','$dosen') ")or die(mysqli_error());
    if($xquery == 1){
        echo "DATA BERHASIL DISIMPAN";
        header('location: index.php?page=MataKuliah');
    }else{
        echo "DATA GAGAL DISIMPAN ".mysqli_error();
    }
}

?>