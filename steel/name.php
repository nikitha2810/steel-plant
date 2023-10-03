<?php
include("connection.php"); // Include your database connection file

if(isset($_POST["jobid"]) && isset($_POST["adid"])) {
    $jobid = $_POST["jobid"];
    $adid = $_POST["adid"];
    
    // Query to fetch First Names based on the selected Job ID and Aadhar ID
    $sql = "SELECT fname FROM empdet WHERE JobID = '$jobid' AND AadharID = '$adid'";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            echo '<option value="'.$row['FirstName'].'">'.$row['FirstName'].'</option>';
        }
    }
}
?>
