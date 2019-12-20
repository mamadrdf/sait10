<?php
include_once 'Db.php';
session_start();

class User{
    private $db;
    public function __construct()
    {
        $this->db=new DB();
    }

    public function login($username,$password){
        $row=$this->db->query("select * from user where username= '$username'");
        $res=mysqli_fetch_assoc($row);
        if($res!=null){
                if($res['password']==$password){
                    if($res['role']=="admin"){
                        $_SESSION['admin']=$username;
                        header("Location: http://localhost/blog/admin/");
                    }else{
                        $_SESSION['user']=$username;
                        header("Location: http://localhost/blog");
                    }

                }else{
                    header("location:http://localhost/blog/auth/?p=login&error=wrongpassword");
                }
        }else {
            header("location:http://localhost/blog/auth/?p=login&error=notfound");
        }
    }

    public function register($name,$username,$password){
       if($this->isUniqueUsername($username)){
           $this->db->query("insert into user (name,username,password) values ('$name','$username','$password')");
           $_SESSION['user']=$username;
           header("Location: http://localhost/blog");
           exit();
       }else{
           header("Location: http://localhost/blog/auth/?p=register");
           exit();
       }

    }

    public function isUniqueUsername($username){
       $res=mysqli_fetch_assoc($this->db->query("select * from user where username='$username'"));
       if($res['email']==null) return true;
       else return false;

    }
}

