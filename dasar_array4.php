<?php
$perusahaan = [
    'nama' => 'Dina Amelia',
    'umur' => '16 Tahun',
    'alamat' => 'Babakan Nugraha',
    'hobby' => [
        'Membaca',
        [
            '1. Novel',
            '2. Dongeng'
        ],
        'Menghitung',
    ],
    'Media Sosial' => [
        'Instagram' => 'dina.7550',
        'Facebook' => 'gaada'
    ]
];

echo "<pre>";
print_r($perusahaan);

echo "<br>";
echo "Program array multidimensi menampilkan satu data <br>";
echo $perusahaan['hobby'][2]."<br>";
echo $perusahaan['Media Sosial']['Facebook']."<br>";
echo $perusahaan['hobby'][1][1];



?>