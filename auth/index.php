<!doctype html>
<html lang="fa">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.6">
    <title>Signin Template · Bootstrap</title>


    <!-- Bootstrap core CSS -->
<link href="../assets/css/bootstrap.min.css" rel="stylesheet" >
<link rel="stylesheet" href="../style.css">



    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
      .form-auth{
        width: 100%;
        max-width: 330px;
        padding: 15px;
        margin: auto;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%,-50%);
      }
      .form-control{
          margin: 10px 0 !important;
      }
    </style>
  </head>
  <body class="text-center">
        <?php 
          if(isset($_GET['p'])){
            if( $_GET['p']=='login'){
              include './login.php';
            }else if($_GET['p']=='register'){
              include './register.php';
            }
            else echo 'صفحه مورد نظر یافت نشد';

          } else echo 'صفحه مورد نظر یافت نشد';
        ?>
</body>
</html>