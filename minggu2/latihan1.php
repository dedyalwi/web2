<?php
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
    <title>Latihan GET</title>
</head>
<body>
   <h1>Data Mahasiswa</h1>
   <ul>
   <?php foreach ($mahasiswa as $mhs) : ?>
        <li>
            <a href="latihan2.php?nama=<?= $mhs["nama"]; ?>&nim=<?= $mhs["nim"]; ?>&jurusan=<?= $mhs["jurusan"]; ?>&email=<?= $mhs["email"]; ?>&gambar=<?= $mhs["gambar"]; ?>"><?= $mhs["nama"]; ?></a>
        </li>

   <?php endforeach; ?>
   </ul>
</body>