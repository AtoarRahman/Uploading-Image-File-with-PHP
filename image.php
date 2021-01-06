<?php
    include 'inc/header.php';
    include "lib/Database.php";
    $db = new Database();
?>
<?php
    if(isset($_GET['del'])){
        $id = $_GET['del'];

        // Delete Image From Database
        $delImg = $db->deleteImage($id);
        if(isset($delImg)){
            echo "<h3 class='success'>Image Delete Successfully..</h3>>";
        }
        // Delete Image From Directory or Folder
        $selectImg = $db->imageSelectById($id);
        if($selectImg){
            while ($result = $selectImg->fetch_assoc()){
                $deleteImg = $result['image'];
                unlink($deleteImg);
            }
        }
    }
?>
<table width="50%">
    <tr>
        <th width="20%">SL</th>
        <th width="40%">Image</th>
        <th width="40%">Action</th>
    </tr>
    <?php
        $getImg = $db->getImageAll();
        if($getImg){
            $i = 0;
            while ($result = $getImg->fetch_assoc()){
                $i++;
    ?>
    <tr>
        <td><?php echo $i; ?></td>
        <td><img src="<?php echo $result['image']; ?>" width="50px"></td>
        <td><a href="?del=<?php echo $result['id']; ?>">Delete</a></td>
    </tr>
    <?php } } ?>
</table>

<div class="back_to"><a class="button" href="index.php">Back to Home</a></div>
<?php include 'inc/footer.php';?>
