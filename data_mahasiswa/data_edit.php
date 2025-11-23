<?php
    include "../Database/connection.php";
    include "../Database/encrypt-decrypt.php";
    include "../Database/config.php";
                

    $id = $_GET['id'];
    $hasil = "";
    if (isset($_POST['submit'])) {
        $id = $_GET['id'];
        $nim = $_POST['nim'];
        $nama = $_POST['nama'];
        $prodi = $_POST['prodi'];
        $alamat = $_POST['alamat'];
        $nama_encrypt = encryptFunc($nama, $keyDecrypt);

        $sql_mhs = "UPDATE mahasiswa SET NIM = '$nim', Prodi = '$prodi' WHERE userID = '$id'";
        $sql_users = "UPDATE users SET nama = '$nama_encrypt', alamat = '$alamat' WHERE userID = '$id'";

        $update1 = mysqli_query($conn, $sql_mhs);
        $update2 = mysqli_query($conn, $sql_users);

        if ($update1 && $update2) {
            $hasil = "<div class='alert-success'>Update berhasil</div>";
        } else {
            $hasil = "<div class='alert-danger'>Gagal mengupdate data</div>";
        }
    }
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
    <title>SIA &mdash; Data Mahasiswa</title>
    <meta name="description" content="Free Bootstrap Theme by ProBootstrap.com">
    <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">
    <link rel="icon" sizes="192x192" href="https://static.wixstatic.com/media/a4fcc4_8ff77e762a714053a8d6d7317c1b28ee%7Emv2.png/v1/fill/w_192%2Ch_192%2Clg_1%2Cusm_0.66_1.00_0.01/a4fcc4_8ff77e762a714053a8d6d7317c1b28ee%7Emv2.png" type="image/png">
    <link rel="shortcut icon" href="https://static.wixstatic.com/media/a4fcc4_8ff77e762a714053a8d6d7317c1b28ee%7Emv2.png/v1/fill/w_32%2Ch_32%2Clg_1%2Cusm_0.66_1.00_0.01/a4fcc4_8ff77e762a714053a8d6d7317c1b28ee%7Emv2.png" type="image/png">
    <link rel="apple-touch-icon" href="https://static.wixstatic.com/media/a4fcc4_8ff77e762a714053a8d6d7317c1b28ee%7Emv2.png/v1/fill/w_180%2Ch_180%2Clg_1%2Cusm_0.66_1.00_0.01/a4fcc4_8ff77e762a714053a8d6d7317c1b28ee%7Emv2.png" type="image/png">

  <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,700|Open+Sans" rel="stylesheet">
  <link rel="stylesheet" href="../index_page/css/styles-merged.css">
  <link rel="stylesheet" href="../index_page/css/style.min.css">
  <link rel="stylesheet" href="../index_page/css/custom.css">

 <style>
    .form-wrapper {
        background: #ffffff;
        padding: 40px;
        border-radius: 15px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
        max-width: 600px;
        margin: 0 auto;
        border: 1px solid #eee;
    }
    .form-group {
        margin-bottom: 20px;
    }
    label {
        font-weight: 600;
        color: #555;
        margin-bottom: 8px;
        display: block;
        letter-spacing: 0.5px;
    }
    input[type="text"] {
        width: 100%;
        padding: 12px 20px;
        border: 2px solid #eee;
        border-radius: 50px; 
        background-color: #f9f9f9;
        color: #333;
        font-size: 14px;
        outline: none;
        transition: all 0.3s ease;
        box-sizing: border-box;
    }
    input[type="text"]:focus {
        border-color: #6f42c1; 
        background-color: #fff;
        box-shadow: 0 0 10px rgba(111, 66, 193, 0.1);
    }
    input[type="submit"] {
        background: linear-gradient(45deg, #2ecc71, #27ae60); /* Gradasi Hijau */
        border: none;
        padding: 12px 40px;
        color: white;
        font-weight: bold;
        border-radius: 50px;
        cursor: pointer;
        box-shadow: 0 4px 10px rgba(46, 204, 113, 0.3);
        transition: all 0.3s ease;
        text-transform: uppercase;
        font-size: 14px;
        letter-spacing: 1px;
        display: block;
        width: 100%;
        margin-top: 30px;
    }
    input[type="submit"]:hover {
        transform: translateY(-2px);
        box-shadow: 0 6px 15px rgba(46, 204, 113, 0.4);
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
    .btn-back {
       display: block; 
        text-align: center; 
        margin-top: 20px; 
        color: #6f42c1; 
        text-decoration: none; 
        font-weight: bold;
        font-size: 14px;
    }
    .btn-back:hover {
        text-decoration: underline;
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
              <li><a href="../krs_page/krsIndex.php">Kartu Rencana Studi</a></li>
              <li><a href="../transkrip_page/frontend/transkripNilai.php">Transkrip Nilai</a></li>
              <li class="active"><a href="mahasiswaIndex.php">Data Mahasiswa</a></li>
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
            <h1>DATA MAHASISWA - EDIT DATA MAHASISWA</h1>
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
                $id = $_GET['id'];
                
                $sql = "SELECT u.userID, mhs.NIM, u.nama, mhs.Prodi, u.alamat FROM users u INNER JOIN mahasiswa mhs ON u.userID = mhs.userID WHERE u.userID = '$id'";
                $result = mysqli_query($conn, $sql);
                $row = mysqli_fetch_array($result);
                
                $nama = decryptFunc($row['nama'], $keyDecrypt);
                
                echo '<div class="form-wrapper">';

                if ($hasil != "") {
                    echo $hasil;
                }
                echo '<form method="post" action="' . $_SERVER['PHP_SELF']. '?id=' . $id . '">';
                echo '<input type="hidden" name= "id" value="' .$row['userID'] . '">';
                echo '<div class="form-group">
                        <label for="nim">NIM</label><br>
                        <input type="text" name="nim" value="' . $row['NIM'] . '"><br>
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama</label><br>
                        <input type="text" name="nama" value="' . $nama . '"><br>
                    </div>
                    <div class="form-group">
                        <label for="prodi">Prodi</label><br>
                        <input type="text" name="prodi" value="' . $row['Prodi'] . '"><br>
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label><br>
                        <input type="text" name="alamat" value="' . $row['alamat'] . '"><br>
                    </div>
                        <input type="submit" name="submit" value="Save">
                        <a href= "mahasiswaIndex.php"> Back to List Mahasiswa</a></form></div>';

        ?>  
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
                  <li><a href="index.php">Home</a></li>
                  <li><a href="../krs/krsIndex.php">Kartu Rencana Studi</a></li>
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
        <!-- END row -->

      </div>

      <div class="probootstrap-copyright">
        <div class="container">
          <div class="row">
            <div class="col-md-8 text-left">
              <p>&copy; 2017 <a href="https://probootstrap.com/">ProBootstrap:Enlight</a>. All Rights Reserved. Designed
                &amp; Developed with <i class="icon icon-heart"></i> by <a
                  href="https://probootstrap.com/">ProBootstrap.com</a></p>
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
</body>

</html>