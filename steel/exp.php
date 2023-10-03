<?php
error_reporting(0);
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "responsiveform";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if($conn){
    // echo "connection sucessful";
}
else{
    echo "connection failed".mysqli_connect_error();

}


    // Step 2: Retrieve data from the database
    $sql1 = "SELECT Rate, Skill FROM wages"; // Change your_table to your actual table name
    $sql2 = "SELECT pdays FROM att where aadhar = '$ad' and months = '$mon' and year = '$yr' ";
    $result1 = $conn->query($sql1);
    $result2 = $conn->query($sql2);

    if ($result1 && $result2) {
        $row1 = $result1->fetch_assoc();
        $row2 = $result2->fetch_assoc();
    
            $value1 = $row['Rate'];
            $value2 = $row['Skill'];
            $value2 = $row['pdays'];
            




        }
     else {
        echo "No data found.";
    }