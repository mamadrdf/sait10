<?php
include_once 'Db.php';

class Comment
{
    private $db;
    public function __construct()
    {
        $this->db=new DB();
    }

    //show unaccepted comments
    public function index(){
      $data=[];
      $i=0;
      $res=$this->db->query("select comment.id,comment.createdAt,comment,post.title,user.username from comment,user,post where user.id=comment.userId and post.id=comment.postId and comment.accept=0 ");
      while ($row=mysqli_fetch_assoc($res)){
          $data[$i]=$row;
          $i++;
      }
      return $data;
    }

    public function acceptComment($commentId){
        var_dump($commentId);
        $this->db->query("update comment set accept=1 where id='$commentId'");
        header("location:http://localhost/blog/admin/?p=comments&success");

    }
    public function deleteComment($commentId){
        $this->db->query("delete from comment  where id='$commentId'");
        header("location:http://localhost/blog/admin/?p=comments&success");
    }

    public function newComment($postId,$comment){
        $userId=$_SESSION['id'];
        $createdAt=date("Y-m-d h:i");
        $this->db->query("insert into comment (userId,postId,comment,createdAt) values ('$userId','$postId','$comment','$createdAt')");
        header("location:http://localhost/blog/post/?id=$postId&success=true");
    }

    //show post comment
    public function comments($postId){
        $data=[];
        $i=0;
        $res=$this->db->query("select comment.id,comment.createdAt,comment,user.username from comment,user where user.id=comment.userId and  comment.accept=1 and comment.postId='$postId'");
        while ($row=mysqli_fetch_assoc($res)) {
            $data[$i]=$row;
            $i++;
        }
        return $data;

    }


}