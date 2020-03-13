<?php
    include "config.php";
    
    $id = val($_GET['id']);

    $sql = "DELETE FROM data WHERE id = '$id'";
    $del = $conn->query($sql);

    if($del) {
        alert('Berhasil!');
        redir('../crudz');
    } else {
        alert('Gagal!');
        redir('../crudz');
    }
?>