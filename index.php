<?php
session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>صفحه اصلی</title>
    <link href="./assets/css/bootstrap.min.css" rel="stylesheet" >
    <link href="./assets/css/carousel.css" rel="stylesheet" >
    <link rel="stylesheet" href="./style.css">  
    <style>
    .background{
      /* background: #000000cc; */
      padding: 10px 20px;
      border-radius:5px;
      font-size:12px !important;
    }
    .carousel-caption p, .carousel-caption p a{
      font-size:14px !important;
      font-weight:200;
      line-height:29px;
    }
    .mask{
      position:absolute;
      z-index:1;
      top:0;
      bottom:0;
      left:0;
      right:0;
      background:#000000ba
    }
    </style>
</head>
<body>

<!--  navbar -->
<?php include './includes/navbar.php' ?>

<main role="main">
    <!-- carousel -->
    <?php  include './includes/caruosel.php'; ?>

  <div class="container">
    <!-- Example row of columns -->
  <?php include './includes/cardItem.php' ?>

    <hr>

  </div> <!-- /container -->

</main>

<footer class="container">
  <p>©  2017-2019</p>
</footer>
<script src="./assets/js/jquery-3.4.1.slim.min.js"></script>
<script src="./assets/js/bootstrap.min.js"></script>
</body>
</html>