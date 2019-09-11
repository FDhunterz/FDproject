<?php
    $server = 'localhost';
    $username = 'root';
    $password = '';
    $DB = 'fdproject'

    $connect = mysqli_connect($server, $username,$password,$DB);

    if (!$connect) {
        return 'gagal connect';
    }else{
        return 'berhasil connect';
    }

?>