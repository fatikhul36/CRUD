<?php
    include './koneksi.php';
    echo "<a href='formulir.php'>tambah data</a><br>";

    $sql = "SELECT * FROM siswa";
    $result = $conn->query($sql);
    $a = 1;

    while($baris = mysqli_fetch_array($result)){
        echo "<br>";
        echo "$a";
        echo "<br>";
        
    }