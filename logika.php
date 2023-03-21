<?php
// TIPE DATA ARRAY

$nama = ['Samuel','Marten','Maikel','Acho','korinus','Lukas','Obed','Yakob'];

// Panggil Array berdasarkan index
echo '<p>'. $nama[0] .'</p>';
echo '<p>'. $nama[1] .'</p>';
echo '<p>'. $nama[2] .'</p>';
echo '<p>'. $nama[3] .'</p>';
echo '<p>'. $nama[4] .'</p>';

var_dump($nama);
echo '<p> Jumlah Index Array = '.count($nama) .'</p>';
// Panggil Array mengunakan foreach
$i = 0;
echo "<p> Nama Siswa </p>"; 

foreach($nama as $siswa)
{
    ++$i;
    echo "<p>".$i.'. '.$siswa."</p>";
}

// Array yang memiliki index dan value
$dataSiswa = [
                "namaDepan" => 'Samuel',
                "NamaBelakang" => 'Bosawer',
                "Alamat" => 'BTN Simpama Sentani',
                "Usia" => 'XX'
            ];
echo $dataSiswa['namaDepan'].' '.$dataSiswa['NamaBelakang'].' Alamat :'. $dataSiswa['Alamat'];

// Panggil dengan pengulangan
echo "<br> Data Siswa <br>"; 
foreach($dataSiswa as $ds)
{
   echo $ds ."<br>"; 
}

// Array Multi demensi
$DataSemuaSiswa =[
    [
        "namadepan" => "Samuel",
        "namabelakang" => "Bosawer",
        "alamatjalan" => "BTN Simpama",
        "alamatkelurahan" => "Dobonsolo",
        "ttl" => "Wamena, 15 September **** ",
    ],
    [
        "namadepan" => "Marthen",
        "namabelakang" => "Tonouye",
        "alamatjalan" => "BTN Simpama",
        "alamatkelurahan" => "Dobonsolo",
        "ttl" => "Wamena, 15 September **** ",
    ],
    [
        "namadepan" => "Maikel",
        "namabelakang" => "Kayame",
        "alamatjalan" => "BTN Simpama",
        "alamatkelurahan" => "Dobonsolo",
        "ttl" => "Wamena, 15 September **** ",
    ],
    [
        "namadepan" => "Sulenias",
        "namabelakang" => "Asso",
        "alamatjalan" => "BTN Simpama",
        "alamatkelurahan" => "Dobonsolo",
        "ttl" => "Wamena, 15 September **** ",
    ],
    [
        "namadepan" => "Korinus",
        "namabelakang" => "Wenda",
        "alamatjalan" => "BTN Simpama",
        "alamatkelurahan" => "Dobonsolo",
        "ttl" => "Wamena, 15 September **** ",
    ]
];


// echo $dataSiswa['namadepan'];
// var_dump($DataSemuaSiswa);
$i= 0;
foreach($DataSemuaSiswa as $siswa)
{   ++$i;
    echo "<h4> Data Siswa No. ".$i." </h4> <br>";
    echo $siswa['namadepan'].' '. $siswa['namabelakang'].'<br>' ;
    echo $siswa['alamatjalan'].' '. $siswa['alamatkelurahan'].'<br>' ;
    echo $siswa['ttl'];
}


