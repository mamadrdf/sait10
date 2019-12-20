<?php
include_once './classes/Post.php';
$post=new Post();
$posts=$post->index();
?>
<div class="row">

    <?php for ($i=3;$i<sizeof($posts);$i++){?>
        <div class="col-md-3 col-lg-4 col-sm-12">
            <div class="card mb-3" >
                <img src="http://localhost/blog/<?php echo $posts[$i]['img']; ?>" class="card-img-top" height="200" alt="...">
                <div class="card-body">
                    <a href="http://localhost/blog/post/?id=<?php echo $posts[$i]['id']; ?>"><h5 class="card-title"><?php echo $posts[$i]['title']; ?></h5> </a>
                    <p class="card-text"><?php echo $posts[$i]['body']; ?></p>
                    <a href="http://localhost/blog/post/?id=<?php echo $posts[$i]['id']; ?>" class="btn btn-success">ادامه مطلب</a>
                </div>
            </div>
        </div>
    <?php }?>

  
    
</div>