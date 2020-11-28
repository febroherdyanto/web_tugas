<h2>Management Kelas</h2>


<a href="?page=Tambah-Kelas">Tambah Data Kelas</a>
<table border="1" width=100%>
    <tr>
        <td>No</td>
        <td>Nama Kelas</td>
        <td>Dosen Pembimbing Akademik</td>
        <td>Aksi</td>
    </tr>
    
    <?php
        $no = 1;
        $xquery = mysqli_query($koneksi, "select * from kelas");
        while($data = mysqli_fetch_array($xquery)){
    ?>
    <tr>
        <td><?php echo $no; ?></td>
        <td><?php echo $data['nama_kelas']; ?></td>
        <td><?php echo $data['dpa']; ?></td>
        <td><a href="?page=Edit-Kelas&No=<?php echo $data['id_kelas']; ?>">Edit</a> | <a href="?page=Hapus-Kelas&No=<?php echo $data['id_kelas']; ?>">Hapus</a>
    </tr>
        <?php $no++; } ?>
</table>