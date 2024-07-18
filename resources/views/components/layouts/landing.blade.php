   <!DOCTYPE html>
   <html lang="en">
      <head>
         <!-- basic -->
         <meta charset="utf-8">
         <meta http-equiv="X-UA-Compatible" content="IE=edge">
         <!-- mobile metas -->
         <meta name="viewport" content="width=device-width, initial-scale=1">
         <meta name="viewport" content="initial-scale=1, maximum-scale=1">
         <!-- site metas -->
         <title>{{ $title }}</title>
         <meta name="keywords" content="">
         <meta name="description" content="">
         <meta name="author" content="">
         <!-- bootstrap css -->
         <link rel="stylesheet" href="covido/css/bootstrap.min.css">
         <!-- style css -->
         <link rel="stylesheet" href="covido/css/style.css">
         <!-- Responsive-->
         <link rel="stylesheet" href="covido/css/responsive.css">
         <!-- fevicon -->
         <link rel="icon" href="images/fevicon.png" type="image/gif" />
         <!-- Scrollbar Custom CSS -->
         <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
         <link rel="stylesheet" href="covido/css/owl.carousel.min.css"> 
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
         <link rel="stylesheet" href="https://rawgit.com/LeshikJanz/libraries/master/Bootstrap/baguetteBox.min.css">
         <!--[if lt IE 9]>
         <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
         <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
         <style>
         a .active {
            background-color: yellow;
         }
        .navbar {
         background: #fff;
         box-shadow: 0 4px 6px rgba(22, 22, 26, 0.18);
         }
         .navbar .navbar-nav .nav-link {
         color: #000;
         }
         .navbar .navbar-nav .nav-link .active {
         color: #fff000;
         }
         .btn-outline-dark {
         border-radius: 0;
         }
         .btn-outline-dark:focus {
         box-shadow: none;
         }
         @media screen and (max-width: 768px) {
         .btn-outline-dark {
            border: none;
            padding: 0;
            outline: none;
         }

         .btn-outline-dark:hover {
            background: none;
            color: gray;
         }
         }

            </style>
      </head>
      <!-- body -->
      <body class="main-layout">
         <!-- loader  -->
         <div class="loader_bg">
            <div class="loader"><img src="covido/images/loading.gif" alt="#"/></div>
         </div>
         <!-- end loader -->
         <!-- top -->
                     <!-- header -->
            {{-- <header class="header-area">
               <div class="left">
                  <a href="Javascript:void(0)"><i class="fa fa-search" aria-hidden="true"></i></a>
               </div>
               <div class="right">
                  <a href="Javascript:void(0)"><i class="fa fa-user" aria-hidden="true"></i></a>
               </div>
               <div class="container">
                  <div class="row d_flex">
                     <div class="col-sm-3 logo_sm">
                        <div class="logo">
                           <a href="index.html"></a>
                        </div>
                     </div>
                     <div class="col-lg-10 offset-lg-1 col-md-12 col-sm-9">
                        <div class="navbar-area">
                           <nav class="site-navbar">
                              <ul>
                                 <li><a class="active" href="index.html">Home</a></li>
                                 <li><a href="about.html">About</a></li>
                                 <li><a href="action.html">take action</a></li>
                                 <li><a href="index.html" class="logo_midle">covido</a></li>
                                 <li><a href="news.html">news</a></li>
                                 <li><a href="doctores.html">doctores</a></li>
                                 
                                 <li><a href="/login">Login </a></li>
                              </ul>
                              <button class="nav-toggler">
                              <span></span>
                              </button>
                           </nav>
                        </div>
                     </div>
                  </div>
               </div>
            </header> --}}
      
         <!-- end header -->
               {{-- <div class="full_bg"> --}}
         <!-- header inner -->
            {{-- <div class="section">
               <!-- carousel code -->
               <div id="banner1" class="carousel slide slider_main">
                  <ol class="carousel-indicators ">
                     <li data-target="#banner1" data-slide-to="0" class="indicator-li-1">01</li>
                     <li data-target="#banner1" data-slide-to="1" class="">02</li>
                     <li data-target="#banner1" data-slide-to="2" class="active">03</li>
                  </ol>
                  <div class="carousel-inner">
                     <!-- first slide -->
                     <div class="carousel-item active">
                        <div class="carousel-caption cuplle">
                           <div class="container">
                              <div class="row">
                                 <div class="col-md-8">
                                    <div class="photog">
                                       <h1>Care early<br>Coronavirus</h1>
                                       <a class="read_more" href="javascript:void(0)" >Read More</a>
                                       <a class="read_more" href="about.html" >About Us</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- second slide -->
                     <div class="carousel-item">
                        <div class="carousel-caption cuplle">
                           <div class="container">
                              <div class="row">
                                 <div class="col-md-8">
                                 <div class="photog">
                                       <h1>Care early<br>Coronavirus</h1>
                                       <a class="read_more" href="javascript:void(0)" >Read More</a>
                                       <a class="read_more" href="about.html" >About Us</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- third slide -->
                     <div class="carousel-item">
                        <div class="carousel-caption cuplle">
                           <div class="container">
                              <div class="row">
                                 <div class="col-md-8">
                                 <div class="photog">
                                       <h1>Care early<br>Coronavirus</h1>
                                       <a class="read_more" href="javascript:void(0)" >Read More</a>
                                       <a class="read_more" href="about.html" >About Us</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- controls -->
                  <a class="carousel-control-prev" href="#banner1" role="button" data-slide="prev">
                  <i class="fa fa-angle-left" aria-hidden="true"></i>
                  <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#banner1" role="button" data-slide="next">
                  <i class="fa fa-angle-right" aria-hidden="true"></i>
                  <span class="sr-only">Next</span>
                  </a>
               </div>
            </div> --}}
         {{-- </div> --}}
         <!-- end banner -->
         <!-- about -->

         <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid">
            <a class="navbar-brand fw-bold" href="#">Coding Yaar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
               <ul class="navbar-nav mx-auto mb-2 mb-lg-0 ">
                  <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="/') }}">Home</a>
                  </li>
                  <li class="nav-item">
                  <a class="nav-link" href="#">Link</a>
                  </li>
                  <li class="nav-item"><a href="about.html" class="nav-link">About</a></li>
                  {{-- <li class="nav-item"><a href="action.html" class="nav-link">take action</a></li> --}}
                  {{-- <li class="nav-item"><a href="index.html" class="nav-link" class="logo_midle">covido</a></li> --}}
                  {{-- <li class="nav-item"><a href="news.html" class="nav-link">news</a></li> --}}
                  {{-- <li class="nav-item"><a href="doctores.html" class="nav-link">doctores</a></li> --}}
                  
                  {{-- <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                     Dropdown
                  </a> --}}
                  {{-- <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                     <li><a class="dropdown-item" href="#">Action</a></li>
                     <li><a class="dropdown-item" href="#">Another action</a></li>
                     <li>
                        <hr class="dropdown-divider">
                     </li>
                     <li><a class="dropdown-item" href="#">Something else here</a></li>
                  </ul> --}}
                  {{-- </li> --}}
               </ul>
               <a href="{{ url('login') }}" class="btn btn-sm btn-primary fw-bold">Login</a>
            </div>
            </div>
         </nav>
         

         {{ $slot }}

         <!--  footer -->
         <footer>
            <div class="footer">
               <div class="container">
                  <div class="row">
                           <div class="col-lg-2 col-md-6 col-sm-6">
                              <div class="hedingh3 text_align_left">
                                 <h3>Resources</h3>
                                 <ul class="menu_footer">
                                    <li><a href="index.html">Home</a><li>
                                    <li><a href="javascript:void(0)">What we do</a><li>
                                    <li> <a href="javascript:void(0)">Media</a><li>
                                    <li> <a href="javascript:void(0)">Travel Advice</a><li>
                                    <li><a href="javascript:void(0)">Protection</a><li>
                                    <li><a href="javascript:void(0)">Care</a><li>
                                 </ul>
                              
            
                              </div>
                           </div>
                           <div class="col-lg-3 col-md-6 col-sm-6">
                              <div class="hedingh3 text_align_left">
                              <h3>About</h3>
                                 <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various</p>
                              </div>
                           </div>
                        
                  
                        
                           <div class="col-lg-3 col-md-6 col-sm-6">
                              <div class="hedingh3  text_align_left">
                                 <h3>Contact  Us</h3>
                                 <ul class="top_infomation">
                           <li><i class="fa fa-map-marker" aria-hidden="true"></i>
                              Making this the first true  
                           </li>
                           <li><i class="fa fa-phone" aria-hidden="true"></i>
                              Call : +01 1234567890
                           </li>
                           <li><i class="fa fa-envelope" aria-hidden="true"></i>
                              <a href="Javascript:void(0)">Email : demo@gmail.com</a>
                           </li>
                        </ul>
                              
                              
                        </div>
                     </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                              <div class="hedingh3 text_align_left">
                                 <h3>countrys</h3>
                                 <div class="map">
                                 <img src="covido/images/map.png" alt="#"/>
                                 </div>
                              </div>
                           </div>
                     
                  </div>
               </div>
               <div class="copyright">
                  <div class="container">
                     <div class="row">
                        <div class="col-md-8 offset-md-2">
                           <p>© 2020 All Rights Reserved. Design by <a href="https://html.design/"> Free html Templates</a></p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </footer>
         <!-- end footer -->
         <!-- Javascript files-->
         <script src="covido/js/jquery.min.js"></script>
         <script src="covido/js/bootstrap.bundle.min.js"></script>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
         <script src="covido/js/owl.carousel.min.js"></script>
         <script src="covido/js/custom.js"></script>
      </body>
   </html>