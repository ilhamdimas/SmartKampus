<?php
include "koneksi.php";
$id = $_GET['id'];
$data = mysqli_query($conn,
"SELECT * FROM mahasiswa
WHERE id='$id'");
$d = mysqli_fetch_array($data);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Mahasiswa</title>
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <div class="card shadow">
            <div class="card-body">
                <h3>Edit Mahasiswa</h3>

                <form action="update.php" method="POST">
                    <input type="hidden"
                        name="id"
                        value="<?= $d['id']; ?>">
                        <div class="mb-3">
                        <input type="text"
                        name="nim"
                        class="form-control"
                        value="<?= $d['nim']; ?>'>
</div>
<div class="mb-3">
    <input type="text"
                        name="nama"
                        class="form-control"
                        value="<?= $d['nama']; ?>'>
</div>
<div class="mb-3">
    <input type="text"
                        name="jurusan"
                        class="form-control"
                        value="<?= $d['jurusan']; ?>'>
</div>
<div class="mb-3">
    <input type="text"
                        name="angkatan"
                        class="form-control"
                        value="<?= $d['angkatan']; ?>'>
</div>
<button class="btn btn-primary">
    update
</button>
</form>
</div> 
</div> 
</div> 
</body>
<html>