<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
<!-- bootstrap css -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
<!-- main css -->
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" type="text/css" media="all" />
<!-- font awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <title>Traveling Bagel Blue</title>
</head>

<body>

<header id="header">
  <nav class="navbar navbar-expand-lg px-4">
    <img src="img/bagel blue.png" class="desktop-icon" alt="main icon">
  </a>
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#myNavbar">
      <span class="toggler-icon">
        <i class="fas fa-bars"></i>
      </span>
     </button>
     <div class="collapse navbar-collapse" id="myNavbar">
       <ul class="navbar-nav text-capitalize ml-auto">
         <li class="nav-item active">
           <a href="index.htm" class="nav-link">home</a>
         </li>
         <li class="nav-item active">
           <a href="about.htm" class="nav-link">about</a>
         </li>
         <li class="nav-item active">
           <a href="blog.htm" class="nav-link">blogs</a>
         </li>
         <li class="nav-item active">
           <a href="contact.htm" class="nav-link">contacts</a>
         </li>
         <li class="nav-item active">
           <a href="#footer" class="nav-link">links</a>
         </li>
       </ul>
</nav>
<!-- end of nav -->
<!-- banner -->
<div class="container-fluid">
  <div class="row max-height justify-content-center align-items-center">
    <div class="col-10 mx-auto banner text-center">
      <h1 class="text-capitalize">
      <strong class="banner-title">Explore a whole new world through travel</strong>
      </h1>
</div>
  </div>
    </div>
<!-- end of banner -->
<?php wp_head();?>
</header>
<!-- end of header-->
