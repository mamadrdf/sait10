<?php
    include_once './../classes/Post.php';
    $post=new Post();
    if(isset($_POST['delete'])){
        $post->deletePost($_POST['id']);
    }
?>
<div class="d-flex justify-content-between align-items-center mb-3 border-bottom-1">
    <h2>همه مطالب</h2>
    
</div>
<div class="table-responsive">
    <table class="table table-striped table-bordered">
        <thead>
        <tr>
            <th>عنوان دوره </th>
            <th>متن نوشته</th>
            <th>تاریخ ایجاد</th>
            <th>تنظیمات</th>
        </tr>
        </thead>
        <tbody>
        <?php $posts=$post->index(); for ($i=0;$i<sizeof($posts);$i++){?>

            <tr>
                <td><a href="/blog/post/?id=<?php echo $posts[$i]['id']; ?>"> <?php echo $posts[$i]['title']; ?> </a></td>
                <td><?php echo $posts[$i]['body']; ?></td>
                <td><?php echo $posts[$i]['createdAt']; ?></td>

                <td>
                    <form action="" method="post">

                        <div class="btn-group btn-group-sm">
                            <a href="#"  class="btn btn-primary">ویرایش</a>
                            <input type="hidden" value="<?php echo $posts[$i]['id']; ?>" name="id">
                            <input type="submit" class="btn btn-danger" value="حذف" name="delete">
                        </div>
                    </form>
                </td>
            </tr>

        <?php } ?>

              
        </tbody>
    </table>

      
</div>

