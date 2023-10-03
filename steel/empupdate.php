<?php include("connection.php");
$id=$_GET['id'];
$query="select * from empdet where AadharID='$id'";
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
    <title>WORKER DETAILS FORM</title>
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
    <div class="container">
        <form action="#" method="POST">
        <div class="title">UPDATE WORKER DETAILS</div> <br> <br>
        <div class="form">
        <div class="input_field">
                <label class="requir">Aadhar ID</label>
                <input type="text" value="<?php echo $result['AadharID']; ?>" class="input" name="adid" required>
            </div> <br>
            
            <div class="input_field">
                <label class="requir">First Name</label>
                <input type="text" value="<?php echo $result['FirstName']; ?>" class="input" name="fname" required>
            </div> <br>
            
            <div class="input_field">
                <label>Last Name</label>
                <input type="text" value="<?php echo $result['LastName']; ?>" class="input" name="lname" required>
            </div> <br>
           
            <div class="input_field">
                <label class="requir">Job ID</label>
                <input type="text" value="<?php echo $result['JobID']; ?>" class="input" name="jobid" required>
            </div> <br>
            
            <div class="input_field">
                <label class="requir">Date of Birth</label>
                <input type="date" value="<?php echo $result['DateofBirth']; ?>" class="input" name="dob" required>
            </div> <br>
            
            <div class="input_field">
                <label>Gender</label>
                <input type="radio" value="Male" name="gender"
                <?php
                                 if($result['Gender']=='Male'){
                                    echo "checked";
                                 }
                    ?>
                >Male
                <input type="radio" value="Female" name="gender"
                <?php
                                 if($result['Gender']=='Female'){
                                    echo "checked";
                                 }
                    ?>
                >Female
                <input type="radio" value="Others" name="gender"
                <?php
                                 if($result['Gender']=='Others'){
                                    echo "checked";
                                 }
                    ?>
                >Others
            </br>
            </br>
            <div class="input_field">
                <label class="requir">Type of skill</label>
                <select class="selectbox" name="skilltype" required>
                    <option>Select</option>
                    <option <?php
                                 if($result['SkillType']=='Skilled'){
                                    echo "selected";
                                 }
                    ?>
                    >Skilled</option>
                    <option <?php
                                 if($result['SkillType']=='Semiskilled'){
                                    echo "selected";
                                 }
                    ?>
                    >Semiskilled</option>
                    <option <?php
                                 if($result['SkillType']=='Supervisor'){
                                    echo "selected";
                                 }
                    ?>
                    >Supervisor</option>
                    <option <?php
                                 if($result['SkillType']=='Unskilled'){
                                    echo "selected";
                                 }
                    ?>
                    >Unskilled</option>
                </select>
            </div>  <br>
            
            <div class="input_field">
                <label>Phone Number</label>
                <input type="text" value="<?php echo $result['PhoneNumber']; ?>" class="input" name="phone" >
            </div> <br>
            
            <div class="input_field">
                <label class="requir">Address</label>
                <textarea name="address" required><?php echo $result['Address']; ?></textarea>
            </div> <br>
            
            <div class="input_field ">
                <input type="submit" value="UPDATE" class="btn" name="update">
        </div>
    </form>
    </div>   
</body>
</html>

<?php
    if($_POST['update']){
        $adid=$_POST['adid'];
        $fname=$_POST['fname'];
        $lname=$_POST['lname'];
        $jobid=$_POST['jobid'];
        $dob=$_POST['dob'];
        $gender=$_POST['gender'];
        $skilltype=$_POST['skilltype'];
        $phone=$_POST['phone'];
        $address=$_POST['address'];


      
            
            $query= "update empdet set AadharID='$adid',FirstName='$fname',LastName='$lname',JobID='$jobid',Gender='$gender',SkillType='$skilltype',PhoneNumber='$phone',Address='$address' where AadharID='$id'";
            
            $data= mysqli_query($conn,$query);
            if($data){
                 echo "<script>alert('Record Updated')</script>";
                 ?>
                 <meta http-equiv = "refresh" content = "0; url = http://localhost/steel/worker.php" />
                 <?php
            }
            else{
                echo "Failed to Update";
            }
        
        }
?>