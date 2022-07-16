<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <!--important meta tags -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!--Title -->
  <title>Maumanasik | Pesan Pembimbing Haji Privat</title>

  <!--Basic SEO -->
  <meta name="description" content="Pembimbing haji.">
  <meta name="keywords" content="manasik haji, pembimbing haji">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

  <!--Favicon -->
  <link rel="icon" type="image/png" href="<?php echo base_url('/img/favicon/ukuran-32x32-01.png') ?>">

  <!--Custom CSS -->
  <link rel="stylesheet" href="<?php echo base_url('/css/maungaji-style.min.css?version=1.0.0') ?>">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!--Fontpoppins -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">

  <!--Rakkas -->
  <link href='https://fonts.googleapis.com/css?family=Rakkas' rel='stylesheet'>

  <!-- Meta Pixel Code -->
  <script>
    ! function(f, b, e, v, n, t, s) {
      if (f.fbq) return;
      n = f.fbq = function() {
        n.callMethod ?
          n.callMethod.apply(n, arguments) : n.queue.push(arguments)
      };
      if (!f._fbq) f._fbq = n;
      n.push = n;
      n.loaded = !0;
      n.version = '2.0';
      n.queue = [];
      t = b.createElement(e);
      t.async = !0;
      t.src = v;
      s = b.getElementsByTagName(e)[0];
      s.parentNode.insertBefore(t, s)
    }(window, document, 'script',
      'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '919414085406960');
    fbq('track', 'PageView');
  </script>
  <noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=919414085406960&ev=PageView&noscript=1" /></noscript>
  <!-- End Meta Pixel Code -->

  <!-- Google Tag Manager -->
  <script>
    (function(w, d, s, l, i) {
      w[l] = w[l] || [];
      w[l].push({
        'gtm.start': new Date().getTime(),
        event: 'gtm.js'
      });
      var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s),
        dl = l != 'dataLayer' ? '&l=' + l : '';
      j.async = true;
      j.src =
        'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
      f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-KZQR5XW');
  </script>
  <!-- End Google Tag Manager -->

  <meta name="facebook-domain-verification" content="gjk6vo19jb0rt5ssspse8tds0jwt2m" />

  <script data-ad-client="ca-pub-6962543154354144" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>

  <style>
    .testimony-video-description p {
      font-family: Poppins;
      font-size: 24px;
      text-align: left;
      line-height: normal;
    }

    #logo ul li img {
      margin-top: 25px;
    }

    .package-card .package-price {
      padding-top: 15px;
      font-size: 40px !important;
    }

    @media screen and (max-width: 1200px) {
      .package-card .package-price {
        font-size: 30px !important;
        padding-top: 15px;
        line-height: 50px;
      }

      .package-card .package-price span {
        font-size: 20px;
      }
    }

    @media screen and (max-width: 1100px) {
      #tech-statement .media {
        line-height: 35px;
        padding: 20px;
      }

      #socmed {
        display: none;
      }

      #jdid {
        display: none;
      }

      #chosing-class .about-item {
        font-size: 40px;
      }

      #prons-mau .square-kelebihan-maungaji {
        height: 300px;
        width: 300px;
        margin-top: 25px;
      }

      .square-center {
        margin-top: 5rem;
      }

      .square-right {
        margin-top: 5rem;
      }

      .text-register-student {
        width: 300px;
        margin-left: 10px;
        margin-top: 10px;
      }

      .text-register-teacher {
        width: 330px;
        /* margin-top: 510px; */
      }

      .img-santri {
        margin-top: 50px;
      }

      .text-santri {
        font-family: Poppins;
        font-size: 24px;
        margin-left: 15px;
        margin-top: 20px;
        text-align: left;
        line-height: normal;
      }

      .text-guru {
        font-family: Poppins;
        font-size: 24px;
        margin-left: 15px;
        margin-top: 20px;
        line-height: normal;
        text-align: left;
      }

      .text-choose-package {
        font-size: 27px;
        font-family: "Poppins";
        font-weight: 1000;
        /*margin-top: 0px !important;*/
        color: #3597d4;
      }

      #chosing-class.content-box-md {
        padding-bottom: 0px !important;
      }

      .vertical-heading {
        text-align: left !important;
      }

      .media {
        color: #ffffff;
        font-family: Poppins;
        margin-top: 10px;
        background-color: #3597d4;
        border: 1px solid #ffffff;
        box-sizing: border-box;
        border-radius: 16px;
        font-weight: 600;
        font-size: 25px;
        line-height: 80px;
      }

      .text-header {
        font-family: "Rakkas";
        font-weight: 1000;
        text-align: center;
        font-size: 45px;
      }

      .btn-download-header {
        text-align: center;
        display: flex;
        flex-wrap: wrap;
        justify-content: left;
      }

      .img-media-tempo {
        display: inline-block;
        margin-right: 15px;
        margin-top: 25px;
      }

      .img-media-gomuslim {
        display: inline-block;
        margin-right: 15px;
        margin-top: -50px;
      }

      .img-media-republika {
        display: inline-block;
        margin-right: 15px;
        margin-top: -70px;
      }

      .img-media-republika-ramadhan {
        display: inline-block;
        margin-right: 15px;
      }

      .img-teacher-mobile-version {
        margin: 15px;
        margin-top: 150px;
      }

      .title-testimoni {
        font-size: 50px;
        font-family: "Poppins";
        font-weight: 1000;
        color: #3597d4;
        margin-top: 0px;
      }

      .section-size {
        height: 900px;
      }
    }

    .gtco-testimonials .owl-carousel2 .owl-nav {
      display: block !important;
    }

    .owl-prev {
      width: 15px;
      height: 100px;
      position: absolute;
      top: 40%;
      margin-left: -20px !important;
      display: block !important;
      border: 0px solid black;
    }

    .owl-next {
      width: 15px;
      height: 100px;
      position: absolute;
      top: 40%;
      right: 0px !important;
      display: block !important;
      border: 0px solid black;
    }

    .owl-carousel2 .owl-item {
      padding-right: 30px;
      padding-left: 30px;
    }

    @media screen and (max-width: 992px) {
      .testimony-video-carousel {
        margin-bottom: 50px;
      }

      .testimony-video-description {
        margin-top: 20px;
      }

      .gtco-testimonials .card {
        margin: 0 40px !important;
      }

      .text-student,
      .text-count-student,
      .text-teacher,
      .text-count-teacher {
        font-size: 30px !important;
        height: 80px;
      }

      .owl-prev {
        top: 5%;
      }

      .owl-next {
        top: 5%;
      }
    }

    @media screen and (max-width: 768px) {
      .package-card .package-price {
        font-size: 30px !important;
        padding-top: 15px;
        line-height: 50px;
      }

      .package-card .package-price span {
        font-size: 20px;
      }
    }

    @media screen and (max-width: 710px) {
      #logo ul {
        width: 455px;
        margin: auto;
      }
    }

    @media screen and (max-width: 485px) {
      #logo ul {
        width: 200px;
        margin: auto;
      }
    }
    a {
      color: #1baa69;
      text-decoration: none;
    }
  </style>

