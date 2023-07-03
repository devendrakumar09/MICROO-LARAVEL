
   <!<!DOCTYPE html>
   <html lang="en">
      <head>
         <!-- basic -->
         <meta charset="utf-8">
         <meta http-equiv="X-UA-Compatible" content="IE=edge">
         <!-- mobile metas -->
         <meta name="viewport" content="width=device-width, initial-scale=1">
         <meta name="viewport" content="initial-scale=1, maximum-scale=1">
         <!-- site metas -->
         <title>microo</title>
         <meta name="keywords" content="">
         <meta name="description" content="">
         <meta name="author" content="">
         <!-- bootstrap css -->
         <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css')}}">
         <!-- style css -->
         <link rel="stylesheet" href="{{ asset('assets/css/style.css')}}">
         <!-- responsive-->
         <link rel="stylesheet" href="{{ asset('assets/css/responsive.css')}}">
         <!-- awesome fontfamily -->
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
         <!--[if lt IE 9]>
         <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
         <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
      </head>
      <!-- body -->
   <body class="main-layout">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="{{ asset('assets/images/loading.gif')}}" alt="" /></div>
      </div>
      <!-- end loader -->
      <div id="mySidepanel" class="sidepanel">
         <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
         <a class="active" href="index.blade.php">Home</a>
         <a href="about.blade.php">About</a>
         <a href="services.blade.php">Services</a>
         <a href="shop.blade.php">Shop</a>
         <a href="contact.blade.php">Contact</a>
      </div>
      <!-- header -->
      <header>
         <!-- header inner -->
         <div class="head-top">
            <div class="container-fluid">
               <div class="row d_flex">
                  <div class="col-sm-3">
                     <div class="logo">
                        <a href="index.blade.php"><img src="{{ asset('assets/images/logo.png')}}" /></a>
                     </div>
                  </div>
                  <div class="col-sm-9">
                     <ul class="email text_align_right">
                        <li class="d_none"> <a href="javascript:void(0)"><i class="fa fa-user" aria-hidden="true"></i>
                           Login</a>
                        </li>
                        <li> <button class="openbtn" onclick="openNav()"><img src="{{ asset('assets/images/menu_btn.png')}}"></button></li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <!-- end header --