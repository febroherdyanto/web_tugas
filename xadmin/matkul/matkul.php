<h2>Management Mata Kuliah</h2>


<a href="?page=Tambah-MataKuliah"><h3>+ Tambah Data</h3></a>
<table border="1" width="100%">
    <tr>
        <td>No</td>
        <td>Kode Mata Kuliah</td>
        <td>Nama Mata Kuliah</td>
        <td>Nama Dosen</td>
        <td>Aksi</td>
    </tr>

    <?php
        $xquery = mysqli_query($koneksi, "select * from matkul");
        while($data = mysqli_fetch_array($xquery)){
    ?>
    <tr>
        <td>No</td>
        <td><?php echo $data['kode_matkul']; ?></td>
        <td><?php echo $data['nama_matkul']; ?></td>
        <td><?php echo $data['dosen']; ?></td>
        <td><a href="?page=Edit-MataKuliah&No=<?php echo $data['id_matkul']; ?>">Edit</a> | <a href="?page=Hapus-MataKuliah&No=<?php echo $data['id_matkul']; ?>">Hapus</a>
    </tr>
        <?php } ?>
</table>