</head>

<body data-spy="scroll" data-target=".navbar" data-offset="65">
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KZQR5XW" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
  <!--Header -->
  <header>
    <nav class="navbar navbar-fixed-top">
      <div class="container">
        <!-- <div class="site-nav-wrapper"> -->
          <div class="navbar-header">
            <!--Mobile Menu Open Button -->
            <span id="mobile-nav-open-btn" style="color: #1BAA69; margin-top: -10px; margin-right: 10px;">&#9776;</span>
            <!--Logo -->
            <a class="navbar-brand" href="/">
              <img class="logo-non-text" src="<?php echo base_url('img/logo/logo_manasik_hijau.png') ?>" alt="logo" width="auto" class="img-responsive" height="50px" style="margin-top: -16px;">
            </a>
            <!--Logo -->
            <a class="navbar-brand-mobile" href="/">
              <img src="<?php echo base_url('img/logo/logo_manasik_hijau.png') ?>" alt="maungaji" border="0" class="img-responsive">
            </a>
          </div>

          <!--Main Menu -->
          <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav pull-right">
              <!-- <li><a href="/">HALAMAN UTAMA</a></li> -->
              <!-- <li><a href="https://blog.maungaji.co.id">BLOG</a></li> -->
              <!-- <li><a href="/army">LIST ARMY</a></li> -->
              <!-- <li><a href="/teacher">LIST GURU NGAJI</a></li> -->
              <li>
                <a href="https://api.whatsapp.com/send?phone=6281213419253&text=Assalamu'alaikum%20admin%20maungaji%20saya%20ingin%20memesan%20Guru%20Ngaji" target="_blank">
                  <div class="teacher">
                    CARI PEMBIMBING
                  </div>
                </a>
              </li>
            </ul>
          </div>

          <!--Mobile Menu -->
          <div id="mobile-nav">
            <!--Mobile Menu Close Button -->
            <span id="mobile-nav-close-btn">&times;</span>
            <div id="mobile-nav-content">
              <ul class="nav">
                <li>
                  <a href="https://api.whatsapp.com/send?phone=6281213419253&text=Assalamu'alaikum%20admin%20maungaji%20saya%20ingin%20memesan%20Guru%20Ngaji" class="teacher" target="_blank">CARI PEMBIMBING</a>
                </li>
              </ul>
            </div>
          </div>


        <!-- </div> -->
      </div>
    </nav>
  </header>
  <!--Header Ends -->