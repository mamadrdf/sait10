<?php
include_once '../classes/User.php';
if(isset($_POST['email']) && isset($_POST['password']) && isset($_POST['name'])){
    $user=new User();
    $user->register($_POST['name'],$_POST['email'],$_POST['password']);
}
?>

<form class="form-auth" action='' method="post">
    <img class="mb-4" src="../assets/img/enter.svg" alt="" width="72" height="72">
    <h1 class="h3 mb-3 font-weight-normal">عضویت در وبسایت</h1>
    <input type="text" id="inputEmail" class="form-control"  name="name" placeholder="نام و نام خانوادگی" required autofocus>
    <input type="text" id="inputEmail" class="form-control"  name="email" placeholder="آدرس ایمیل" required autofocus>
    <input type="password" id="inputPassword" class="form-control" name="password" placeholder="رمز عبور" required>
    <div class="checkbox mb-3">
  
    </div>
    <button class="btn btn-lg btn-primary btn-block" type="submit">عضویت</button>
  </form>