<?php
header('Access-Control-Allow-Origin: *');

$databaseHost = 'localhost';
$databaseName = 'siticket';
$databaseUsername = 'root';
$databasePassword = '';

// Buat koneksi
$conn = mysqli_connect(
	"$databaseHost",
	"$databaseUsername",
	"$databasePassword",
	"$databaseName"
);

// Periksa koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Query untuk mengambil data dari tabel ticket
$sql = "SELECT keterangan, COUNT(*) as jumlah FROM ticket GROUP BY keterangan";
$result = $conn->query($sql);

$data = [];

// Ambil data dan simpan ke dalam array
while ($row = $result->fetch_assoc()) {
    $data[] = [
        'keterangan' => $row['keterangan'],
        'jumlah' => $row['jumlah'],
    ];
}

// Tutup koneksi
$conn->close();

// Mengirim data sebagai JSON
header('Content-Type: application/json');
echo json_encode($data);
?>
