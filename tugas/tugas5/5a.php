
<?php 
$mahasiswa = [
  
  ["nama" => "Haekal",
              "nim" => "2341900290",
              "email" => "haekal@gmail.com ",
              "jurusan" => "teknik infomatika",
              "gambar" => "1.jpg"
            ],
  ["nama" => "agus",
              "nim" => "2341990293",
              "email" => "agus@gmail.com ",
              "jurusan" => "teknik nuklir",
              "gambar" => "2.jpg"
            ],
  ["nama" => "budi",
              "nim" => "2341004671",
              "email" => "budi@gmail.com ",
              "jurusan" => "teknologi informasi",
              "gambar" => "3.png"
            ],
  ["nama" => "robi",
              "nim" => "234194812",
              "email" => "robi@gmail.com ",
              "jurusan" => "gizi",
              "gambar" => "4.jpg"
            ],
  ["nama" => "abdul",
              "nim" => "2341948850",
              "email" => "abdul@gmail.com ",
              "jurusan" => "hukum",
              "gambar" => "5.jpg"
            ],
  ["nama" => "hwang",
              "nim" => "2341748519",
              "email" => "hwang@gmail.com ",
              "jurusan" => "ilmu komunikas",
              "gambar" => "6.jpg"
            ],
  ["nama" => "sarip",
              "nim" => "23418467589",
              "email" => "sarip@gmail.com ",
              "jurusan" => "teknik sipil",
              "gambar" => "7.jpg"
            ],
  ["nama" => "asep",
              "nim" => "8201194051",
              "email" => "asep@gmail.com ",
              "jurusan" => "teknik mesin",
              "gambar" => "8.jpg"
            ],
  ["nama" => "apip",
              "nim" => "3301194051",
              "email" => "apip@gmail.com ",
              "jurusan" => "teknik elektro",
              "gambar" => "9.jpg"
            ],
  ["nama" => "yusuf",
              "nim" => "1122334455",
              "email" => "yusuf@gmail.com ",
              "jurusan" => "teknik informatika",
              "gambar" => "10.jpg"
              ]

            ];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Mahasiswa</title>
</head>
<body>
  <h1>Daftar Mahasiswa</h1>
  <?php foreach ($mahasiswa as $mhs) : ?>
    <ul>
    <li>
        <img src="img/<?= $mhs["gambar"]; ?>">
        
      <li>Nama : <?= $mhs["nama"]; ?></li>
      <li>NIM : <?= $mhs["nim"]; ?></li>
      <li>Email : <?= $mhs["email"]; ?></li>
      <li>Jurusan : <?= $mhs["jurusan"]; ?></li>
    </ul>
  <?php endforeach; ?>
</body>
</html>


