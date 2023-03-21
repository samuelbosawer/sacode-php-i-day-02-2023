<?php
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
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Day 02</title>
</head>
<body>
    <table>
        <tr>
            <td>No</td>
            <td>Nama Lengkap</td>
            <td>Alamat</td>
            <td>TTL</td>
        </tr>
            <?php $i=0; foreach($DataSemuaSiswa as $siswa): ?>
                <tr>
                    <td><?php echo ++$i?></td>
                    <td><?= $siswa['namadepan'].' '.$siswa['namabelakang']?></td>
                    <td><?= $siswa['alamatjalan'].' '. $siswa['alamatkelurahan']?></td>
                    <td><?= $siswa['ttl']?></td>
                </tr>
            <?php endforeach; ?>
    </table>    

</body>
</html>