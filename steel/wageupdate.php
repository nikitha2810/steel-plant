<?php include("connection.php");?>
<?php
$id =  $_GET['id'];

$query= "SELECT * FROM wages where Sno = '$id' ";
$data=mysqli_query($conn,$query);
$total=mysqli_num_rows($data);
$result=mysqli_fetch_assoc($data);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UPDATE WAGES</title>
    <link rel="stylesheet" href="css\style.css">
    <style>
    .requir::after{
            content:"*";
            color:rgb(255,0,0);
        }   
    .navbar {
        background-color: #42855B;
        overflow: hidden;
        height: 45px;
        padding-top: 0px;
        margin-top: 0px;
        
        width: 100%;
    }

    .navbar a {
        float: left;
        display: block;
        color: white;
        text-align: center;
        padding: 14px 25px;
        text-decoration: none;
        transition: background-color 0.3s, color 0.3s;
    }

    .navbar a:hover {
        background-color: #00cc00;
        color: black;
    }
    
    
  .navbar{
  margin-top: 0px;
  width: 100%;
  }
    

        </style>
</head> <body>
<div class="stick">
    <img src="photos\sticklogo.png" height="100px" width="1500px">
    </div>
    
    <div class="navbar">
        <a href="http://localhost/steel/rinl.php">BACK</a>
        <a href="http://localhost/steel/login.php">LOG OUT</a>
      
    </div>
    <div class="container">
        <form method ="POST" action = "#">
        <div class="title">WAGE MASTER</div>
        <div class="form">
            <div class="input_field">
            <div class = "date">
                <label class="requir"> YEAR: </label>
                <input type = "year" class="input" name = "year" value = "<?php echo $result['Year']; ?>" required>
           </div> <br>
           <div class = "input_field" >
            <label class="requir">MONTH: </label>
            <select  class="input" name="month" required>
                    <option>select</option>
                    <option <?php
                                 if($result['Month']=='January'){
                                    echo "selected";
                                 }
                    ?>
                        
                    >January</option>
                    <option
                    <?php
                                 if($result['Month']=='February'){
                                    echo "selected";
                                 }
                    ?>
                    >February</option>
                    <option 
                    <?php
                                 if($result['Month']=='March'){
                                    echo "selected";
                                 }
                    ?>
                    >March</option>
                    <option
                    <?php
                                 if($result['Month']=='April'){
                                    echo "selected";
                                 }
                    ?>
                        
                    >April</option>
                    <option
                    <?php
                                 if($result['Month']=='May'){
                                    echo "selected";
                                 }
                    ?>
                        
                    >May</option>
                    <option
                    <?php
                                 if($result['Month']=='June'){
                                    echo "selected";
                                 }
                    ?>
                        >June</option>
                    <option
                    <?php
                                 if($result['Month']=='July'){
                                    echo "selected";
                                 }
                    ?>
                        >July</option>
                    <option
                    <?php
                                 if($result['Month']=='August'){
                                    echo "selected";
                                 }
                    ?>
                        >August</option>
                    <option
                    <?php
                                 if($result['Month']=='September'){
                                    echo "selected";
                                 }
                    ?>
                        >September</option>
                    <option
                    <?php
                                 if($result['Month']=='October'){
                                    echo "selected";
                                 }
                    ?>
                        >October</option>
                    <option
                    <?php
                                 if($result['Month']=='November'){
                                    echo "selected";
                                 }
                    ?>
                        >November</option>
                    <option
                    <?php
                                 if($result['Month']=='December'){
                                    echo "selected";
                                 }
                    ?>
                        >December</option>
                </select>
            </div> 
        <div class = "input_field" >
                <label class="requir"  >SKILL TYPE: </label>
                <select  class="input" name="skill" required>
                    <option>Select</option>
                    <option
                    <?php
                                 if($result['Skill']=='Skilled'){
                                    echo "selected";
                                 }
                    ?>>Skilled</option>
                    <option
                    <?php
                                 if($result['Skill']=='Semi Skilled'){
                                    echo "selected";
                                 }
                    ?>
                    >Semi Skilled</option>
                    <option
                    <?php
                                 if($result['Skill']=='Unskilled'){
                                    echo "selected";
                                 }
                    ?>
                    >Unskilled</option>
                    <option
                    <?php
                                 if($result['Skill']=='Supervisor'){
                                    echo "selected";
                                 }
                    ?>
                    >Supervisor</option>
                </select>
            </div> 
        <div class = "input_field">
                <label class="requir" >RATE: </label>
                <input  class="input" type="number" value = "<?php echo $result['Rate']; ?>" name="rate" >
        </div> 
        <div class="input_field ">
         <input type="submit" name="submit"  class="btn"  value = "update"  >
        </div> 
</body>
</html>
<?php

if($_POST['submit']) {
    $year= $_POST['year'];
    $month = $_POST['month'];
    $skill= $_POST['skill'];
    $rate = $_POST['rate'];
    // $query = "insert into wages values('$year',' $month','$skill','$rate') ";
    $query = "update wages set Year = '$year', Month='$month', Skill='$skill', Rate = '$rate' where Sno = '$id' ";
    $data = mysqli_query($conn,$query);
    if($data) {
      echo  "<script> alert('Updated Successfully')</script>";
      ?>
      <meta http-equiv = "refresh" content = "0; url = http://localhost/steel/wages.php" />
      <?php
      
    } else{
      echo "<script> alert('Failed to Update')</script>";
    }
}
?>

