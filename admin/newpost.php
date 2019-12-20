<?php
if (isset($_POST['submit'])){

    include_once './../classes/Post.php';
    $post=new Post();
    $post->newPost($_POST['title'],$_POST['body'],$_FILES['image']);
}
?>
<main role="main" class="col-md-12 mr-sm-auto col-lg-12 pt-3 px-4">
            <div class="d-flex justify-content-between align-items-center mb-3 pb-2 border-bottom">
    <h2>ایجاد مطلب جدید</h2>
</div>
<form class="form-horizontal" action="" method="post" enctype="multipart/form-data">

    
    <div class="form-group row">
        <div class="col">
            <label for="title" class="control-label font-weight-bold">عنوان مطلب</label>
            <input type="text" class="form-control" name="title" id="title" placeholder="عنوان را وارد کنید" value="">
        </div>
    </div>
   

    <div class="form-group row">
      <div class="col">
          <label for="body" class="control-label font-weight-bold">متن</label>
          <textarea rows="5" class="form-control" name="body" id="body" placeholder="متن  را وارد کنید"></textarea>
      </div>
    </div>

    <div class="form-group pb-2 row">
        <div class="col ">
            <label for="images" class="control-label font-weight-bold">تصویر مطلب</label>
            <input type="file" class="form-control" name="image" id="images" placeholder="تصویر مقاله را انتخاب کنید">
        </div>
    </div>

   
    <div class="form-group row">
        <div class="col">
            <input type="submit" class="btn btn-primary"  name="submit" value="ایجاد">
        </div>
    </div>
</form>

        </main>