<?php

include "koneksi.php";

?>

<!DOCTYPE html>
<html>
<head>

<title>Data Mahasiswa</title>

<meta name="viewport" content="width=device-width, initial-scale=1">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet" href="style.css">

</head>

<body>

<?php include "navbar.php"; ?>

<div class="container mt-4">

    <div class="card shadow">

        <div class="card-body">

            <h3>Input Data Mahasiswa</h3>

            <form action="simpan.php" method="POST">

                <div class="row">

                    <div class="col-md-3 mb-3">
                        <input type="text"
                        name="nim"
                        placeholder="NIM"
                        class="form-control">
                    </div>

                    <div class="col-md-3 mb-3">
                        <input type="text"
                        name="nama"
                        placeholder="Nama"
                        class="form-control">
                    </div>

                    <div class="col-md-3 mb-3">
                        <input type="text"
                        name="jurusan"
                        placeholder="Jurusan"
                        class="form-control">
                    </div>

                    <div class="col-md-3 mb-3">
                        <input type="text"
                        name="angkatan"
                        placeholder="Angkatan"
                        class="form-control">
                    </div>

                </div>

                <button class="btn btn-success">
                    Simpan
                </button>

            </form>

            <hr>

            <div class="table-responsive">

            <table class="table table-bordered table-striped">

                <tr>
                    <th>No</th>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Jurusan</th>
                    <th>Angkatan</th>
                    <th>Aksi</th>
                </tr>

                <?php

                $no = 1;

                $data = mysqli_query($conn,
                    "SELECT * FROM mahasiswa"
                );

                while($d = mysqli_fetch_array($data))
                {

                ?>

                <tr>

                    <td><?= $no++; ?></td>
                    <td><?= $d['nim']; ?></td>
                    <td><?= $d['nama']; ?></td>
                    <td><?= $d['jurusan']; ?></td>
                    <td><?= $d['angkatan']; ?></td>

                    <td>

                        <a href="edit.php?id=<?= $d['id']; ?>"
                        class="btn btn-warning btn-sm">
                            Edit
                        </a>

                        <a href="hapus.php?id=<?= $d['id']; ?>"
                        class="btn btn-danger btn-sm">
                            Hapus
                        </a>

                    </td>

                </tr>

                <?php } ?>

            </table>

            </div>

        </div>

    </div>

</div>

</body>
</html>