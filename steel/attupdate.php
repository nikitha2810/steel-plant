<?php include("connection.php");
$id=$_GET['id'];
$query="select * from att where aadhar='$id'";
$data=mysqli_query($conn,$query);
$total=mysqli_num_rows($data);
$result=mysqli_fetch_assoc($data);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css\style.css">
    <title>UPDATE ATTENDANCE</title>
    <style>
        .requir::after{
            content:"*";
            color:rgb(255,0,0);
        }   
    </style>
    <style>
       
       .navbar {
           background-color: #42855B;
           overflow: hidden;
           height: 45px;
           padding-top: 0px;
           margin-top: 0px;
           position: "fixed";
         
       }
        .delete{
                background-color:red;
            }
       
       .navbar a {
           float: left;
           display: block;
           color: white;
           text-align: center;
           padding: 14px 25px;
           text-decoration: none;
        
       }

       .stick{
           position: "fixed";
       }
       
      
       .navbar a:hover {
           background-color: #6C9BCF;
           color: black;
       }
   </style>
</head>
<body>
<div class="stick">
   <img src="sticklogo.png" height="100px" width="1500px">
   </div>
   
   <div class="navbar">
       <a href="http://localhost/steel/rinl.php">BACK</a>
       <a href="http://localhost/steel/login.php">LOG OUT</a>
   </div> <br>
<div class="container">
<form action="#" method="POST">
   <div class="title">UPDATE ATTENDANCE</div> <br>
        <div class="form">
        <div class="input_field">
        <label class="requir">Job ID:</label>
                <input type="text" value="<?php echo $result['job']; ?>" name="jobid" class="input" required >
                  
            </div> 
           
            <div class="input_field"> 
        <label class="requir">Aadhar ID:</label>
        <input type="text" value="<?php echo $result['aadhar']; ?>" name="adid" class="input" required >
                   
         </div>
            <div class="input_field">
                <label class="requir">First Name:</label>
                <input type="text" value="<?php echo $result['fname']; ?>" class="input" name="fname" required>
            </div> 

            <div class="input_field">
                <label class="requir">SKILL TYPE: </label>
                <select class="input" name="skill" id="workerType" required>
                    <option>Select</option>
                    <option value="1">SKILLED</option>
                    <option value="2">SEMI SKILLED</option>
                    <option value="3">UNSKILLED</option>
                    <option value="4">SUPERVISOR</option>
                </select>
            </div>

            <div class="input_field">
                <label class="requir">Year:</label>
                <input type="year" value="<?php echo $result['year']; ?>" class="input" name="year" required>
            </div> 
            
            <div class = "input_field" >
            <label>Month: </label>
            <select class="input" name="month" required>
                    <option>select</option>
                    <option>January
                    <?php
                                 if($result['months']=='January'){
                                    echo "selected";
                                 }
                    ?>
                    </option>
                    <option>February
                    <?php
                                 if($result['months']=='February'){
                                    echo "selected";
                                 }
                    ?>
                    </option>
                    <option>March
                    <?php
                                 if($result['months']=='March'){
                                    echo "selected";
                                 }
                    ?>
                    </option>
                    <option>April
                    <?php
                                 if($result['months']=='April'){
                                    echo "selected";
                                 }
                    ?>
                    </option>
                    <option>May
                    <?php
                                 if($result['months']=='May'){
                                    echo "selected";
                                 }
                    ?>
                    </option>
                    <option>June
                    <?php
                                 if($result['months']=='June'){
                                    echo "selected";
                                 }
                    ?>
                    </option>
                    <option>July
                    <?php
                                 if($result['months']=='July'){
                                    echo "selected";
                                 }
                    ?>
                    </option>
                    <option>August
                    <?php
                                 if($result['months']=='August'){
                                    echo "selected";
                                 }
                    ?>
                    </option>
                    <option>September
                    <?php
                                 if($result['months']=='September'){
                                    echo "selected";
                                 }
                    ?>
                    </option>
                    <option>October
                    <?php
                                 if($result['months']=='October'){
                                    echo "selected";
                                 }
                    ?>
                    </option>
                    <option>November
                    <?php
                                 if($result['months']=='November'){
                                    echo "selected";
                                 }
                    ?>
                    </option>
                    <option>December
                    <?php
                                 if($result['months']=='December'){
                                    echo "selected";
                                 }
                    ?>
                    </option>
                </select>
            </div> 


            <div class="input_field">
                <label class="requir">Present Days:</label>
                <input type="number" value = "<?php echo $result['pdays']; ?>" class="input" name="pdays" required>
            </div> 
            <div class="input_field">
                <label class="requir">Weekly off:</label>
                <input type="number" value = "<?php echo $result['wdays']; ?>" class="input" name="wdays" required>
            </div> 
            <div class="input_field">
                <label class="requir">Holidays:</label>
                <input type="number" value = "<?php echo $result['hdays']; ?>" class="input" name="hdays" required>
            </div> 

            <div class="input_field ">
            <input type="submit" value="SUBMIT" class="btn"   name="submit"  >
            </div>
    </form>
    </div>
</body>
</html>

<?php
    if($_POST['submit']){
      $jobid=$_POST['jobid'];
        $adid=$_POST['adid'];
        $fname=$_POST['fname'];
        $skill= $_POST['skill'];
       $year=$_POST['year'];
        $month=$_POST['month'];
        $pdays=$_POST['pdays'];
        $wdays=$_POST['wdays'];
        $hdays=$_POST['hdays'];
        


        
        $query = "update att set aadhar = '$adid',job = '$jobid', fname='$fname', skill='$skill', year ='$year',months = '$month',pdays='$pdays', wdays='$wdays', hdays='$hdays' where aadhar = '$id' ";
        $data = mysqli_query($conn,$query);
        if($data) {
          echo  "<script> alert('Updated Successfully')</script>";
          ?>
          <meta http-equiv = "refresh" content = "0; url = http://localhost/steel/workattendance.php" />
          <?php
          
        } else{
          echo "<script> alert('Failed to Update')</script>";
        }
       
    }
?>