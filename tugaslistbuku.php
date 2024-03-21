<?php
//array multidimensi
$listbuku = [
    ["judul" =>"Akuntansi Pengantar 1",
     "pengarang" => "Supardi",
     "penerbit" => "Gava Media",
     "tahun" => "2009",
     "gambar" => "akuntansi1.jpg"
    ],

    ["judul" =>"Aplikasi Klinis Induk Ovulasi & Stimulasi Ovarium",
    "pengarang" => "Samsulhadi	",
    "penerbit" => "Sagung Seto	",
    "tahun" => "2013",
    "gambar" => "induk.jpg"
    ],
    ["judul" =>"Aplikasi Praktis Asuhan Keperawatan Keluarga	",
    "pengarang" => "Komang Ayu Heni		",
    "penerbit" => "Sagung Seto	",
    "tahun" => "2012",
    "gambar" => "asuh.jpg"
    ],
    ["judul" =>"A-Z Psikologi : Berbagai kumpulan topik Psikologi	",
    "pengarang" => "Zainul Anwar",
    "penerbit" => "Andi Offset	",
    "tahun" => "2012",
    "gambar" => "psikologi.jpg"
    ],
    ["judul" =>"Bangsa gagal ; Mencari identitas kebangsaan	",
    "pengarang" => "Nasruddin Anshoriy	",
    "penerbit" => "LKiS",
    "tahun" => "2008	",
    "gambar" => "bangsa.jpg"
    ]

];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Buku</title>
</head>
<body>
   <h1>List Buku</h1>
   <?php foreach ($listbuku as $buku) : ?>
   <ul>
        <li>
            <img src="img/<?= $buku["gambar"] ; ?>">  
        </li>
        <li>Judul    :<?= $buku["judul"] ?></li>
        <li>Pengarang    :<?= $buku["pengarang"] ?></li>
        <li>Penerbit :<?= $buku["penerbit"] ?></li>
        <li>Tahun Terbit   :<?= $buku["tahun"] ?></li>
   </ul>
   <?php endforeach; ?>
</body>