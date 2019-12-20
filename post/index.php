<?php
session_start();
include_once '../classes/Post.php';
if (isset($_GET['id'])){
    $post=new Post();
    $singlePost=$post->getPost($_GET['id']);
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $singlePost['title']; ?></title>
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" >
    <link href="../assets/css/carousel.css" rel="stylesheet" >
    <link rel="stylesheet" href="../style.css">  
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
<?php include '../includes/navbar.php' ?>

<main role="main">

  <div class="container">

    <?php if (isset($_GET['id'])){?>
        <div style="width:75%; margin: auto; min-width: 300px;">
            <div class="card mt-4" >
                <div class="p-3"><img class="card-img-top" src="http://localhost/blog/<?php echo $singlePost['img']; ?>" width="100%" height="400"></div>
                <div class="card-body">
                    <h2 class="card-title"><?php echo $singlePost['title']; ?></h2>
                    <p class="card-text" style="line-height:29px; "><?php echo $singlePost['body']; ?></p>
                </div>
                <div class="card-footer text-muted">
                    تاریخ انتشار : <?php echo $singlePost['createdAt']; ?>
                </div>
            </div>

            <?php
            if(isset($_SESSION['user'])){?>

                <!-- comments ******** -->
                <?php include_once '../includes/comments.php'?>
            <?php }else echo "<a href='http://localhost/blog/auth/?p=login' class='m-2' style='display: block'>برای مشاهده نظرات ابتدا وارد شوید</a> " ?>


        </div>
    <?php }else echo "<div class='mt-5'>صفحه مورد نظر یافت نشد ! </div>"?>

  </div> <!-- /container -->


</main>

<!-- <footer class="container">
  <p>©  2017-2019</p>
</footer> -->
<script src="../assets/js/jquery-3.4.1.slim.min.js"></script>
<script src="../assets/js/bootstrap.min.js"></script>
</body>
</html>