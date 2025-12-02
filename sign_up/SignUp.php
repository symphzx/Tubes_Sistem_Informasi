
<!-- USER ROLE DEFAULT NULLL -->
<?php
include '../Database/connection.php';
include '../Database/uuidGenerator.php';
include '../Database/encrypt-decrypt.php';
include '../Database/config.php';
if (mysqli_connect_errno()) {
    die("Connection failed: " . mysqli_connect_error());
}
if (isset($_POST['nama']) && isset($_POST['password']) && isset($_POST['alamat']) && isset($_POST['prodi'])) {
    $nama = $_POST['nama'];
    $password = $_POST['password'];
    $alamat = $_POST['alamat'];
    $prodi = $_POST['prodi'];

    if (empty($nama) || empty($password) || empty($alamat)) {
        echo "Data tidak boleh kosong.";
    } else {
        if (addUser($nama, $password, $alamat, $prodi)) {
            echo "<script>window.location.href = '../login_page/login-form.php';</script>";
            // echo "Data berhasil disimpan.";
        } else {
            echo "Data gagal disimpan.";
        }
    }
}
function addUser($nama, $password, $alamat, $prodi)
{
    global $conn;
    global $keyDecrypt;
    $sql = "INSERT INTO users(userID,nama,password,alamat,user_role) VALUES(?,?,?,?,NULL)";
    $stmt = mysqli_prepare($conn, $sql);
    $newNama = encryptFunc($nama, $keyDecrypt);
    $newUserID = generate_uuid_v4(); // generate uuid
    $newPassword = password_hash($password, PASSWORD_BCRYPT);
    $stmt->bind_param("ssss", $newUserID, $newNama, $newPassword, $alamat);

    $sql_nim = "SELECT NIM FROM mahasiswa ORDER BY NIM ASC";
            $stmtNIM = mysqli_prepare($conn, $sql_nim);
            mysqli_stmt_execute($stmtNIM);
            $result = mysqli_stmt_get_result($stmtNIM);

            if (mysqli_num_rows($result) > 0) {
                $total = mysqli_num_rows($result);
                $index = 0;
                while ($row_nim = mysqli_fetch_assoc($result)) {
                    $index++;

                    if ($index == $total) {
                        $nim = $row_nim['NIM'] + 1;
                    }
                }
            }
    $sql_prodi = "SELECT Kd_Prodi FROM prodi WHERE Nama_Prodi = '$prodi'";
    $stmtProdi = mysqli_prepare($conn, $sql_prodi);
    mysqli_stmt_execute($stmtProdi);
    $result = mysqli_stmt_get_result($stmtProdi);
    $row_prodi = mysqli_fetch_assoc($result);
    $prodi = $row_prodi['Kd_Prodi'];
    
    $sql_mhs = "INSERT INTO mahasiswa(NIM,Prodi,userID) VALUES(?,?,?)";
    $stmtMhs = mysqli_prepare($conn, $sql_mhs);
    $stmtMhs->bind_param("sss", $nim, $prodi, $newUserID);
    $stmt->execute();
    $stmt-> close();
    if ($stmtMhs->execute()) {
        // echo "Berhasil";
        echo "<script> 
        alert('NIM Anda Adalah " . $nim . ".');
        </script>";
        return true;
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        return false;
    }
}

//add mahasiswa
// if (addMahasiswa($nim,$prodi,$newUserID)) {
//             return true;
//         }
//         else {
//             return false;
//         }
// function addMahasiswa($nim,$prodi,$userID){
//     global $conn;
//     $sql = "INSERT INTO mahasiswa(Nim,Prodi,userID) VALUES(?,?,?)";
//     $stmt = mysqli_prepare($conn, $sql);
//     $stmt->bind_param("sss", $nim, $prodi, $userID);
//     if($stmt->execute()){
//         return true;
//     }
//     else {
//         echo "Error: " . $sql . "<br>" . mysqli_error($conn);
//         return false;
//     }
// }
