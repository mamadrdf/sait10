<?php
    include_once '../classes/Comment.php';
    $com=new Comment();
    if (isset($_POST['submit'])){
        $com->newComment($_GET['id'],$_POST['comment']);
    }
    $comments=$com->comments($_GET['id']);
?>
<div class="mt-4 mb-3">
    <h5>نظرات (<?php echo sizeof($comments)?>)</h5>
</div>

<div class="form">
    <form action="" method="post">
        <div class="form-group">
            <textarea class="form-control" id="exampleFormControlTextarea1" name="comment" rows="5" placeholder="لطفا نظر خود را وارد نمایید ..."></textarea>
        </div>
        <div class="form-group">
            <input class="btn btn-primary" type="submit" value="ارسال نظر" name="submit">
        </div>
    </form>
</div>
<div class="row">
        <?php for ($i=0;$i<sizeof($comments);$i++){?>
            <div class="col-md-12 comment mb-3 mt-3 pt-3">
                <div class="media g-mb-30 media-comment">
                    <img class="d-flex g-width-50 g-height-50 rounded-circle g-mt-3 g-mr-15 mr-3" width="50" height="50" src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Image Description">
                    <div class="media-body u-shadow-v18 g-bg-secondary g-pa-30">
                        <div class="g-mb-15">
                            <h5 class="h5 g-color-gray-dark-v1 mb-0"><?php echo $comments[$i]['username']?></h5>
                            <span class="g-color-gray-dark-v4 g-font-size-12"><?php echo $comments[$i]['createdAt']?></span>
                        </div>
                        <p><?php echo $comments[$i]['comment']?></p>
                    </div>
                </div>

                <!-- reply -->
                <!--        <div class="col-md-12 mt-2 mb-3 pt-3 comment">-->
                <!--            <div class="media g-mb-30 media-comment">-->
                <!--                <img class="d-flex g-width-50 g-height-50 rounded-circle g-mt-3 g-mr-15 ml-3" width="50" height="50" src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Image Description">-->
                <!--                <div class="media-body u-shadow-v18 g-bg-secondary g-pa-30">-->
                <!--                    <div class="g-mb-15">-->
                <!--                        <h5 class="h5 g-color-gray-dark-v1 mb-0">محمد دهقان</h5>-->
                <!--                        <span class="g-color-gray-dark-v4 g-font-size-12">5 روز پیش</span>-->
                <!--                    </div>-->
                <!--                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد.</p>-->
                <!--                </div>-->
                <!--            </div>-->
                <!---->
                <!--        </div>-->

            </div>
        <?php }?>


</div>
