<?php
$koneksi = mysqli_connect("localhost", "root","","cangs");
    if(!($koneksi)){
        echo "<script language=\"javascript\">\n";
        echo "alert(\"Tidak bisa terkoneksi dengan database...\");\n";
        echo "</script>";
        die;
    }else{
        //echo "Sukses";
    }
?>
