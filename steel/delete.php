<?php
include("connection.php");
$id =  $_GET['id'];

$query = "delete from jobsid where jobid = '$id' ";
$data = mysqli_query($conn,$query);

if($data){
    echo "Record deleted";
    ?>
     <meta http-equiv = "refresh" content = "0; url = http://localhost/steel/index.php"/>
    <?php
}else{
    echo "Failed not deleted";
}
?>