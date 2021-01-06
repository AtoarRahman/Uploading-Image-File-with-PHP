<?php
    include 'inc/header.php';
    include "lib/Database.php";
    $db = new Database();

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $fileType = array('jpg','jpeg','png','gif');
        $fileName = $_FILES['image']['name'];
        $fileSize = $_FILES['image']['size'];
        $fileTmp  = $_FILES['image']['tmp_name'];

        $file_div = explode('.', $fileName);
        $file_ext = strtolower(end($file_div));
        $unique_img = uniqid().'.'.$file_ext;
        $uploadImg  = "media/".$unique_img;


        if(empty($fileName)){
            echo "<h3 class='error'>Please select your image !!</h3>";
        }elseif ($fileSize > 1048567){
            echo "<h3 class='error'>Image Size Should be upto 1MB !!</h3>";
        }elseif (in_array($file_ext, $fileType)===false){
            echo "<h3 class='error'>Yoo can upload only:- ".implode(', ', $fileType)."</h3>";
        }else{

            move_uploaded_file($fileTmp, $uploadImg);

            $upImg = $db->uploadImage($uploadImg);
            if($upImg){
                echo "<h3 class='success'>Upload Image Successfully..</h3>";
            }else{
                echo "<h3 class='error'>Image Not Uploaded !!</h3>";
            }
        }
    }
?>
    <div class="myform">
        <form action="" method="post" enctype="multipart/form-data">
            <table>
                <tr>
                    <td>Select Image</td>
                    <td><input type="file" name="image"/></td>
                </tr>
                <tr>
   
                    <td colspan="2"><input class="btn1" type="submit" name="submit" value="Upload"/></td>
                </tr>
            </table>
        </form>
    </div>

<?php
    $getImg = $db->getImage();
    if($getImg){
        while ($result = $getImg->fetch_assoc()){
?>
    <div class="up_img">
        <img src="<?php echo $result['image']?>" alt="">
    </div>

<?php } } ?>
    

<?php include 'inc/footer.php';?>