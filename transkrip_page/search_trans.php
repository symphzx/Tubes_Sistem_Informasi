<?php
include '../Database/connection.php';
include '../Database/encrypt-decrypt.php';
include '../Database/config.php';
include '../Database/checkCookie.php';

$nameKeyword = "";
if (isset($_GET['name'])) {
    $nameKeyword = strtolower($_GET['name']); 
}

$nimKeyword = "";
if (isset($_GET['nim'])) {
    $nimKeyword = $_GET['nim'];
}

$reset = "";
if (isset($_GET['reset'])) {
    $reset = $_GET['reset'];
}

echo "<tr> <th>NIM</th> <th>Nama</th> <th>Aksi</th> </tr>";
$sql = "SELECT m.NIM, u.nama, u.userID FROM mahasiswa m JOIN users u ON m.userID = u.userID";
if ($reset != "reset" && $nimKeyword != "") {
    $sql .= " WHERE m.NIM LIKE '%$nimKeyword%'";
}
$sql .= " ORDER BY m.NIM ASC";

$result = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_array($result)) {
    $namaAsli = decryptFunc($row['nama'], $keyDecrypt);

    $tampil = true;
    if ($reset != "reset" && $nameKeyword != "") {
        $namaKecil = strtolower($namaAsli);
        if (strpos($namaKecil, $nameKeyword) === false) {
            $tampil = false;
        }
    }

    if ($tampil) {
        echo "<tr>";
        echo "<td>" . $row['NIM'] . "</td>";
        echo "<td>" . $namaAsli . "</td>";
        echo "<td><a href='LihatNilai.php?userID=" . $row['userID'] . "'>Lihat Nilai</a></td>";
        echo "</tr>";
    }
}

?>