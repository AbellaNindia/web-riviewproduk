<!DOCTYPE html>
<html lang="en">

<head>
   <!-- basic -->
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- mobile metas -->
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="viewport" content="initial-scale=1, maximum-scale=1">
   <!-- site metas -->
   <title>Beautiflie</title>
   <meta name="keywords" content="">
   <meta name="description" content="">
   <meta name="author" content="">
   <!-- bootstrap css -->
   <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
   <!-- style css -->
   <link rel="stylesheet" type="text/css" href="assets/css/style.css">
   <!-- Responsive-->
   <link rel="stylesheet" href="assets/css/responsive.css">
   <!-- fevicon -->
   <link rel="icon" href="assets/images/fevicon.png" type="image/gif" />
   <!-- Scrollbar Custom CSS -->
   <link rel="stylesheet" href="assets/css/jquery.mCustomScrollbar.min.css">
   <!-- Tweaks for older IEs-->
   <link rel="stylesheet" href="assets/https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
   <!-- fonts -->
   <link href="assets/https://fonts.googleapis.com/css?family=Great+Vibes|Open+Sans:400,700&display=swap&subset=latin-ext" rel="stylesheet">
   <!-- owl stylesheets -->
   <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
   <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
   <link rel="stylesheet" href="assets/https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
   <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
</head>

