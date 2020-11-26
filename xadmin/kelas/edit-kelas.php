<h2>Edit Data Kelas</h2>
<?php
$no = $_GET['No'];
$qdata = mysqli_query($koneksi, "select * from kelas where id_kelas=$no");
$qtampil = mysqli_fetch_array($qdata);
?>
<form action="" method="POST">
    <input type="text" name="id_kelas"  value="<?php echo $no; ?>" hidden>
    Nama Kelas : <input type="text" name="nama_kelas" value="<?php echo $qtampil['nama_kelas']; ?>"><br>
    Dosen Pembimbing Akademik : <input type="text" name="dpa" value="<?php echo $qtampil['dpa']; ?>"><br>
    <input type="submit" name="simpan" value="SAVE">
</form>

<?php

if(isset($_POST['simpan'])){
    $id_kelas = $_POST['id_kelas'];
    $nama_kelas = $_POST['nama_kelas'];
    $dpa = $_POST['dpa'];

    $xquery = mysqli_query($koneksi, "update kelas set nama_kelas='$nama_kelas', dpa='$dpa' where id_kelas='$no' ")or die(mysqli_error());
    if($xquery == 1){
        echo "DATA BERHASIL DISIMPAN";
        header('location: index.php?page=Kelas');
    }else{
        echo "DATA GAGAL DISIMPAN ".mysqli_error();
    }
}

?>