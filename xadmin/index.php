<?php
include '../xconfig/xconfig.php';
    if (isset($_GET['pesan'])) {
        echo $_GET['pesan'];
    }

    session_start();
    if(!isset($_SESSION['id_user'])){
        header('location:login.php');
    }else{

?>


<html>
<head>
    <title>Sistem Informasi Pengumpulan - Halaman Admin</title>
</head>

<body>

<table border="1"  width="80%" align="center">
    <tr>
        <td colspan="2" align="center"><h1>HEADER</h1></td>
    </tr>
    <tr>
        <td width="30%">
            <ul>
                <li><a href="login.php">Login</a></li>
                <li><a href="logout.php">Logout</a></li>
                <li><a href="?page=Kelas">Management Kelas</a></li>
                <li><a href="?page=MataKuliah">Mata Kuliah</a></li>
            </ul>
        </td>
        <td width="70%">
            <?php
                $hal = $_GET['page'];

                if($hal == 'Utama'){
                    require 'utama.php';
                }else if($hal == 'Kelas'){
                    require 'kelas/kelas.php';
                }else if($hal == 'Tambah-Kelas'){
                    require 'kelas/add-kelas.php';
                }else if($hal == 'Edit-Kelas'){
                    require 'kelas/edit-kelas.php';
                }else if($hal == 'Hapus-Kelas'){
                    require 'kelas/hapus-kelas.php';
                }
                
                else if($hal == 'MataKuliah'){
                    require 'matkul/matkul.php';
                }else if($hal == 'Tambah-MataKuliah'){
                    require 'matkul/add-matkul.php';
                }else if($hal == 'Edit-MataKuliah'){
                    require 'matkul/edit-matkul.php';
                }else if($hal == 'Hapus-MataKuliah'){
                    require 'matkul/hapusmatkul.php';
                }
                else{
                    echo "<h1>MAAF, HALAMAN TIDAK TERSEDIA</h1>";
                }
            ?>
        </td>
    </tr>
</table>


</body>

</html>

    <?php } ?>