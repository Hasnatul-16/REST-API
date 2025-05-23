<?php
// mengubah dari json ke objek                                           
$data = file_get_contents('coba.json');
$mahasiswa = json_decode($data, true);

var_dump($mahasiswa);

// untuk menampilkan bagian yang di inginkan saja 
echo $mahasiswa[0]["pembimbing"]["pembimbing1"];
?>
