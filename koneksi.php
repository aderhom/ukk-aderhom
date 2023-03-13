<?php

$koneksi = mysqli_connect('localhost','root','','d_ade_w');

if(!$koneksi){
    echo"Koneksi Anda Gagal";
}