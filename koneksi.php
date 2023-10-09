<?php
$con = mysqli_connect("localhost", "root", "", "boking_ruangan");
if(mysqli_connect_errno()){
    echo "gagal terhubung dengan database". mysqli_connect_error();
    exit();
}
?>