<body>
   <!-- header section start -->
   <div class="header_section">
      <div class="container-fluid">
         <nav class="navbar navbar-light bg-light justify-content-between">
            <div id="mySidenav" class="sidenav">
               <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
               <a href="/home">Home</a>
               <a href="/product">Product</a>
               <a href="/about">About</a>
               <a href="/contact">Contact</a>
            </div>
            <span class="toggle_icon" onclick="openNav()"><img src="assets/images/toggle-icon.png"></span>
            <a class="logo" href="/home"><img src=""></a></a>
            <form class="form-inline ">
               <div class="login_text">
               </div>
            </form>
         </nav>
      </div>
   </div>
   <!-- header section end -->
   <!-- banner section start -->
   <div class="banner_section layout_padding">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
         <div class="carousel-inner">
            <div class="carousel-item active">
               <div class="container">
                  <div class="row">
                     <div class="col-sm-6">
                        <h1 class="banner_taital">Beauty<br>Upx</h1>
                        <p class="banner_text">Bingung konsep produk kosmetik yang diinginkan? Kami bantu konsepnya sesuai keinginanmu</p>
                     </div>
                     <div class="col-sm-6">
                        <div class="banner_img"><img src="assets/images/banner-img.png"></div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="carousel-item">
               <div class="container">
                  <div class="row">
                     <div class="col-sm-6">
                        <h1 class="banner_taital">Beauty <br>Kit</h1>
                        <p class="banner_text">Ncididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>
                        <div class="read_bt"><a href="#">Buy Now</a></div>
                     </div>
                     <div class="col-sm-6">
                        <div class="banner_img"><img src="assets/images/make-up-artist-getting-model-ready-photoshootin.jpg"></div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="carousel-item">
               <div class="container">
                  <div class="row">
                     <div class="col-sm-6">
                        <h1 class="banner_taital">Beauty <br>Kit</h1>
                        <p class="banner_text">Ncididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>
                        <div class="read_bt"><a href="#">Buy Now</a></div>
                     </div>
                     <div class="col-sm-6">
                        <div class="banner_img"><img src="assets/images/poto slide.jpg"></div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="carousel-item">
               <div class="container">
                  <div class="row">
                     <div class="col-sm-6">
                        <h1 class="banner_taital">Beauty <br>Kit</h1>
                        <p class="banner_text">Ncididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>
                        <div class="read_bt"><a href="#">Buy Now</a></div>
                     </div>
                     <div class="col-sm-6">
                        <div class="banner_img"><img src="assets/images/banner-img.png"></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- banner section end -->
   <!-- product section start -->
   <div class="product_section layout_padding">
      <div class="container">
         <div class="row">
            <div class="col-sm-12">
               <h1 class="product_taital">Produk  Terbaru</h1>
               <p class="product_text"></p>
            </div>
         </div>
         <div class="product_section_2 layout_padding">
            <div class="row">
               @forelse ($posts as $post)
               <div class="col-lg-3 col-sm-6">
                  <div class="product_box">
                     <h4 class="bursh_text">{{ $post->title }}</h4>
                     <p class="lorem_text">{!! $post->content !!}</p>
                     <img src="{{ asset('/storage/post/'.$post->image) }}" class="image_1" style="width: 500px;">
                     <div class="btn_main">
                        <div class="buy_bt">
                           <ul>
                              <li class="active"><a href="#"></a></li>
                              <li><a href="#"></a></li>
                           </ul>
                        </div>
                        <h3 class="price_text"></h3>
                     </div>
                  </div>
               </div>
               @empty
               <div class="alert alert-danger">
                  Data Post belum Tersedia.
               </div>
               @endforelse
               <!-- <div class="col-lg-3 col-sm-6">
                     <div class="product_box">
                        <h4 class="bursh_text">Beauty Bursh</h4>
                        <p class="lorem_text">incididunt ut labore et dolore magna aliqua. Ut enim </p>
                        <img src="assets/images/img-6.png" class="image_1">
                        <div class="btn_main">
                           <div class="buy_bt">
                              <ul>
                                 <li class="active"><a href="#">Buy Now</a></li>
                                 <li><a href="#">Buy Now</a></li>
                              </ul>
                           </div>
                           <h3 class="price_text">Price $30</h3>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                     <div class="product_box">
                        <h4 class="bursh_text">Beauty Bursh</h4>
                        <p class="lorem_text">incididunt ut labore et dolore magna aliqua. Ut enim </p>
                        <img src="assets/images/img-7.png" class="image_1">
                        <div class="btn_main">
                           <div class="buy_bt">
                              <ul>
                                 <li class="active"><a href="#">Buy Now</a></li>
                                 <li><a href="#">Buy Now</a></li>
                              </ul>
                           </div>
                           <h3 class="price_text">Price $30</h3>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                     <div class="product_box">
                        <h4 class="bursh_text">Beauty Bursh</h4>
                        <p class="lorem_text">incididunt ut labore et dolore magna aliqua. Ut enim </p>
                        <img src="assets/images/img-8.png" class="image_1">
                        <div class="btn_main">
                           <div class="buy_bt">
                              <ul>
                                 <li class="active"><a href="#">Buy Now</a></li>
                                 <li><a href="#">Buy Now</a></li>
                              </ul>
                           </div>
                           <h3 class="price_text">Price $30</h3>
                        </div>
                     </div>
                  </div> -->
            </div>
            <!-- <div class="row">
                  <div class="col-lg-3 col-sm-6">
                     <div class="product_box">
                        <h4 class="bursh_text">Beauty Bursh</h4>
                        <p class="lorem_text">incididunt ut labore et dolore magna aliqua. Ut enim </p>
                        <img src="assets/images/img-9.png" class="image_1">
                        <div class="btn_main">
                           <div class="buy_bt">
                              <ul>
                                 <li class="active"><a href="#">Buy Now</a></li>
                                 <li><a href="#">Buy Now</a></li>
                              </ul>
                           </div>
                           <h3 class="price_text">Price $30</h3>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                     <div class="product_box">
                        <h4 class="bursh_text">Beauty Bursh</h4>
                        <p class="lorem_text">incididunt ut labore et dolore magna aliqua. Ut enim </p>
                        <img src="assets/images/img-10.png" class="image_1">
                        <div class="btn_main">
                           <div class="buy_bt">
                              <ul>
                                 <li class="active"><a href="#">Buy Now</a></li>
                                 <li><a href="#">Buy Now</a></li>
                              </ul>
                           </div>
                           <h3 class="price_text">Price $30</h3>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                     <div class="product_box">
                        <h4 class="bursh_text">Beauty Bursh</h4>
                        <p class="lorem_text">incididunt ut labore et dolore magna aliqua. Ut enim </p>
                        <img src="assets/images/img-11.png" class="image_1">
                        <div class="btn_main">
                           <div class="buy_bt">
                              <ul>
                                 <li class="active"><a href="#">Buy Now</a></li>
                                 <li><a href="#">Buy Now</a></li>
                              </ul>
                           </div>
                           <h3 class="price_text">Price $30</h3>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                     <div class="product_box">
                        <h4 class="bursh_text">Beauty Bursh</h4>
                        <p class="lorem_text">incididunt ut labore et dolore magna aliqua. Ut enim </p>
                        <img src="assets/images/img-12.png" class="image_1">
                        <div class="btn_main">
                           <div class="buy_bt">
                              <ul>
                                 <li class="active"><a href="#">Buy Now</a></li>
                                 <li><a href="#">Buy Now</a></li>
                              </ul>
                           </div>
                           <h3 class="price_text">Price $30</h3>
                        </div>
                     </div>
                  </div>
               </div> -->
      </div>
   </div>
   <!-- product section end -->
   <!-- about section start -->
   <div class="about_section layout_padding">
      <div class="container">
         <div class="about_section_main">
            <div class="row">
               <div class="col-md-6">
                  <div class="about_taital_main">
                     <h1 class="about_taital">Tentang riview kami</h1>
                     <p class="about_text">Bermula dari kolom komentar dan forum yang sederhana, komunitas Female Daily - dengan anggota yang dianggap sebagai pengguna awal kecantikan - tumbuh menjadi salah satu komunitas terbesar yang berpusat pada perempuan di Indonesia. Kemudian berkembang menjadi platform ulasan kecantikan pertama di Indonesia, yang menjadikan dirinya sebagai top-of-mind dalam bidang kecantikan</p>
                  </div>
               </div>
               <div class="col-md-6">
                  <div><img src="assets/images/about-img.png" class="image_3"></div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- about section end -->
   <!-- customer section start -->
   <div class="customer_section layout_padding">
      <div class="container">
         <div class="row">
            <div class="col-sm-12">
               <h1 class="customer_taital">Temui Para Pemimpin</h1>
            </div>
         </div>
         <div id="main_slider" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <div class="client_section_2">
                     <div class="client_main">
                        <div class="client_left">
                           <div class="client_img"><img src="assets/images/produk/hanifaambadar.png"></div>
                        </div>
                        <div class="client_right">
                           <h3 class="name_text">Hanifa Hambadar</h3>
                           <p class="dolor_text">Para wanita di balik Female Daily percaya dengan sepenuh hati bahwa kita dapat memberdayakan satu sama lain melalui banyak cara, termasuk kecantikan</p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="client_section_2">
                     <div class="client_main">
                        <div class="client_left">
                           <div class="client_img"><img src="assets/images/produk/novitaimelda.png"></div>
                        </div>
                        <div class="client_right">
                           <h3 class="name_text">Novita Imelda</h3>
                           <p class="dolor_text">Para wanita di balik Female Daily percaya dengan sepenuh hati bahwa kita dapat memberdayakan satu sama lain melalui banyak cara, termasuk kecantikan</p>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- <div class="carousel-item">
                  <div class="client_section_2">
                     <div class="client_main">
                        <div class="client_left">
                           <div class="client_img"><img src="assets/images/client-img.png"></div>
                        </div>
                        <div class="client_right">
                           <h3 class="name_text">Jonyro</h3>
                           <p class="dolor_text">consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation eu </p>
                        </div>
                     </div>
                  </div>
               </div> -->
            </div>
            <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
               <i class="fa fa-angle-left"></i>
            </a>
            <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
               <i class="fa fa-angle-right"></i>
            </a>
         </div>
      </div>
   </div>
   <!-- customer section end -->
   <!-- contact section start -->
   <div class="contact_section layout_padding">
      <div class="container">
         <div class="row">
            <div class="col-md-6">
            <h1 class="contact_taital">Lokasi Kami</h1>
                  <p class="contact_text">Kesempatan terbatas, cuma hari ini! Promo sampai 80 persen gila gilaan, hanya di toko kami.Klik Maps di bawah ini</p>
               </div>
               <div class="col-md-6">
                  <div class="contact_main">
                     <div class="contact_bt"><a href="#">Contact Form</a></div>
               </div>
            </div>
         </div>
      </div>
      <div class="map_main">
         <div class="map-responsive">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3949.989903953519!2d111.5583129736905!3d-8.102509181047072!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e79135be442a407%3A0xda4757951a3a3747!2sToko%20IDOLLA!5e0!3m2!1sid!2sid!4v1700791105674!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
         </div>
      </div>
   </div>
   <!-- contact section end -->
   <!-- footer section start -->
   <div class="footer_section layout_padding">
      <div class="container">
         <div class="footer_logo"><a href="\web"><img src="images/footer-logo.png"></a></div>
         <div class="contact_section_2">
            <div class="row">
               <div class="col-sm-4">
                  <h3 class="address_text">Contact Us</h3>
                  <div class="address_bt">
                     <ul>
                        <li>
                           <a href="#">
                              <i class="fa fa-map-marker" aria-hidden="true"></i><span class="padding_left10">Alamat : Pule,Trenggalek,Jawa Timur</span>
                           </a>
                        </li>
                        <li>
                           <a href="#">
                              <i class="fa fa-phone" aria-hidden="true"></i><span class="padding_left10">No.Hp : +622 3385 4150</span>
                           </a>
                        </li>
                        <li>
                           <a href="#">
                              <i class="fa fa-envelope" aria-hidden="true"></i><span class="padding_left10">Email : belanep@gmail.com</span>
                           </a>
                        </li>
                     </ul>
                  </div>
               </div>
               <div class="col-sm-4">
                  <div class="footer_logo_1"><a href="/home"><img src="assets/images/footer-logo.png"></a></div>
                  <p class="dummy_text">Bisnis besar dimulai dari yang kecil</p>
               </div>
               <div class="col-sm-4">
                  <div class="main">
                     <h3 class="address_text">Tentang Riview Kami</h3>
                     <p class="ipsum_text">dengan anggota yang dianggap sebagai pengguna awal kecantikan - tumbuh menjadi salah satu komunitas terbesar yang berpusat pada perempuan di Indonesia</p>
                  </div>
               </div>
            </div>
         </div>
         <div class="social_icon">
            <ul>
               <li>
                  <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
               </li>
               <li>
                  <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
               </li>
               <li>
                  <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
               </li>
               <li>
                  <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
               </li>
            </ul>
         </div>
      </div>
   </div>
   <!-- footer section end -->
   <!-- copyright section start -->
   <div class="copyright_section">
      <div class="container">
         <p class="copyright_text">2023 All Rights Reserved. Design by Abella</p>
      </div>
   </div>
   <!-- copyright section end -->
   <!-- Javascript files-->
   <script src="assets/js/jquery.min.js"></script>
   <script src="assets/js/popper.min.js"></script>
   <script src="assets/js/bootstrap.bundle.min.js"></script>
   <script src="assets/js/jquery-3.0.0.min.js"></script>
   <script src="assets/js/plugin.js"></script>
   <!-- sidebar -->
   <script src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
   <script src="assets/js/custom.js"></script>
   <!-- javascript -->
   <script src="assets/js/owl.carousel.js"></script>
   <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
   <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
   <script>
      function openNav() {
         document.getElementById("mySidenav").style.width = "100%";
      }

      function closeNav() {
         document.getElementById("mySidenav").style.width = "0";
      }
   </script>
</body>

</html>