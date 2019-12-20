<?php
include_once './../classes/Comment.php';
$comment=new Comment();
//
if(isset($_POST['delete'])){
    $comment->deleteComment($_POST['id']);
}
if (isset($_POST['accept'])){
    $comment->acceptComment($_POST['id']);
}
?>

<div class="d-flex justify-content-between align-items-center mb-3 border-bottom-1">
    <h2>نظرات</h2>

</div>
<div class="table-responsive">
    <table class="table table-striped table-bordered">
        <thead>
        <tr>
            <th>نویسنده </th>
            <th>متن کامنت</th>
            <th>مطلب مربوطه</th>
            <th>تاریخ ایجاد</th>
            <th>تنظیمات</th>
        </tr>
        </thead>
        <tbody>
        <?php $comments=$comment->index(); for ($i=0;$i<sizeof($comments);$i++){?>

            <tr>
                <td><?php echo $comments[$i]['username'];?></td>
                <td><?php echo $comments[$i]['comment']; ?></td>
                <td><?php echo $comments[$i]['title']; ?></td>
                <td><?php echo $comments[$i]['createdAt']; ?></td>

                <td>
                    <form action="/blog/admin/?p=comments" method="post">

                        <div class="btn-group btn-group-sm">
                            <input type="hidden" value="<?php echo $comments[$i]['id']; ?>" name="id">
                            <input type="submit"  class="btn btn-primary" value="تایید" name="accept">
                            <input type="submit" class="btn btn-danger" value="حذف" name="delete">
                        </div>
                    </form>
                </td>
            </tr>

        <?php } ?>



        </tbody>
    </table>


</div>

