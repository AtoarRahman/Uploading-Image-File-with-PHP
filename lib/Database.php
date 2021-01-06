<?php
include "config.php";
class Database{
    public $dbhost = DB_HOST;
    public $dbuser = DB_USER;
    public $dbpass =DB_PASS;
    public $dbname = DB_NAME;

    public $link;
    public $error;

    public function __construct(){
        $this->connection();
    }
    private function connection(){
        $this->link = new mysqli($this->dbhost, $this->dbuser, $this->dbpass, $this->dbname);
        if(!$this->link){
            $this->error = "Connection Fail..".$this->link->connect_error;
        }
    }
    // Upload Image
    public function uploadImage($fileName){
        $sql = "INSERT INTO tbl_image(image) VALUES ('$fileName')";
        $result = $this->link->query($sql) or die($this->link->error.__LINE__);
        return $result;
    }
    // Select Single Image
    public function getImage(){
        $sql = "SELECT * FROM tbl_image ORDER BY id DESC LIMIT 1";
        $result = $this->link->query($sql) or die($this->link->error.__LINE__);
        if($result->num_rows > 0){
            return $result;
        }else{
            return false;
        }
    }
    // Select All Image
    public function getImageAll(){
        $sql = "SELECT * FROM tbl_image ORDER BY id DESC";
        $result = $this->link->query($sql) or die($this->link->error.__LINE__);
        if($result->num_rows > 0){
            return $result;
        }else{
            return false;
        }
    }
    // Delete Image
    public function deleteImage($id){
        $sql = "DELETE FROM tbl_image WHERE id='$id'";
        $result = $this->link->query($sql) or die($this->link->error.__LINE__);
        return $result;
    }

    // Image Select by ID
    public function imageSelectById($id){
        $sql = "SELECT * FROM tbl_image WHERE id='$id'";
        $result = $this->link->query($sql) or die($this->link->error.__LINE__);
        return $result;
    }
}