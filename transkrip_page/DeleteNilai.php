<?php
    include '../Database/connection.php';
    include '../Database/encrypt-decrypt.php';
    include '../Database/config.php';
    include '../Database/checkRole.php';
    include '../Database/checkCookie.php';

    $userID = $_GET['userID'];
    $kd_matkul = $_GET['deleteMK'];

    $sqlNIM = "SELECT NIM FROM mahasiswa WHERE userID = ?";
    $stmt = mysqli_prepare($conn, $sqlNIM);
    $stmt->bind_param("s", $userID);
    $stmt->execute();
    $result = $stmt->get_result();
    $mahasiswa = $result->fetch_assoc();
    $nim = $mahasiswa['NIM'];

    $sql = "UPDATE nilai SET deletedAt = CURRENT_TIMESTAMP WHERE NIM = ? AND Kd_Matkul = ? AND deletedAt IS NULL";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "ss", $nim, $kd_matkul);
    mysqli_stmt_execute($stmt);
    header('Location: frontend/lihatNilaiFront.php?userID=' . $userID);
?>