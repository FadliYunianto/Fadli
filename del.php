<?php
/** file ini berfungsi untuk menghapus file
 * unlik() adalah sintaks yang berfungsi untuk menghapus file */

if(isset($_POST['tombol']) && isset($_POST['isi']))
{
    $filee = $_POST['isi'];
    if (file_exists($filee)){
        if(unlink($filee)){
            echo "$filee Berhasil Dihapuss";
        }
        else {
            echo "$filee Gagal Dihapuss";
        }
    }
    else {
        echo "File Tidak Ada disini";
    }
}
else {
    echo "File Tidak ditemukan";
}?>
<html>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="text" name="isi">
        <button name="tombol">Gasskan</button>
    </form>
</html>
