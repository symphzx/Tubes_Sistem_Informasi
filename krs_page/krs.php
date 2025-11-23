<?php
include '../Database/connection.php';
include '../Database/checkRole.php';
include '../Database/encrypt-decrypt.php';
include '../Database/config.php';
include '../Database/checkCookie.php';

// $_COOKIE['userID'] = '7eac0a6a-7157-4474-92cf-0f28bbf0a444'; // mahasiswa
// $_COOKIE['userID'] = 'b2fa8c1d-9a4b-4f4d-a2e2-8efc35e7f11a'; // admin




if (isset($_POST['submitUpdateMatkul'])) {
    $nim = $_POST['nim'];
    $kd_matkul = $_POST['kd_matkul'];
    $new_kd_matkul = $_POST['new_kd_matkul'];
    updateMatkul($nim, $kd_matkul);
}

if (isset($_POST['submitDeleteMatkul'])) {
    $nim = $_POST['nim'];
    $kd_matkul = $_POST['kd_matkul'];
    deleteMatkul($nim, $kd_matkul);
}

if (isset($_POST['submitInsertMataKuliah'])) {
    $nim = $_POST['nim'];
    $kd_matkul = $_POST['new_kd_matkul'];
    insertMataKuliah($nim, $kd_matkul);
}



function updateMatkul($nim, $kd_matkul)
{
    global $conn;
    $new_kd_matkul = $_POST['new_kd_matkul']; // matkul baru dipilih yg user

    $sql = "UPDATE nilai SET kd_matkul = ?, updatedAt = NOW() 
            WHERE nim = ? AND kd_matkul = ?";
    $stmt = mysqli_prepare($conn, $sql);
    $stmt->bind_param("sss", $new_kd_matkul, $nim, $kd_matkul);

    if ($stmt->execute()) {
        $stmt->close();
        header('Location: krsIndex.php');
        exit;
    } else {
        echo "Error: " . $stmt->error;
        $stmt->close();
        return false;
    }
}

function insertMataKuliah($nim, $kd_matkul)
{
    // Check if already exists
    global $conn;

    $checkSql = "SELECT * FROM nilai WHERE nim = ? AND kd_matkul = ?";
    $checkStmt = mysqli_prepare($conn, $checkSql);
    $checkStmt->bind_param("ss", $nim, $kd_matkul);
    $checkStmt->execute();

    if ($checkStmt->get_result()->num_rows > 0) { // cek
        echo "<script>alert('Mata kuliah sudah diambil sebelumnya.');" . // nge return balik ke nilai index
            "window.location.href = 'krsIndex.php';</script>";
    } else { // insert disini
        $sql = "INSERT INTO nilai(nim, kd_matkul, nilai, grade) VALUES (?, ?, NULL, NULL)";
        $stmt = mysqli_prepare($conn, $sql);

        if (!$stmt) {
            echo "Error: " . mysqli_error($conn);
            return false;
        }

        $stmt->bind_param("ss", $nim, $kd_matkul);

        if ($stmt->execute()) {
            $stmt->close();
            header('Location: krsIndex.php');
            exit;
        } else {
            echo "Error: " . $stmt->error;
            $stmt->close();
            return false;
        }
    }
}





// delete nilai
function deleteMatkul($nim, $kd_matkul)
{
    if (!checkRoleByCookie()) {
        echo "Unauthorized access.";
        return false;
    }

    $sql = "UPDATE nilai SET deletedAt = NOW(), updatedAt = NOW()
            WHERE nim = ? AND kd_matkul = ? AND deletedAt IS NULL";

    global $conn;
    $stmt = mysqli_prepare($conn, $sql);

    if (!$stmt) {
        echo "Error: " . mysqli_error($conn);
        return false;
    }

    $stmt->bind_param("ss", $nim, $kd_matkul);

    if ($stmt->execute()) {
        $stmt->close();
        header('Location: krsIndex.php');
        exit;
    } else {
        echo "Error: " . $stmt->error;
        $stmt->close();
        return false;
    }
}

// hitung grade berdasarkan nilai
function hitungGrade($nilai)
{
    $nilai = (float)$nilai;
    if ($nilai >= 80) return 'A';
    else if ($nilai >= 70) return 'B';
    else if ($nilai >= 60) return 'C';
    else if ($nilai >= 50) return 'D';
    else return 'E';
}
