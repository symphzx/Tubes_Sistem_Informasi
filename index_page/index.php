<!DOCTYPE html>
  <?php
    include '../Database/checkCookie.php';
  ?>
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
    <title>SIA &mdash; Institut Teknologi Harapan Bangsa</title>
    <meta name="description" content="Free Bootstrap Theme by ProBootstrap.com">
    <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">
    <link rel="icon" sizes="192x192" href="https://static.wixstatic.com/media/a4fcc4_8ff77e762a714053a8d6d7317c1b28ee%7Emv2.png/v1/fill/w_192%2Ch_192%2Clg_1%2Cusm_0.66_1.00_0.01/a4fcc4_8ff77e762a714053a8d6d7317c1b28ee%7Emv2.png" type="image/png">
    <link rel="shortcut icon" href="https://static.wixstatic.com/media/a4fcc4_8ff77e762a714053a8d6d7317c1b28ee%7Emv2.png/v1/fill/w_32%2Ch_32%2Clg_1%2Cusm_0.66_1.00_0.01/a4fcc4_8ff77e762a714053a8d6d7317c1b28ee%7Emv2.png" type="image/png">
    <link rel="apple-touch-icon" href="https://static.wixstatic.com/media/a4fcc4_8ff77e762a714053a8d6d7317c1b28ee%7Emv2.png/v1/fill/w_180%2Ch_180%2Clg_1%2Cusm_0.66_1.00_0.01/a4fcc4_8ff77e762a714053a8d6d7317c1b28ee%7Emv2.png" type="image/png">
    
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,700|Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="css/styles-merged.css">
    <link rel="stylesheet" href="css/style.min.css">
    <link rel="stylesheet" href="css/custom.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <!--[if lt IE 9]>
      <script src="js/vendor/html5shiv.min.js"></script>
      <script src="js/vendor/respond.min.js"></script>
    <![endif]-->
    <style>
      .chart-container {
          display: flex;
          justify-content: center;   /* center horizontal */
          align-items: center;       /* center vertical (opsional) */
          width: 100%;
      }

      #myChart {
          width: 400px !important;
          height: 400px !important;
      }
    </style>
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
            <a href="index.php">
              <img src="img/ITHB_Logo.png" alt="Gambar contoh" style="width: 50px; height: 50px; margin-top: 15px; float: left;">
              <h3 style="float: left; margin-left: 10px; margin-top: 20px;">SIA ITHB</h3>
            </a>
            <!-- <a class="navbar-brand" href="index.html">Enlight</a> -->
          </div>

          <div id="navbar-collapse" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
              <li class="active"><a href="index.php">Home</a></li>
              <li><a href="../krs_page/krsIndex.php">Kartu Rencana Studi</a></li>
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

      <section class="flexslider">
        <ul class="slides">
          <li style="background-image: url(img/cover_page1.jpg)" class="overlay">
            <div class="container">
              <div class="row">
                <div class="col-md-8 col-md-offset-2">
                  <div class="probootstrap-slider-text text-center">
                    <!-- <h1 class="probootstrap-heading probootstrap-animate">Your Bright Future is Our Mission</h1> -->
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li style="background-image: url(img/cover_page2.jpg)" class="overlay">
            <div class="container">
              <div class="row">
                <div class="col-md-8 col-md-offset-2">
                  <div class="probootstrap-slider-text text-center">
                    <!-- <h1 class="probootstrap-heading probootstrap-animate">Education is Life</h1> -->
                  </div>
                </div>
              </div>
            </div>
            
          </li>
          <li style="background-image: url(img/cover_page3.jpg)" class="overlay">
            <div class="container">
              <div class="row">
                <div class="col-md-8 col-md-offset-2">
                  <div class="probootstrap-slider-text text-center">
                    <!-- <h1 class="probootstrap-heading probootstrap-animate">Helping Each of Our Students Fulfill the Potential</h1> -->
                  </div>
                </div>
              </div>
            </div>
          </li>
        </ul>
      </section>
      
      <section class="probootstrap-section probootstrap-section-colored">
        <div class="container">
          <div class="row">
            <div class="col-md-12 text-left section-heading probootstrap-animate">
              <h2>Welcome to ITHB</h2>
            </div>
          </div>
        </div>
      </section>

      <section class="probootstrap-section">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="probootstrap-flex-block">
                <div class="probootstrap-text probootstrap-animate">
                  <h3>About ITHB</h3>
                  <p>Temukan cerita inspiratif di balik Gedung ITHB,  Kampus IT Top untuk kuliah  di Bandung ></p>
                  <p><a href="https://www.ithb.ac.id/" class="btn btn-primary">Learn More</a></p>
                </div>
                <div class="probootstrap-image probootstrap-animate" style="background-image: url(img/video_thumbnail.jpg)">
                  <a href="https://www.youtube.com/watch?v=s3nJ9gU1m5g" class="btn-video popup-vimeo"><i class="icon-play3"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="probootstrap-section" id="probootstrap-counter">
        <div class="container">
          
          <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 probootstrap-animate">
              <div class="probootstrap-counter-wrap">
                <div class="probootstrap-icon">
                  <i class="icon-users2"></i>
                </div>
                <div class="probootstrap-text">
                  <span class="probootstrap-counter">
                    <span class="js-counter" data-from="0" data-to="20203" data-speed="5000" data-refresh-interval="50">1</span>
                  </span>
                  <span class="probootstrap-counter-label">Students Enrolled</span>
                </div>
              </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 probootstrap-animate">
              <div class="probootstrap-counter-wrap">
                <div class="probootstrap-icon">
                  <i class="icon-user-tie"></i>
                </div>
                <div class="probootstrap-text">
                  <span class="probootstrap-counter">
                    <span class="js-counter" data-from="0" data-to="50" data-speed="5000" data-refresh-interval="50">1</span>
                  </span>
                  <span class="probootstrap-counter-label">Certified Teachers</span>
                </div>
              </div>
            </div>
            <div class="clearfix visible-sm-block visible-xs-block"></div>
            <div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 probootstrap-animate">
              <div class="probootstrap-counter-wrap">
                <div class="probootstrap-icon">
                  <i class="icon-library"></i>
                </div>
                <div class="probootstrap-text">
                  <span class="probootstrap-counter">
                    <span class="js-counter" data-from="0" data-to="99" data-speed="5000" data-refresh-interval="50">1</span>%
                  </span>
                  <span class="probootstrap-counter-label">Passing to Company</span>
                </div>
              </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 probootstrap-animate">
               
               <div class="probootstrap-counter-wrap">
                <div class="probootstrap-icon">
                  <i class="icon-smile2"></i>
                </div>
                <div class="probootstrap-text">
                  <span class="probootstrap-counter">
                    <span class="js-counter" data-from="0" data-to="100" data-speed="5000" data-refresh-interval="50">1</span>%
                  </span>
                  <span class="probootstrap-counter-label">Colleger Satisfaction</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="probootstrap-section probootstrap-section-colored probootstrap-bg probootstrap-custom-heading probootstrap-tab-section" style="background-image: url(img/slider_2.jpg)">
        <div class="container">
          <div class="row">
            <div class="col-md-12 text-center section-heading probootstrap-animate">
              <h2 class="mb0">Prodi Unggulan</h2>
            </div>
          </div>
        </div>
        <!-- <div class="probootstrap-tab-style-1">
          <ul class="nav nav-tabs probootstrap-center probootstrap-tabs no-border">
            <li class="active"><a data-toggle="tab" href="#featured-news">Featured News</a></li>
            <li><a data-toggle="tab" href="#upcoming-events">Upcoming Events</a></li>
          </ul>
        </div> -->
      </section>

      <section class="probootstrap-section probootstrap-section">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              
              <div class="tab-content">

              <div class="chart-container">
                  <canvas id="myChart"></canvas>
              </div>
              <?php
                include "../Database/connection.php";

                $sql = "SELECT Prodi, COUNT(NIM) AS total FROM mahasiswa GROUP BY Prodi";
                $result = mysqli_query($conn, $sql);

                $prodi = [];
                $total = [];

                while ($row = mysqli_fetch_assoc($result)) {
                    $prodi[] = $row['Prodi'];
                    $total[] = $row['total'];
                }
              ?>
              <script>
              // data PHP
              const labels = <?= json_encode($prodi) ?>;
              const totals = <?= json_encode($total) ?>;

              // Plugin — tampilkan HANYA jumlah mahasiswa
              const pieLabelPlugin = {
                  id: 'pieLabelPlugin',
                  afterDraw(chart) {
                      const {ctx} = chart;
                      chart.data.datasets.forEach((dataset, i) => {
                          chart.getDatasetMeta(i).data.forEach((arc, index) => {

                              const jumlah = dataset.data[index];   // jumlah mahasiswa
                              const pos = arc.tooltipPosition();

                              ctx.save();
                              ctx.font = "40px sans-serif";
                              ctx.textAlign = "center";
                              ctx.fillStyle = "#ffffffff";
                              ctx.fillText(jumlah, pos.x, pos.y - 10);
                              ctx.restore();
                          });
                      });
                  }
              };

              new Chart(document.getElementById('myChart'), {
                  type: 'pie',
                  data: {
                      labels: labels,
                      datasets: [{
                          data: totals,
                          backgroundColor: [
                              'red','blue','green','orange','purple','yellow'
                          ]
                      }]
                  },
                  options: {
                      responsive: false,
                      maintainAspectRatio: false,
                      plugins: {
                          legend: { position: 'bottom' }
                      }
                  },
                  plugins: [pieLabelPlugin]
              });
              </script>

                <!-- <div id="featured-news" class="tab-pane fade in active">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="owl-carousel" id="owl1">
                        <div class="item">
                          <a href="#" class="probootstrap-featured-news-box">
                            <figure class="probootstrap-media"><img src="img/img_sm_3.jpg" alt="Free Bootstrap Template by ProBootstrap.com" class="img-responsive"></figure>
                            <div class="probootstrap-text">
                              <h3>Tempora consectetur unde nisi</h3>
                              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima, ut.</p>
                              <span class="probootstrap-date"><i class="icon-calendar"></i>July 9, 2017</span>
                              
                            </div>
                          </a>
                        </div> -->
                        <!-- END item -->
                        <!-- <div class="item">
                          <a href="#" class="probootstrap-featured-news-box">
                            <figure class="probootstrap-media"><img src="img/img_sm_1.jpg" alt="Free Bootstrap Template by ProBootstrap.com" class="img-responsive"></figure>
                            <div class="probootstrap-text">
                              <h3>Tempora consectetur unde nisi</h3>
                              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis, officia.</p>
                              <span class="probootstrap-date"><i class="icon-calendar"></i>July 9, 2017</span>
                              
                            </div>
                          </a>
                        </div> -->
                        <!-- END item -->
                        <!-- <div class="item">
                          <a href="#" class="probootstrap-featured-news-box">
                            <figure class="probootstrap-media"><img src="img/img_sm_2.jpg" alt="Free Bootstrap Template by ProBootstrap.com" class="img-responsive"></figure>
                            <div class="probootstrap-text">
                              <h3>Tempora consectetur unde nisi</h3>
                              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi, dolores.</p>
                              <span class="probootstrap-date"><i class="icon-calendar"></i>July 9, 2017</span>
                              
                            </div>
                          </a>
                        </div> -->
                        <!-- END item -->
                        <!-- <div class="item">
                          <a href="#" class="probootstrap-featured-news-box">
                            <figure class="probootstrap-media"><img src="img/img_sm_3.jpg" alt="Free Bootstrap Template by ProBootstrap.com" class="img-responsive"></figure>
                            <div class="probootstrap-text">
                              <h3>Tempora consectetur unde nisi</h3>
                              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure, earum.</p>
                              <span class="probootstrap-date"><i class="icon-calendar"></i>July 9, 2017</span>
                              
                              
                            </div>
                          </a>
                        </div> -->
                        <!-- END item -->
                      </div>
                    </div>
                  </div>
                  <!-- END row -->
                  <!-- <div class="row">
                    <div class="col-md-12 text-center">
                      <p><a href="#" class="btn btn-primary">View all news</a></p>  
                    </div> -->
                  </div>
                </div>
                <div id="upcoming-events" class="tab-pane fade">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="owl-carousel" id="owl2">
                        <div class="item">
                          <a href="#" class="probootstrap-featured-news-box">
                            <figure class="probootstrap-media"><img src="img/img_sm_3.jpg" alt="Free Bootstrap Template by ProBootstrap.com" class="img-responsive"></figure>
                            <div class="probootstrap-text">
                              <h3>Tempora consectetur unde nisi</h3>
                              <span class="probootstrap-date"><i class="icon-calendar"></i>July 9, 2017</span>
                              <span class="probootstrap-location"><i class="icon-location2"></i>White Palace, Brooklyn, NYC</span>
                            </div>
                          </a>
                        </div>
                        <!-- END item -->
                        <div class="item">
                          <a href="#" class="probootstrap-featured-news-box">
                            <figure class="probootstrap-media"><img src="img/img_sm_1.jpg" alt="Free Bootstrap Template by ProBootstrap.com" class="img-responsive"></figure>
                            <div class="probootstrap-text">
                              <h3>Tempora consectetur unde nisi</h3>
                              <span class="probootstrap-date"><i class="icon-calendar"></i>July 9, 2017</span>
                              <span class="probootstrap-location"><i class="icon-location2"></i>White Palace, Brooklyn, NYC</span>
                            </div>
                          </a>
                        </div>
                        <!-- END item -->
                        <div class="item">
                          <a href="#" class="probootstrap-featured-news-box">
                            <figure class="probootstrap-media"><img src="img/img_sm_2.jpg" alt="Free Bootstrap Template by ProBootstrap.com" class="img-responsive"></figure>
                            <div class="probootstrap-text">
                              <h3>Tempora consectetur unde nisi</h3>
                              <span class="probootstrap-date"><i class="icon-calendar"></i>July 9, 2017</span>
                              <span class="probootstrap-location"><i class="icon-location2"></i>White Palace, Brooklyn, NYC</span>
                            </div>
                          </a>
                        </div>
                        <!-- END item -->
                        <div class="item">
                          <a href="#" class="probootstrap-featured-news-box">
                            <figure class="probootstrap-media"><img src="img/img_sm_3.jpg" alt="Free Bootstrap Template by ProBootstrap.com" class="img-responsive"></figure>
                            <div class="probootstrap-text">
                              <h3>Tempora consectetur unde nisi</h3>
                              <span class="probootstrap-date"><i class="icon-calendar"></i>July 9, 2017</span>
                              <span class="probootstrap-location"><i class="icon-location2"></i>White Palace, Brooklyn, NYC</span>
                            </div>
                          </a>
                        </div>
                        <!-- END item -->
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12 text-center">
                      <p><a href="#" class="btn btn-primary">View all events</a></p>  
                    </div>
                  </div>
                </div>

              </div>
            
            </div>
          </div>
        </div>
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
                  <li><a href="../krs_page/krsIndex.php">Kartu Rencana Studi</a></li>
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
    

    <script src="js/scripts.min.js"></script>
    <script src="js/main.min.js"></script>
    <script src="js/custom.js"></script>

  </body>
</html>