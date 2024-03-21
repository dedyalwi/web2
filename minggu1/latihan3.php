<?php
//array multidimensi
$mahasiswa = [
    ["nama" =>"Eka Yuniar",
     "nim" => "10510016",
     "jurusan" => "Sistem Informasi",
     "email" => "eka@stimata.ac.id",
     "gambar" => "eka.jpg"
    ],

    ["nama" => "Dedy Alwi",
    "nim" => "23510015",
    "jurusan" => "Sistem Informasi",
    "email" => "dedy@stimata.ac.id",
    "gambar" => "dedy.jpg"
    ]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
</head>
<body>
   <h1>Data Mahasiswa</h1>
   <?php foreach ($mahasiswa as $mhs) : ?>
   <ul>
        <li>
            <img src="img/<?= $mhs["gambar"] ; ?>">  
        </li>
        <li>Nama    :<?= $mhs["nama"] ?></li>
        <li>NIM     :<?= $mhs["nim"] ?></li>
        <li>Jurusan :<?= $mhs["jurusan"] ?></li>
        <li>Email   :<?= $mhs["email"] ?></li>
   </ul>
   <?php endforeach; ?>
</body>