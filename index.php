<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <title>Crud</title>
</head>
<body>
    <h1>Crud</h1>
    <a href="tambah.php" class="btn btn-primary" style="margin-bottom:10px">Tambah</a>
    <table border="3px" width="1000px">
        <tr align=center>
            <th>No</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Alamat</th>
            <th>Opsi</th>
        </tr>
        <?php
            include "config.php";
            $sql = "SELECT * FROM data";
            $data = $conn->query($sql);
            $no = 1;
            while($dt = $data->fetch_array()) :
        ?>
        <tr>
            <td><?= $no++; ?></td>
            <td><?= $dt['nama']; ?></td>
            <td><?= $dt['kelas']; ?></td>
            <td><?= $dt['alamat']; ?></td>
            <td align="center">
                <a onclick="return confirm('Yakin?')" href="hapus.php?id=<?= $dt['id']; ?>" class="btn btn-primary">Hapus</a>

                <a href="edit.php?id=<?= $dt['id']; ?>" class="btn btn-primary">Edit</a>
            </td>
        </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>