<?php
include_once 'Db.php';
class Post{
    private $db;
    public function __construct()
    {
        $this->db = new DB();
    }

    //get all posts
   public function index(){
        $data=[];
        $i=0;
        $res=$this->db->query("select * from post");
        while ($row=mysqli_fetch_assoc($res)){
            $data[$i]=$row;
            $i++;
        }
      return $data;
   }

    /**
     * @return DB
     */
    public function getPost($id)
    {
        return mysqli_fetch_assoc($this->db->query("select * from post where id='$id'"));
    }
   public function newPost($title,$body,$file){
        $img=$this->upload($file);
        $userId=$_SESSION['id'];
        $createdAt=date("Y-m-d h:i");
//        $createdAt=time();
        $this->db->query("insert into post(userId,createdAt,title,body,img) values ('$userId','$createdAt','$title','$body','$img')");
        header("location:http://localhost/blog/admin/?p=allposts");
   }

   public function deletePost($id){
        $this->db->query("delete from post where id='$id'");
        header("location:http://localhost/blog/admin/?p=allposts");
   }

   private function upload($file){
       $path="../upload/".$_SESSION['admin'];
       if (! file_exists($path)){
           mkdir($path);
       }
       $fileName=$file['name'];
       $array=explode(".",$fileName);
       $ext=end($array);
       $newName=rand().".".$ext;
       $from=$file['tmp_name'];
       $to=$path.'/'.$newName;
       move_uploaded_file($from,$to);
       return substr($to,2);
   }
}