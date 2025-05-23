<?php
// $mahasiswa = [
//     [
//         "nama" => "Shandhika Galih",
//         "nrp" => "0403040023",
//         "email" => " sandhikagalih@unpas.ac.id"
//     ],
//     [
//         "nama" => "Erik Doank",
//         "nrp" => "0403040001",
//         "email" => " erik@gmail.com"
//     ]
// ];


// ini untuk emanmpilkan hasil yang di atas ,karna di atas masih dalam bentuk string maka digunnakan var_dump
// var_dump($mahasiswa);


// in menggunakan cara json_encode dan mengambil datanya dari dalam database(dari  objek ke json)
$dbh = new PDO ('mysql:host=Localhost; dbname=rest-api', 'root', '');
$db = $dbh->prepare('SELECT * FROM mahasiswa');
$db->execute();
$mahasiswa = $db->fetchAll(PDO::FETCH_ASSOC);


// ini digunakan untyuk mengubah string di atas menjadi json atau objek
$data = json_encode($mahasiswa);
echo $data;

?>