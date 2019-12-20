
<nav class="navbar navbar-expand-md navbar-dark fixed-top  bg-dark">
  <a class="navbar-brand" href="/blog">صفحه اصلی</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarsExampleDefault">
    <ul class="navbar-nav mr-auto">

      <li class="nav-item">
        <a class="nav-link" href="#">درباره ما</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">تماس با ما</a>
      </li>
      
     
    </ul>
    <form class="form-inline my-2 my-lg-0">
        <?php if (isset($_SESSION['user'])) { ?>
            <a class="btn btn-success my-2 my-sm-0" href='#' ><?php echo $_SESSION['user'] ?></a>
            <a class="btn btn-primary my-2 my-sm-0 ml-1" href="/blog/auth/?p=logout" >خروج</a>
        <?php }else{?>
            <a class="btn btn-success my-2 my-sm-0" href="/blog/auth/?p=login" >ورود</a>
            <a class="btn btn-primary my-2 my-sm-0 ml-1" href="/blog/auth/?p=register" >عضویت</a>
        <?php } ?>
    </form>
  </div>
</nav>