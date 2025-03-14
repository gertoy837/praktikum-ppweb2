<?php
require_once('BukuTamu.php');
session_start();

if (!isset($_SESSION['bukutamu'])) {
    $_SESSION['bukutamu'] = [];
}

if (isset($_POST['submit'])) {
    $bukutamu = new BukuTamu();
    $bukutamu->timestamp = date('Y-m-d H:i:s');
    $bukutamu->fullname = $_POST['fullname'];
    $bukutamu->email = $_POST['email'];
    $bukutamu->message = $_POST['message'];

    array_push($_SESSION['bukutamu'], $bukutamu);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buku Tamu</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="container mt-5">
        <div class="d-flex justify-content-between my-3">
            <h2>Daftar Kunjungan</h2>
        </div>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Tanggal Kunjungan</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Pesan</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($_SESSION['bukutamu'] as $entry): ?>
                    <tr>
                        <td><?= htmlspecialchars($entry->timestamp) ?></td>
                        <td><?= htmlspecialchars($entry->fullname) ?></td>
                        <td><?= htmlspecialchars($entry->email) ?></td>
                        <td><?= htmlspecialchars($entry->message) ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <a href="index"><< kembali</a>
    </div>
</body>

</html>