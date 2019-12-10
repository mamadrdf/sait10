
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="نمایشport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>صفحه ادمین</title>
    <link rel="stylesheet" href="../assets/css/admin/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/admin/bootstrap-rtl.min.css">
    <link rel="stylesheet" href="../assets/css/admin/admin.css">
    <link rel="stylesheet" href="../style.css">
 
</head>
<body>
  <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
    <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">صفحه اصلی </a>
    <input class="form-control form-control-dark w-100" type="text" placeholder="جستجو" aria-label="Search">
    <ul class="navbar-nav px-3">
      <li class="nav-item text-nowrap">
        <a class="nav-link" href="/logout">خروج</a>
      </li>
    </ul>
  </nav>

  <div class="container-fluid">
    <div class="row">
      
        <main role="main" class="col-md-9 mr-sm-auto col-lg-10 pt-3 px-4">
              <?php 
              if(isset($_GET['p'])){
                if($_GET['p']=='addpost'){
                  include './newpost.php';
                }else if($_GET['p']=='allposts'){
                  include './allposts.php';
                }else if($_GET['p']=='comments'){
                  include './comment.php';
                }
              }else include './allposts.php';
        ?>
        </main>

 

        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link active" href="/blog/admin">
                  <span data-feather="home"></span>
                  داشبورد
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/blog/admin/?p=addpost">
                  <span data-feather="file"></span>
                  افزودن مطلب جدید
                </a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="/blog/admin/?p=allposts">
                  <span data-feather="layers"></span>
                  همه مطالب
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="layers"></span>
                  نظرات
                </a>
              </li>
            </ul>
          </div>
        </nav>
    </div>
  </div>

  

    <script src="../assets/js/jquery-3.4.1.slim.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>

    <!-- Icons -->
    <script src="../assets/js/feather.min.js"></script>

</body>
</html> 