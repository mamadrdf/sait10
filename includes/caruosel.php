<?php
 include_once './classes/Post.php';
 $post=new Post();
 $posts=$post->index();
?>
<div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class=""></li>
          <li data-target="#myCarousel" data-slide-to="1" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="2" class=""></li>
        </ol>
        <div class="carousel-inner">

    <?php for ($i=0;$i<3;$i++) { ?>
        <div class="carousel-item <?php if($i==0) echo 'active';?>">
            <div class="mask"></div>
            <img src="http://localhost/blog/<?php echo $posts[$i]['img']; ?>" width="100%" height="100%">
            <div class="container">
                <div class="carousel-caption text-left background">
                    <h1><?php echo $posts[$i]['title']; ?></h1>
                    <p><?php echo $posts[$i]['body']; ?></p>
                    <p><a class="btn btn-lg btn-primary" href="/blog/post/?id=<?php echo $posts[$i]['id']; ?>" role="button">مشاهده بیشتر</a></p>
                </div>
            </div>
        </div>
        <?php
    }
            ?>

          
<!--          <div class="carousel-item active">-->
<!--                        <div class="mask"></div>-->
<!---->
<!--            <img src="./assets/img/3.jpg" width="100%" height="100%" >-->
<!--            <div class="container">-->
<!--              <div class="carousel-caption text-left background" style="z-index:2">-->
<!--                <h1>عنوان پست 1</h1>-->
<!--                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در ش</p>-->
<!--                <p><a class="btn btn-lg btn-primary" href="#" role="button">مشاهده بیشتر</a></p>-->
<!--              </div>-->
<!--            </div>-->
<!--          </div>-->


<!--          <div class="carousel-item">-->
<!--                        <div class="mask"></div>-->
<!---->
<!--            <img src="./assets/img/5.jpg" width="100%" height="100%" >-->
<!--            <div class="container">-->
<!--              <div class="carousel-caption text-left background">-->
<!--                <h1>عنوان پست 1</h1>-->
<!--                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در ش</p>-->
<!--                <p><a class="btn btn-lg btn-primary" href="#" role="button">مشاهده بیشتر</a></p>-->
<!--              </div>-->
<!--            </div>-->
<!--          </div>-->
<!--          -->

  
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
