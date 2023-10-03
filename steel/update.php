<?php include("indexx.php");

$id =  $_GET['id'];
 
$query= "SELECT * FROM jobsid where jobid = '$id' ";
$data=mysqli_query($conn,$query);
$total=mysqli_num_rows($data);
$result=mysqli_fetch_assoc($data);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UPDATE </title>
    <link rel="stylesheet" type="text/css" href="css\style.css">
</head>
<div class = "center" >
<style>
        .requir::after{
            content:"*";
            color:rgb(255,0,0);
        }  
        .update,.delete{
                background-color:green;
                color:white;
                border:0;
                outline:none;
                border-radius:3px;
                height:22px;
                width:80px;
                font-weight:bold;
                cursor:pointer;
            }
            .delete{
                background-color:red;
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
   
</head>
<body>

<div class="stick">
    <img src="photos\sticklogo.png" height="100px" width="1500px">
    </div>
    
    <div class="navbar">
        <a href="http://localhost/steel/rinl.php">GO HOME</a>
        <a href="http://localhost/steel/login.php">LOG OUT</a>
      
    </div>
    
    <form action="#" method="POST">
        <div class="title">UPDATE DETAILS</div> <br>
        <div class="form">
        <div class="input_field">
                <label class="requir">Job ID</label>
                <input type="number" class="input" name="jid" id="jid" value = "<?php echo $result['jobid']; ?>" required>
            </div> <br>
            
            <div class="input_field">
                <label class="requir">Agency Name</label>
                <input type="text" class="input" name="aname" value = "<?php echo $result['agency']; ?>" required>
            </div>  <br>
            
            <div class="input_field">
                <label class="requir">Start Date</label>
                <input type="date" class="input" name="sdt" id="sdt" value = "<?php echo $result['sdate']; ?>" required>
            </div>  <br>

            <div class="input_field">
                <label class="requir">End Date</label>
                <input type="date" class="input" name="edt" id="edt" value = "<?php echo $result['edate']; ?>" required>
            </div>  <br>
            
            <div class="input_field ">
                <input type="submit" value="SUBMIT" class="btn" name="submit">
            </div>

        </div>
    </form>

</div>
<body>
</body>
</html>

<?php

if($_POST['submit']) {
    $jobid = $_POST['jid'];
    $aname = $_POST['aname'];
    $sdate = $_POST['sdt'];
    $edate = $_POST['edt'];
    
    $query = "update jobsid set jobid='$jobid',agency ='$aname',sdate='$sdate',edate ='$edate' where jobid = '$id'";
    $data = mysqli_query($conn,$query);
    if($data) {
      echo "<script> alert('Record Updated')</script>";
    ?>
     <meta http-equiv = "refresh" content = "0; url = http://localhost/steel/index.php"/>
    <?php
      
    } else{
      echo "<script> alert('Failed to Updated')</script>";
    }
 }   
?>

