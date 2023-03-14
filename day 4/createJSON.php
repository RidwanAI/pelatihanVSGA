<?php
// Data 1
$data [] = array(
    'no'     => 1,
    'nama'   => 'IlhamGod',
    'alamat' => 'Nganjuk'
);

// Data 2
$data [] = array(
    'no'     => 2,
    'nama'   => 'Bocil Ngeyel',
    'alamat' => 'Madiun'
);

// Data 3
$data [] = array(
    'no'     => 3,
    'nama'   => 'Bocil FNAF',
    'alamat' => 'Bekasi'
);


// Mengencode data menjadi json
$jsonfile = json_encode($data, JSON_PRETTY_PRINT);

// Menyimpan data ke dalam anggota.json
file_put_contents('anggota.json', $jsonfile);
?>