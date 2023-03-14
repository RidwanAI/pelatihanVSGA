<form>
    Masukkan Nama : <input type="text" name="nama">
    Masukkan email : <input type="text" name="email">
    Masukkan No. Handphone : <input type="text" name="phone"><br>
    <input type="submit" name="kirim">
</form>

<?php

// Mendapatkan data inputan dari user
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];

// Membuat array data
$data = array(
    'name' => $name,
    'email' => $email,
    'phone' => $phone
);

// Membaca data dari file JSON
$json_data = file_get_contents('data.json');

// Merubah data JSON menjadi array PHP
$decoded_data = json_decode($json_data, true);

// Menambahkan data baru ke dalam array PHP
array_push($decoded_data, $data);

// Merubah data array PHP menjadi JSON
$encoded_data = json_encode($decoded_data);

// Menyimpan data JSON ke dalam file
file_put_contents('data.json', $encoded_data);

// Menampilkan data dari file JSON
foreach ($decoded_data as $data) {
    echo 'Name: ' . $data['name'] . '<br>';
    echo 'Email: ' . $data['email'] . '<br>';
    echo 'Phone: ' . $data['phone'] . '<br><br>';
}

?>
