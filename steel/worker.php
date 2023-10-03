<?php include("connection.php");?>
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
            table{
                background-color: white;
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
        <a href="http://localhost/steel/rinl.php">BACK</a>
        <a href="http://localhost/steel/login.php">LOG OUT</a>
      
    </div>
    
</head>
<body> <br>
    <div class="container">
        <form action="#" method="POST">
        <div class="title">WORKER DETAILS</div> <br>
        <div class="form">
            <div class="input_field">
                <label class="requir">Aadhar ID</label>
                <input type="number" class="input" name="adid" id="aadhar" required>
            </div> 
            
            <div class="input_field">
                <label class="requir">First Name</label>
                <input type="text" class="input" name="fname" required>
            </div> 
            
            <div class="input_field">
                <label>Last Name</label>
                <input type="text" class="input" name="lname" required>
            </div> 
           
            <div class="input_field">
                <label class="requir">Job ID</label>
                <select type="number" name="jobid" class="input" id="jobid" required >
                    <option selected="selected">Select</option>
                    <?php
                          $sql=mysqli_query($conn,"select jobid from jobsid order by jobid ");
                          while($row=mysqli_fetch_array($sql)){
                             ?>
                             <option value="<?php echo $row['jobid'];?>">
                             <?php echo $row['jobid'];?></option>
                             <?php
                          }
                    ?> 
                </select>
            </div> 
            
            <div class="input_field">
                <label class="requir">Date of Birth</label>
                <input type="date" class="input" name="dob" required>
            </div> 
           
            
            <div class="input_field">
                <label >Gender:</label>
                <input type="radio" value="Male" name="gender">Male
                <input type="radio" value="Female" name="gender">Female
                <input type="radio"  value="Others" name="gender">Others
            </div> 
            
           
            <div class="input_field">
                <label class="requir">Type of skill</label>
                <select  class="input" name="skilltype" required>
                    <option>Select</option>
                    <option>Skilled</option>
                    <option>Semiskilled</option>
                    <option>Supervisor</option>
                    <option>Unskilled</option>
                </select>
            </div> 
            
            <div class="input_field">
                <label>Phone Number</label>
                <input type="text" class="input" name="phone" >
            </div> 
            
            <div class="input_field">
                <label class="requir">Address</label>
                <textarea name="address" required></textarea>
            </div> 
            
            <div class="input_field ">
                <input type="submit" value="SUBMIT" class="btn" name="submit">
            </div>
        </div>
    </form>
    </div>   
</body>
</html>

<?php
    if($_POST['submit']){
        $adid=$_POST['adid'];
        $fname=$_POST['fname'];
        $lname=$_POST['lname'];
        $jobid=$_POST['jobid'];
        $dob=$_POST['dob'];
        $gender=$_POST['gender'];
        $skilltype=$_POST['skilltype'];
        $phone=$_POST['phone'];
        $address=$_POST['address'];


        // if($adid !="" && $fname !="" && $lname !="" && $jobid !="" && $dob !="" && $gender !="" && $skilltype !="" && $phone !="" && $address !=""){
            $query= "insert into empdet values('$adid','$fname','$lname','$jobid','$dob','$gender','$skilltype','$phone','$address')";
            $data= mysqli_query($conn,$query);
            if($data){
                echo "<script>alert('Data inserted into Database')</script>";
                ?>
                <meta http-equiv = "refresh" content = "0; url = http://localhost/steel/worker.php" />
                <?php
            }
            else{
                echo "Failed";
            }
        
    }
?>
<br>
<?php include("connection.php");
error_reporting(0);
$query="select * from empdet";
$data=mysqli_query($conn,$query);
$total=mysqli_num_rows($data);

//echo $total;
if($total !=0){
    ?>
    <h2 align="center">Displaying Worker's Details</h2>
    <br>
    <style>
    table {
  border-collapse: collapse;
  width: 85%;
 
  margin-left: auto;
  margin-right: auto;
}

th, td {
  text-align: center;
  padding: 9px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
  background-color: #42855B;
  color: white;
}
</style>
<table width="80%">
        <tr>
            <th width="8%">AadharID</th>
            <th width="10%">FirstName</th>
            <th width="10%">LastName</th>
            <th width="7%">JobID</th>
            <th width="8%">dateofBirth</th>
            <th width="5%">Gender</th>
            <th width="7%">SkillType</th>
            <th width="5%">PhoneNumber</th>
            <th width="20%">Address</th>
            <th width="15%">Operations</th>

        </tr>  
    <?php
    while($result=mysqli_fetch_assoc($data)){
        echo "<tr>
                  <td>".$result['AadharID']."</td>
                  <td>".$result['FirstName']."</td>
                  <td>".$result['LastName']."</td>
                  <td>".$result['JobID']."</td>
                  <td>".$result['DateofBirth']."</td>
                  <td>".$result['Gender']."</td>
                  <td>".$result['SkillType']."</td>
                  <td>".$result['PhoneNumber']."</td>
                  <td>".$result['Address']."</td>
                  <td><a href='empupdate.php?id=$result[AadharID]'><input type='submit' value='Update' class='update'></a>
              
                  <a href='empdelete.php?id=$result[AadharID]'><input type='submit' value='Delete' class='delete' onclick='return checkdelete()'></a></td>
              </tr>"
              ;
    }
}
else{
    echo "No records found";
}
?>
</table>
</center>
<script>
    function checkdelete(){
        return confirm('Are you sure you want to delete this record ?');
        }
</script>
