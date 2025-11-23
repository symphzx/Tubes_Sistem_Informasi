<?php
    include '../Database/connection.php';
    include '../Database/checkRole.php';
    include '../Database/encrypt-decrypt.php';
    include '../Database/config.php';
    include '../Database/checkCookie.php';

    if (isset($_POST['submitInsertNilai'])) {
        $nim = $_POST['nim'];
        $kd_matkul = $_POST['kd_matkul'];
        $nilai = $_POST['nilai'];
        $userID = $_POST['userID'];
        insertMataKuliah($nim, $kd_matkul, $nilai, $userID);
    }

    function insertMataKuliah($nim, $kd_matkul, $nilai, $userID)
    {
        // Check if already exists
        global $conn;
        global $keyDecrypt;
        $nilai = (int) $nilai;
            if ($nilai >= 80)
                $grade = 'A';
            else if ($nilai >= 70)
                $grade = 'B';
            else if ($nilai >= 60)
                $grade = 'C';
            else if ($nilai >= 50)
                $grade = 'D';
            else
                $grade = 'E';

            $nilai = encryptFunc($nilai, $keyDecrypt);
            $grade = encryptFunc($grade, $keyDecrypt);

            $sql = "UPDATE nilai SET nilai = '$nilai', grade = '$grade' WHERE nim = ? AND kd_matkul = ? AND deletedAt IS NULL";
            $stmt = mysqli_prepare($conn, $sql);

            if (!$stmt) {
                echo "Error: " . mysqli_error($conn);
                return false;
            }

            $stmt->bind_param("ss", $nim, $kd_matkul);

            if ($stmt->execute()) {
                $stmt->close();
                header('Location: frontend/lihatNilaiFront.php?userID=' . $userID);
                exit;
            } else {
                echo "Error: " . $stmt->error;
                $stmt->close();
                return false;
            }
    }
?>