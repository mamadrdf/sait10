<?php 
class DB{
    private $con;

    function __construct() {
        $this->con=mysqli_connect('localhost','root','','phpblog');
        mysqli_set_charset($this->con,"utf8");
        mysqli_query($this->con,"SET NAME 'utf8'");
        // Check connection
        if ($this->con->connect_error) {
            die("Connection failed: " . $this->con->connect_error);
        }
      }
    
      public function query($query)
      {
          return mysqli_query($this->con,$query);
      }
}

