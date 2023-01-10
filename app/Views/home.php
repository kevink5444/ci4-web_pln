<!DOCTYPE html>
<html lang="en">
<head>
  <title>MyPLN</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="<?= base_url('css/owl.carousel.min.css') ?>">
  <link rel="stylesheet" href="<?= base_url('css/owl.theme.default.css') ?>">
  <link rel="stylesheet" href="<?= base_url('css/materialdesignicons.min.css') ?>">
  <link rel="stylesheet" href="<?= base_url('css/aos.css') ?>">
  <link rel="stylesheet" href="<?= base_url('css/style.min.css') ?>">
</head>
<body id="body" data-spy="scroll" data-target=".navbar" data-offset="100">
  <header id="header-section">
    <nav class="navbar navbar-expand-lg pl-3 pl-sm-0" id="navbar">
    <div class="container">
      <div class="navbar-brand-wrapper d-flex w-100">
        <img src="images/pln.png" alt="">
        <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="mdi mdi-menu navbar-toggler-icon"></span>
        </button> 
      </div>
      <div class="collapse navbar-collapse navbar-menu-wrapper" id="navbarSupportedContent">
        <ul class="navbar-nav align-items-lg-center align-items-start ml-auto">
          <li class="d-flex align-items-center justify-content-between pl-4 pl-lg-0">
            <div class="navbar-collapse-logo">
              <img src="images/Group2.svg" alt="">
            </div>
            <button class="navbar-toggler close-button" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="mdi mdi-close navbar-toggler-icon pl-5"></span>
            </button>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#header-section">Beranda <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#features-section">Layanan Pelanggan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#case-studies-section">Blog</a>  
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#feedback-section">Testimoni</a>
          </li>
        </ul>
      </div>
    </div> 
    </nav>   
  </header>
  <div class="banner" >
    <div class="container">
      <h1 class="font-weight-semibold">Website MyPLN yang memudahkan pelanggan</h1>
      <h6 class="font-weight-normal text-muted pb-3">MyPLN menyediakan Pasang Baru,Migrasi,Perubahan Daya</h6>
      <div>
       <a href="pasangbaru"<input type="button" class="btn btn-opacity-light mr-1">Tekan Disini</a></button>
      </div>
      <img src="images/utama.svg" alt="" class="img-fluid">
    </div>
  </div>
  <div class="content-wrapper">
    <div class="container">
      <section class="features-overview" id="features-section" >
        <div class="content-header">
          <h2>Layanan Pelanggan</h2>
          <h6 class="section-subtitle text-muted">Memberikan informasi kepada pelanggan untuk membantu dalam melakukan transaksi listrik PLN dengan lebih mudah.<br>Anda dapat memilih beberapa layanan seperti:pasang baru, perubahan daya, dan migrasi.</h6>
        </div>
        <div class="d-md-flex justify-content-between">
          <div class="grid-margin d-flex justify-content-start">
            <div class="features-width">
              <img src="images/pasangbaru.jpg" alt="" class="img-icons">
              <h5 class="py-3">Pasang<br>Baru</h5>
              <p class="text-muted">Layanan permohonan pasang baru listrik secara cepat, mudah, nyaman, dan aman.</p>
              <a href="pasangbaru"><p class="readmore-link">Baca Lebih Lanjut</p></a>  
            </div>
          </div>
          <div class="grid-margin d-flex justify-content-center">
            <div class="features-width">
              <img src="images/Ubah Daya.jpg" alt="" class="img-icons">
              <h5 class="py-3">Ubah<br>Daya</h5>
              <p class="text-muted">Layanan permohonan perubahan daya listrik secara cepat, mudah, nyaman, dan aman.</p>
              <a href="#"><p class="readmore-link">Baca Lebih Lanjut</p></a>
            </div>
          </div>
          <div class="grid-margin d-flex justify-content-end">
            <div class="features-width">
              <img src="images/migrasi.jpg" alt="" class="img-icons">
              <h5 class="py-3">Migrasi</h5>
              <p class="text-muted">Layanan migrasi listrik secara cepat, mudah, nyaman, dan aman.</p>
              <a href="#"><p class="readmore-link">Baca Lebih Lanjut</p></a>
            </div>
          </div>
        </div>
        </section>     
      <section class="case-studies" id="case-studies-section">
        <div class="row grid-margin">
          <div class="col-12 text-center pb-5">
            <h2>Layanan Kami</h2>
            <h6 class="section-subtitle text-muted">Silahkan dilihat sesuai kebutuhan anda</h6>
            <h6 class="section-subtitle text-muted">Jika sudah klik diatas</h6>
          </div>
          <div class="col-12 col-md-6 col-lg-3 stretch-card mb-3 mb-lg-0" data-aos="zoom-in">
            <div class="card color-cards">
              <div class="card-body p-0">
                <div class="bg-primary text-center card-contents">
                  <div class="card-image">
                    <img src="images/Group95.svg" class="case-studies-card-img" alt="">
                  </div>  
                  <div class="card-desc-box d-flex align-items-center justify-content-around">
                    
                  </div>
                </div>   
                <div class="card-details text-center pt-4">
                    <h6 class="m-0 pb-1">Pasang Baru</h6>
                    <p>Khusus kostumer baru</p>
                    <a href="pasangbaru/add"><p class="readmore-link">Klik Disini </p></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6 col-lg-3 stretch-card mb-3 mb-lg-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="card color-cards">
              <div class="card-body p-0">
                <div class="bg-warning text-center card-contents">
                  <div class="card-image">
                      <img src="images/Group108.svg" class="case-studies-card-img" alt="">
                  </div>  
                  <div class="card-desc-box d-flex align-items-center justify-content-around">

                  </div>
                </div>   
                <div class="card-details text-center pt-4">
                    <h6 class="m-0 pb-1">Ubah daya</h6>
                    <p>Khusus ubah daya rumah dan industri</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6 col-lg-3 stretch-card mb-3 mb-lg-0" data-aos="zoom-in" data-aos-delay="400">
            <div class="card color-cards">
              <div class="card-body p-0">
                <div class="bg-violet text-center card-contents">
                  <div class="card-image">
                      <img src="images/Group126.svg" class="case-studies-card-img" alt="">
                  </div>  
                  <div class="card-desc-box d-flex align-items-center justify-content-around">

                  </div>
                </div>   
                <div class="card-details text-center pt-4">
                    <h6 class="m-0 pb-1">Migrasi</h6>
                    <p>Perpindahan subsidi ke token</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6 col-lg-3 stretch-card" data-aos="zoom-in" data-aos-delay="600">
            <div class="card color-cards">
              <div class="card-body p-0">
                <div class="bg-success text-center card-contents">
                  <div class="card-image">
                      <img src="images/Group115.svg" class="case-studies-card-img" alt="">
                  </div>  
                  <div class="card-desc-box d-flex align-items-center justify-content-around">
                  </div>
                </div>   
                <div class="card-details text-center pt-4">
                    <h6 class="m-0 pb-1">Teknisi</h6>
                    <p>Kontak Teknisi Terdekat</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>     
      <section class="customer-feedback" id="feedback-section">
        <div class="row">
          <div class="col-12 text-center pb-5">
            <h2>Informasi Tentang Teknisi Kami</h2>
            <h6 class="section-subtitle text-muted m-0">.</h6>
          </div>
          <div class="owl-carousel owl-theme grid-margin">
              <div class="card customer-cards">
                <div class="card-body">
                  <div class="text-center">
                    <img src="images/face3.jpg" width="89" height="89" alt="" class="img-customer">
                    <div class="content-divider m-auto"></div>
                    <h6 class="card-title pt-3">Joko Riadi</h6>
                    <h6 class="customer-designation text-muted m-0">Teknisi 1</h6>
                  </div>
                </div>
              </div>
              <div class="card customer-cards">
                <div class="card-body">
                  <div class="text-center">
                    <img src="images/face20.jpg" width="89" height="89" alt="" class="img-customer">
                    <div class="content-divider m-auto"></div>
                    <h6 class="card-title pt-3">Agus Sampurno</h6>
                    <h6 class="customer-designation text-muted m-0">Teknisi 2</h6>
                  </div>
                </div>
              </div>
              <div class="card customer-cards">
                <div class="card-body">
                  <div class="text-center">
                    <img src="images/face15.jpg" width="89" height="89" alt="" class="img-customer">
                    <div class="content-divider m-auto"></div>
                    <h6 class="card-title pt-3">Gatot Priambodo</h6>
                    <h6 class="customer-designation text-muted m-0">Teknisi 3</h6>
                  </div>
                </div>
              </div>
              <div class="card customer-cards">
                <div class="card-body">
                  <div class="text-center">
                    <img src="images/face16.jpg" width="89" height="89" alt="" class="img-customer">
                    <div class="content-divider m-auto"></div>
                    <h6 class="card-title pt-3">Suci Ambarawati</h6>
                    <h6 class="customer-designation text-muted m-0">Customer Service 1</h6>
                  </div>
                </div>
              </div>
              <div class="card customer-cards">
                <div class="card-body">
                  <div class="text-center">
                    <img src="images/face1.jpg" width="89" height="89" alt="" class="img-customer">
                    <div class="content-divider m-auto"></div>
                    <h6 class="card-title pt-3">Anggun Cantika</h6>
                    <h6 class="customer-designation text-muted m-0">Customer Service 2</h6>
                  </div>
                </div>
              </div>
              <div class="card customer-cards">
                <div class="card-body">
                  <div class="text-center">
                    <img src="images/face2.jpg" width="89" height="89" alt="" class="img-customer">
                    <div class="content-divider m-auto"></div>
                    <h6 class="card-title pt-3">Ayunigtyas</h6>
                    <h6 class="customer-designation text-muted m-0">Customer Service 3</h6>
                  </div>
                </div>
              </div>
    </section>     
      </section>
      <section class="contact-details" id="contact-details-section">
        <div class="row text-center text-md-left">
          <div class="col-12 col-md-6 col-lg-3 grid-margin">
            <img src="images/contac.png" alt="" class="pb-2">
            <div class="pt-2">
              <p class="text-muted m-0">Hubungi Kami</p>
              <p class="text-muted m-0">123</p>
            </div>         
          </div>
          <div class="col-12 col-md-6 col-lg-3 grid-margin">
            <h5 class="pb-2">MyPLN</h5>
            <p class="text-muted">Website yang mempermudah pelanggan</p> 
          </div>
          <div class="col-12 col-md-6 col-lg-3 grid-margin">
            <h5 class="pb-2">Sitemap</h5>
            <a href="http://localhost:8080/pasangbaru"><p class="m-0 pb-2">Pasang Baru</p></a>   
            <a href="http://localhost:8080/perubahandaya" ><p class="m-0 pt-1 pb-2">Ubah Daya</p></a> 
            <a href="http://localhost:8080/migrasi"><p class="m-0 pt-1 pb-2">Migrasi</p></a> 
          </div>
          <div class="col-12 col-md-6 col-lg-3 grid-margin">
              <h5 class="pb-2">Ikuti Kami</h5>
              <div class="d-flex justify-content-center justify-content-md-start">
                <a href="https://web.facebook.com/cc123pln?_rdc=1&_rdr"><img src="images/fb.jpeg" width="50" height="50"<span class="mdi mdi-facebook"></span></a>
                <a href="https://twitter.com/pln_123"><img src="images/twitter.jpeg" width="50" height="50"<span class="mdi mdi-twitter"></span></a>
                <a href="https://www.instagram.com/pln123_official/?hl=id"><img src="images/ig.jpeg" width="50" height="50"<span class="mdi mdi-instagram"></span></a>
                <a href="https://www.youtube.com/channel/UCbTrrbZgbNAjkPdiQ8L3sIQ?app=desktop"><img src="images/youtube.jpeg" width="50" height="50"<span class="mdi mdi-youtube"></span></a>
              </div>
          </div>
        </div>  
      </section>
      <footer class="border-top">
        <p class="text-center text-muted pt-4">Copyright © 2022 - STIKI Malang.</a>All rights reserved.</p>
      </footer>
      <!-- Modal for Contact - us Button -->
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" id="exampleModalLabel">Contact Us</h4>
            </div>
            <div class="modal-body">
              <form>
                <div class="form-group">
                  <label for="Name">Name</label>
                  <input type="text" class="form-control" id="Name" placeholder="Name">
                </div>
                <div class="form-group">
                  <label for="Email">Email</label>
                  <input type="email" class="form-control" id="Email-1" placeholder="Email">
                </div>
                <div class="form-group">
                  <label for="Message">Message</label>
                  <textarea class="form-control" id="Message" placeholder="Enter your Message"></textarea>
                </div>
              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-success">Submit</button>
            </div>
          </div>
        </div>
      </div>
    </div> 
  </div>
  <script src="<?= base_url(); ?>/js/jquery.min.js"></script>
  <script src="<?= base_url(); ?>/js/bootstrap.min.js"></script>
  <script src="<?= base_url(); ?>/js/owl.carousel.min.js"></script>
  <script src="<?= base_url(); ?>/js/aos.js"></script>
  <script src="<?= base_url(); ?>/js/landingpage.js"></script>
</body>
</html>