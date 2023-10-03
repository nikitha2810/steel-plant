<?php
include("connection.php");
$id =  $_GET['id'];

$query = "delete from wages where Sno = '$id' ";
$data = mysqli_query($conn,$query);

if($data){
    echo "Record deleted";
    ?>
     <meta http-equiv = "refresh" content = "0; url = http://localhost/steel/wages.php"/>
    <?php
}else{
    echo "Failed not deleted";
}
?>
