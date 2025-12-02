<?php
    include '../Database/checkCookie.php';
?>

<!DOCTYPE html>

<!-- 
  Theme Name: Enlight
  Theme URL: https://probootstrap.com/enlight-free-education-responsive-bootstrap-website-template
  Author: ProBootstrap.com
  Author URL: https://probootstrap.com
  License: Released for free under the Creative Commons Attribution 3.0 license (probootstrap.com/license)
-->
<html lang="en">

<head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SIA &mdash; Kartu Rencana Studi</title>
    <meta name="description" content="Free Bootstrap Theme by ProBootstrap.com">
    <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">
    <link rel="icon" sizes="192x192" href="https://static.wixstatic.com/media/a4fcc4_8ff77e762a714053a8d6d7317c1b28ee%7Emv2.png/v1/fill/w_192%2Ch_192%2Clg_1%2Cusm_0.66_1.00_0.01/a4fcc4_8ff77e762a714053a8d6d7317c1b28ee%7Emv2.png" type="image/png">
    <link rel="shortcut icon" href="https://static.wixstatic.com/media/a4fcc4_8ff77e762a714053a8d6d7317c1b28ee%7Emv2.png/v1/fill/w_32%2Ch_32%2Clg_1%2Cusm_0.66_1.00_0.01/a4fcc4_8ff77e762a714053a8d6d7317c1b28ee%7Emv2.png" type="image/png">
    <link rel="apple-touch-icon" href="https://static.wixstatic.com/media/a4fcc4_8ff77e762a714053a8d6d7317c1b28ee%7Emv2.png/v1/fill/w_180%2Ch_180%2Clg_1%2Cusm_0.66_1.00_0.01/a4fcc4_8ff77e762a714053a8d6d7317c1b28ee%7Emv2.png" type="image/png">

  <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,700|Open+Sans" rel="stylesheet">
  <link rel="stylesheet" href="../index_page/css/styles-merged.css">
  <link rel="stylesheet" href="../index_page/css/style.min.css">
  <link rel="stylesheet" href="../index_page/css/custom.css">
  <link rel="stylesheet" href="css/krs.css">

  <style>
    .table-container {
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        border-radius: 10px;
        overflow: hidden;
        background: #ffffff;
        margin-top: 20px;
        border: 1px solid #eee;
    }
    .custom-table {
        width: 100%;
        border-collapse: collapse;
        font-family: 'Open Sans', sans-serif;
    }
    .custom-table thead tr {
        background-color: #6f42c1;
        color: #ffffff;
        text-align: left;
    }
    .custom-table th, .custom-table td {
        padding: 15px 20px;
    }
    .custom-table tbody tr {
        border-bottom: 1px solid #f0f0f0;
        transition: all 0.2s;
    }
    .custom-table tbody tr:nth-of-type(even) {
        background-color: #fcfcfc;
    }
    .custom-table tbody tr:hover {
        background-color: #f4eeff;
    }
    .action-btn {
        text-decoration: none !important;
        padding: 5px 10px;
        border-radius: 5px;
        font-size: 12px;
        font-weight: bold;
        margin-right: 5px;
        display: inline-block;
    }
    .btn-edit {
        background-color: #e2e6ea;
        color: #212529 !important;
        border: 1px solid #dae0e5;
    }
    .btn-edit:hover {
        background-color: #dbe2ef;
    }
    .btn-delete {
        background-color: #fff5f5;
        color: #dc3545 !important;
        border: 1px solid #ffc9c9;
    }
    .btn-delete:hover {
        background-color: #ffe3e3;
    }
    .admin-form-container {
        background: #ffffff;
        padding: 25px;
        border-radius: 15px;
        box-shadow: 0 5px 20px rgba(0,0,0,0.05);
        margin-bottom: 30px;
        display: flex;
        gap: 15px; 
        align-items: center;
        flex-wrap: wrap;
        border: 1px solid #f0f0f0;
    }

    .form-input-custom {
        padding: 12px 20px;
        border: 2px solid #eee;
        border-radius: 50px;
        background-color: #f9f9f9;
        color: #555;
        font-size: 14px;
        outline: none;
        transition: all 0.3s ease;
        min-width: 220px; 
    }

    .form-input-custom:focus {
        border-color: #6f42c1; 
        background-color: #fff;
        box-shadow: 0 0 10px rgba(111, 66, 193, 0.1);
    }

    .form-input-custom::placeholder {
        color: #aaa;
        font-style: italic;
    }
    .btn-add-new {
        background: #5cb85c;
        color: white !important;
        padding: 12px 25px;
        border-radius: 50px;
        text-decoration: none;
        font-weight: bold;
        margin-left: auto;
    }
    .btn-add-new:hover{
      background: #2b842bff;
    }

    .student-card {
        max-width: 500px;
        margin: 40px auto; 
        background: #ffffff;
        border-radius: 20px;
        box-shadow: 0 15px 35px rgba(111, 66, 193, 0.15);
        overflow: hidden;
        text-align: center;
        transition: transform 0.3s ease;
    }  
    .student-card:hover {
        transform: translateY(-5px); 
    }
    .card-header-bg {
        background: linear-gradient(135deg, #6f42c1, #8e44ad); 
        padding: 40px 20px;
        color: white;
        position: relative;
    }
    .card-avatar {
        font-size: 50px;
        background: rgba(255,255,255,0.2);
        width: 90px;
        height: 90px;
        line-height: 90px;
        border-radius: 50%;
        margin: 0 auto 15px auto;
        border: 3px solid rgba(255,255,255,0.5);
    }
    .card-name {
        font-size: 24px;
        font-weight: 700;
        margin: 5px 0;
        letter-spacing: 0.5px;
    }
    .card-nim {
        font-size: 21px;
        opacity: 0.9;
        background: rgba(0,0,0,0.2);
        padding: 4px 12px;
        border-radius: 15px;
        display: inline-block;
    }
    .card-body {
        padding: 30px;
        display: flex;
        justify-content: space-around; 
        align-items: center;
        border-top: 1px solid #f0f0f0;
    }
    .card-item h4 {
        font-size: 12px;
        color: #888;
        text-transform: uppercase;
        letter-spacing: 1px;
        margin-bottom: 8px;
        font-weight: 600;
    }
    .card-item p {
        font-size: 18px;
        font-weight: 700;
        color: #333;
        margin: 0;
    }
    
    .divider {
        width: 1px;
        height: 40px;
        background: #eee;
    }
    .alert-success { 
      background-color: #d4edda; 
      color: #155724; 
      padding: 15px; 
      border-radius: 10px; 
      margin-bottom: 20px; 
      border: 1px solid #c3e6cb; 
      text-align: center; 
    }
    .alert-danger { 
      background-color: #f8d7da; 
      color: #721c24; 
      padding: 15px; 
      border-radius: 10px; 
      margin-bottom: 20px; 
      border: 1px solid #f5c6cb; 
      text-align: center; 
    }
  </style>
  <!--[if lt IE 9]>
      <script src="js/vendor/html5shiv.min.js"></script>
      <script src="js/vendor/respond.min.js"></script>
    <![endif]-->
</head>

<body>

  <div class="probootstrap-search" id="probootstrap-search">
    <a href="#" class="probootstrap-close js-probootstrap-close"><i class="icon-cross"></i></a>
    <form action="#">
      <input type="search" name="s" id="search" placeholder="Search a keyword and hit enter...">
    </form>
  </div>

  <div class="probootstrap-page-wrapper">
    <!-- Fixed navbar -->

    <div class="probootstrap-header-top">
        <div class="container">
          <div class="row">
            <div class="col-lg-9 col-md-9 col-sm-9 probootstrap-top-quick-contact-info">
              <span><i class="icon-location2"></i>Jl. Dipati Ukur No.80-84, Dago, Kecamatan Coblong, Kota Bandung 40132</span>
              <span><i class="icon-phone2"></i>+62 22 250 6636</span>
              <span><i class="icon-mail"></i>kampusharapanbangsa.ac.id</span>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 probootstrap-top-social">
              <ul>
                <li><a href="https://x.com/kampusithb"><i class="icon-twitter"></i></a></li>
                <li><a href="https://www.facebook.com/ithb.bandung"><i class="icon-facebook2"></i></a></li>
                <li><a href="https://www.instagram.com/kampusharapanbangsa/"><i class="icon-instagram2"></i></a></li>
                <li><a href="https://www.youtube.com/c/kampusithb/"><i class="icon-youtube"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <nav class="navbar navbar-default probootstrap-navbar">
        <div class="container">
          <div class="navbar-header">
            <div class="btn-more js-btn-more visible-xs">
              <a href="#"><i class="icon-dots-three-vertical "></i></a>
            </div>
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a href="../index_page/index.php">
              <img src="../index_page/img/ITHB_Logo.png" alt="Gambar contoh" style="width: 50px; height: 50px; margin-top: 15px; float: left;">
              <h3 style="float: left; margin-left: 10px; margin-top: 20px;">SIA ITHB</h3>
            </a>
            <!-- <a class="navbar-brand" href="index.html">Enlight</a> -->
          </div>

          <div id="navbar-collapse" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
              <li><a href="../index_page/index.php">Home</a></li>
              <li class="active"><a href="krsIndex.php">Kartu Rencana Studi</a></li>
              <li><a href="../transkrip_page/frontend/transkripNilai.php">Transkrip Nilai</a></li>
              <li><a href="../data_mahasiswa/mahasiswaIndex.php">Data Mahasiswa</a></li>
              <!-- <li class="dropdown">
                <a href="#" data-toggle="dropdown" class="dropdown-toggle">Pages</a>
                <ul class="dropdown-menu">
                  <li><a href="about.html">About Us</a></li>
                  <li><a href="courses.html">Courses</a></li>
                  <li><a href="course-single.html">Course Single</a></li>
                  <li><a href="gallery.html">Gallery</a></li>
                  <li class="dropdown-submenu dropdown">
                    <a href="#" data-toggle="dropdown" class="dropdown-toggle"><span>Sub Menu</span></a>
                    <ul class="dropdown-menu">
                      <li><a href="#">Second Level Menu</a></li>
                      <li><a href="#">Second Level Menu</a></li>
                      <li><a href="#">Second Level Menu</a></li>
                      <li><a href="#">Second Level Menu</a></li>
                    </ul>
                  </li>
                  <li><a href="news.html">News</a></li>
                </ul>
              </li> -->
              <!-- <li><a href="contact.html">Contact</a></li> -->
              <li><a href="../signout_page/signout.php" style='color: red'>Sign Out</a></li>
            </ul>
          </div>
        </div>
      </nav>

    <section class="probootstrap-section probootstrap-section-colored">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-left section-heading probootstrap-animate">
            <h1>KARTU RENCANA STUDI</h1>
          </div>
        </div>
      </div>
    </section>

    <!-- <section class="probootstrap-section">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="probootstrap-flex-block">
                <div class="probootstrap-text probootstrap-animate">
                  <h3>We Hired Certified Teachers For Our Students</h3>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis explicabo veniam labore ratione illo vero voluptate a deserunt incidunt odio aliquam commodi blanditiis voluptas error non rerum temporibus optio accusantium!</p>
                  <p><a href="#" class="btn btn-primary">Learn More</a></p>
                </div>
                <div class="probootstrap-image probootstrap-animate" style="background-image: url(img/slider_3.jpg)">
                  <a href="https://vimeo.com/45830194" class="btn-video popup-vimeo"><i class="icon-play3"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section> -->




    <section class="probootstrap-section">
      <div class="container">
        <?php
            include 'krs.php';
            include '../Database/connection.php';
            include '../Database/config.php';
            require_once '../Database/encrypt-decrypt.php';

            global $conn;
            global $keyDecrypt;


            $admin = checkRoleByCookie();
            if ($admin) {
                $sql = "SELECT n.*, m.Prodi, mk.Nama_Matkul, mk.sks, u.nama 
                        FROM nilai n
                        INNER JOIN mahasiswa m ON n.NIM = m.NIM
                        INNER JOIN users u ON m.userID = u.userID
                        INNER JOIN matkul mk ON n.Kd_Matkul = mk.Kd_Matkul
                        WHERE n.deletedAt IS NULL
                        ORDER BY n.NIM, n.Kd_Matkul"; // menampilkan semua nilai
                $stmt = mysqli_prepare($conn, $sql);
                $stmt->execute();
            } else {
                $sqlCheckNim = "SELECT m.nim
                                FROM mahasiswa m 
                                INNER JOIN users u ON u.userID = m.userID 
                                WHERE u.userID = ? AND m.deletedAt IS NULL"; // mendapatkan nim dari cookie userID

                $stmtNim = mysqli_prepare($conn, $sqlCheckNim);
                $stmtNim->bind_param("s", $_COOKIE['userID']);
                $stmtNim->execute();
                $resultNim = $stmtNim->get_result();
                $mahasiswa = $resultNim->fetch_assoc();

                if (!$mahasiswa) {
                    echo "<p>Tidak ada data mahasiswa.</p>";
                    exit;
                }

                $nim = $mahasiswa['nim'];
                echo "<p><strong>NIM Anda: " . htmlspecialchars($nim) . "</strong></p>";

                $sql = "SELECT m.nim, n.Kd_Matkul, mk.Nama_Matkul, mk.sks 
                                FROM mahasiswa m 
                                INNER JOIN users u ON u.userID = m.userID 
                                INNER JOIN nilai n ON n.NIM = m.NIM
                                INNER JOIN matkul mk ON n.Kd_Matkul = mk.Kd_Matkul
                                WHERE n.NIM = ? AND n.deletedAt IS NULL";
                $stmt = mysqli_prepare($conn, $sql);
                $stmt->bind_param("s", $nim);
                $stmt->execute();
            }

            $result = $stmt->get_result();


            if ($admin) {
                echo "<button class = 'btn-add-new'  onclick='insertMataKuliahByAdmin()'>Tambah Mata Kuliah untuk Mahasiswa</button>";
            } else {
                echo "<button class = 'btn' onclick='insertMataKuliahByMhs(\"$nim\")'>Ambil Mata Kuliah</button>";
            }

            echo "<div class='table-container'><table class='custom-table'><thead><tr>";

            if ($admin) {
                echo "<th>NIM</th>";
                echo "<th>Nama Mahasiswa</th>";
                echo "<th>Prodi</th>";
                echo "<th>Kode Matkul</th>";
                echo "<th>Nama Matkul</th>";
                echo "<th>SKS</th>";
                echo "<th>Actions</th>";
            } else {
                echo "<th>Kode Matkul</th>";
                echo "<th>Nama Matkul</th>";
                echo "<th>SKS</th>";
            }

            echo "</tr></thead><tbody>";

            while ($row = $result->fetch_assoc()) {

                echo "<tr>";

                if ($admin) {
                    $namaDecrypted = decryptfunc($row['nama'], $keyDecrypt);
                    echo "<td>" . htmlspecialchars($row['NIM']) . "</td>";
                    echo "<td>" . htmlspecialchars($namaDecrypted) . "</td>";
                    echo "<td>" . htmlspecialchars($row['Prodi']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['Kd_Matkul']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['Nama_Matkul']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['sks']) . "</td>";
                    echo "<td>";
                    echo "<button class = 'btn-update' onclick='updateMatkul(\"" . htmlspecialchars($row['NIM'], ENT_QUOTES) . "\", \"" . htmlspecialchars($row['Kd_Matkul'], ENT_QUOTES) . "\")'>Update</button> ";
                    echo "<button class = 'btn-delete'onclick='deleteMatkul(\"" . htmlspecialchars($row['NIM'], ENT_QUOTES) . "\", \"" . htmlspecialchars($row['Kd_Matkul'], ENT_QUOTES) . "\")'>Delete</button>";
                    echo "</td>";
                } else {
                    echo "<td>" . htmlspecialchars($row['Kd_Matkul']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['Nama_Matkul']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['sks']) . "</td>";  
                }

                echo "</tr>";
            }

            echo "</table>";

            echo "</div>";
            echo "<div id='formContainer'></div>";
            ?>
        <!-- <div class="row"> -->
        <!-- <div class="col-md-3 col-sm-6">
              <div class="probootstrap-teacher text-center probootstrap-animate">
                <figure class="media">
                  <img src="img/person_1.jpg" alt="Free Bootstrap Template by ProBootstrap.com" class="img-responsive">
                </figure>
                <div class="text">
                  <h3>Chris Worth</h3>
                  <p>Physical Education</p>
                  <ul class="probootstrap-footer-social">
                    <li class="twitter"><a href="#"><i class="icon-twitter"></i></a></li>
                    <li class="facebook"><a href="#"><i class="icon-facebook2"></i></a></li>
                    <li class="instagram"><a href="#"><i class="icon-instagram2"></i></a></li>
                    <li class="google-plus"><a href="#"><i class="icon-google-plus"></i></a></li>
                  </ul>
                </div>
              </div> -->
        <!-- </div> -->
        <!-- </div> -->
    </section>

    <section class="probootstrap-cta">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <h2 class="probootstrap-animate" data-animate-effect="fadeInRight">Informasi Lebih Lanjut</h2>
              <!-- <a href="#" role="button" class="btn btn-primary btn-lg btn-ghost probootstrap-animate" data-animate-effect="fadeInLeft">Enroll</a> -->
            </div>
          </div>
        </div>
      </section>
      <footer class="probootstrap-footer probootstrap-bg">
        <div class="container">
          <div class="row">
            <div class="col-md-4">
              <div class="probootstrap-footer-widget">
                <h3>About ITHB</h3>
                <p>Kampus Harapan Bangsa
                  <br>
                  <br>
                  Jalan Dipatiukur 80-84
                  <br>
                  Bandung 40132 - Indonesia
                  <br>
                  +62 22 250 6636
                  <br>
                  <br>
                  <strong>Nomor kontak ITHB Admission</strong>
                  <br>
                  ​HOTLINE S1 0812 1405 1772
                  <br>
                  HOTLINE S2 0822 9567 9956
                  <br>
                  Yohana 0851 3511 2322
                  <br>
                  Vina 0851 2470 0678
                  <br>
                  Feni 0851 3514 5994
                  <br>
                  Yery 0897 8848 446
                  <br>
                  <br><span>© Copyright 2025 Institut Teknologi Harapan Bangsa</span>
            </p>
                <h3>Social</h3>
                <ul class="probootstrap-footer-social">
                  <li><a href="https://x.com/kampusithb"><i class="icon-twitter"></i></a></li>
                  <li><a href="https://www.facebook.com/ithb.bandung"><i class="icon-facebook"></i></a></li>
                  <li><a href="https://www.youtube.com/c/kampusithb/"><i class="icon-youtube"></i></a></li>
                </ul>
              </div>
            </div>
            <div class="col-md-3 col-md-push-1">
              <div class="probootstrap-footer-widget">
                <h3>Links</h3>
                <ul>
                  <li><a href="../index_page/index.php">Home</a></li>
                  <li><a href="krsIndex.php">Kartu Rencana Studi</a></li>
                  <li><a href="../transkrip_page/frontend/transkripNilai.php">Transkrip Nilai</a></li>
                  <li><a href="../data_mahasiswa/mahasiswaIndex.php">Data Mahasiswa</a></li>
                </ul>
              </div>
            </div>
            <div class="col-md-4">
              <div class="probootstrap-footer-widget">
                <h3>Contact Info</h3>
                <ul class="probootstrap-contact-info">
                  <li><i class="icon-location2"></i> <span>Jl. Dipati Ukur No.80-84, Dago, Kecamatan Coblong, Kota Bandung 40132</span></li>
                  <li><i class="icon-mail"></i><span>kampusharapanbangsa.ac.id</span></li>
                  <li><i class="icon-phone2"></i><span>+62 22 250 6636</span></li>
                </ul>
              </div>
            </div>
          
          </div>
          <!-- END row -->
          
        </div>

        <div class="probootstrap-copyright">
          <div class="container">
            <div class="row">
              <div class="col-md-8 text-left">
                <p>&copy; 2025 <a href="https://www.ithb.ac.id/">Institut Teknologi Harapan Bangsa</a>. All Rights Reserved. Designed &amp; Developed by Us</p>
              </div>
              <div class="col-md-4 probootstrap-back-to-top">
                <p><a href="#" class="js-backtotop">Back to top <i class="icon-arrow-long-up"></i></a></p>
              </div>
            </div>
          </div>
        </div>
      </footer>

    </div>
  <!-- END wrapper -->


  <script src="../index_page/js/scripts.min.js"></script>
  <script src="../index_page/js/main.min.js"></script>
  <script src="../index_page/js/custom.js"></script>

  <script>
            function searchData(reset = "") {
                var elNama = document.getElementById("nama_search");
                var elNim = document.getElementById("nim_search");

                if (reset == "reset") {
                  if(elNama) elNama.value = "";
                  if(elNim) elNim.value = "";
                }

                const form = new FormData();
                form.append("ajax", 1);

                var valNama = (elNama) ? elNama.value : "";
                var valNim = (elNim) ? elNim.value : "";

                form.append("nama_search", valNama);
                form.append("nim_search", valNim);
                form.append("reset", reset);

                const xhr = new XMLHttpRequest();
                xhr.onreadystatechange = function () {
                    if (xhr.readyState == 4 && xhr.status == 200) {
                        document.getElementById("data_mhs").innerHTML = xhr.responseText;
                    }
                };

                xhr.open("POST", "<?php echo $_SERVER["PHP_SELF"]; ?>", true);
                xhr.send(form);

            }

            window.onload = function(){
                searchData();

                var alertBox = document.getElementById('auto-close-alert');
                if (alertBox) {
                  setTimeout(function() {
                    alertBox.style.opacity = "0";

                    setTimeout(function() {
                      alertBox.style.display = "none";
                    }, 500);
                  }, 3000);
                }
            }

        </script>

</body>

<script>
    function insertMataKuliahByAdmin() {

        var form = "<div class='form-container-box'>";

        form += "<form method='post' action='krs.php'>";
        form += "<h3>Tambah Mata Kuliah untuk Mahasiswa</h3>";
        form += "<label for='nim'>NIM Mahasiswa</label>";
        form += "<input type='text' name='nim' id='nim' required>";

        form += "<label for='kd_matkul'>Kode Mata Kuliah</label>";
        form += "<select name='new_kd_matkul' id='kd_matkul' required>";

        form += `<?php 
                    $sql = 'SELECT Kd_Matkul, Nama_Matkul FROM matkul WHERE deletedAt IS NULL';
                    $result = mysqli_query($conn, $sql);
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo '<option value="'.$row['Kd_Matkul'].'">'.$row['Kd_Matkul'].' - '.$row['Nama_Matkul'].'</option>';
                    }
                ?>`;

        form += "</select>";

        form += "<div>";
        form += "<button type='submit' name='submitInsertMataKuliah'>Tambah</button>";
        form += "<button type='button' onclick='clearForm()'>Cancel</button>";
        form += "</div>";

        form += "</form></div>";

        document.getElementById("formContainer").innerHTML = form;
    }



    function insertMataKuliahByMhs(nim) {
        var form = "<div class='form-container-box'>";
        form += "<form method='post' action='krs.php'>";
        form += "<h3>Ambil Mata Kuliah</h3>";
        form += "<input type='hidden' name='nim' value='" + nim + "'>";
        form += "<label for='kd_matkul'>Pilih Mata Kuliah</label>";
        form += "<select name='new_kd_matkul' id='kd_matkul' required>";


        form += "<?php
                $sqlProdi = "SELECT m.Prodi
                                FROM mahasiswa m 
                                INNER JOIN users u ON u.userID = m.userID 
                                WHERE u.userID = ? AND m.deletedAt IS NULL"; // mendapatkan prodi dari cookie userID
                $stmtProdi = mysqli_prepare($conn, $sqlProdi);
                $stmtProdi->bind_param("s", $_COOKIE['userID']);
                $stmtProdi->execute();
                $resultProdi = $stmtProdi->get_result();
                $mahasiswa = $resultProdi->fetch_assoc();

                $prodi = $mahasiswa['Prodi'];


                    $sql = 'SELECT Kd_Matkul, Nama_Matkul FROM matkul WHERE (Kd_Matkul LIKE \'%' . $prodi . '%\' OR Kd_Matkul LIKE \'%' . 'UM' . '%\') AND deletedAt IS NULL AND Kd_Matkul NOT IN (SELECT Kd_Matkul FROM nilai WHERE NIM = \'' . $nim . '\')';
                    $result = mysqli_query($conn, $sql);
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo '<option value=\"' . $row['Kd_Matkul'] . '\">' . $row['Kd_Matkul'] . ' - ' . $row['Nama_Matkul'] . '</option>';
                    } ?>";

        form += "</select>";
        form += "<div>";
        form += "<button type='submit' name='submitInsertMataKuliah' >Ambil</button>";
        form += "<button type='button' onclick='clearForm()'>Cancel</button>";
        form += "</div>";
        form += "</div></form>";
        document.getElementById("formContainer").innerHTML = form;
    }

    function updateMatkul(nim, kd_matkul) {
        var form = "<div class='form-container-box'>";
        form += "<form method='post' action='krs.php'>";
        form += "<h3>Update Mata Kuliah</h3>";
        form += "<input type='hidden' name='nim' value='" + nim + "'>";
        form += "<input type='hidden' name='kd_matkul' value='" + kd_matkul + "'>";
        form += "<p><strong>NIM:</strong> " + nim + "</p>";
        form += "<p><strong>Kode Matkul Lama:</strong> " + kd_matkul + "</p>";
        form += "<label>Matkul Baru:</label>";
        form += "<select name='new_kd_matkul' id='kd_matkul' required>";

        form += "<?php $sql = 'SELECT Kd_Matkul, Nama_Matkul FROM matkul WHERE deletedAt IS NULL';
                    $result = mysqli_query($conn, $sql);
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo '<option value=\"' . $row['Kd_Matkul'] . '\">' . $row['Kd_Matkul'] . ' - ' . $row['Nama_Matkul'] . '</option>';
                    } ?>";

        form += "</select>";
        form += "<div>";
        form += "<button type='submit' name='submitUpdateMatkul'>Update</button>";
        form += "<button type='button' onclick='clearForm()'>Cancel</button>";
        form += "</div>";
        form += "</div></form>";
        document.getElementById("formContainer").innerHTML = form;
    }




    function deleteMatkul(nim, kd_matkul) {
        if (confirm('Yakin mau hapus data ini?')) {

            var form = document.createElement('form');
            form.method = 'POST';
            form.action = 'krs.php';

            form.innerHTML = '<input type="hidden" name="nim" value="' + nim + '">' +
                '<input type="hidden" name="kd_matkul" value="' + kd_matkul + '">' +
                '<input type="hidden" name="submitDeleteMatkul" value="1">';

            document.body.appendChild(form);
            form.submit();
        }
    }

    function clearForm() {
        document.getElementById("formContainer").innerHTML = "";
    }
</script>

</html>