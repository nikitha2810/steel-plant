<?php include("connection.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css\style.css">

    <title>JOB DETAILS FORM</title>
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

</head>
<body>

        <form action="#" method="POST">
        <div class="title">JOB MASTER</div> <br>
        <div class="form">
        <div class="input_field">
                <label class="requir">Job ID</label>
                <input type="number" class="input" name="jid" id="jid" required>
            </div> <br>
            
            <div class="input_field">
                <label class="requir">Agency Name</label>
                <input type="text" class="input" name="aname" required>
            </div>  <br>
            
            <div class="input_field">
                <label class="requir">Start Date</label>
                <input type="date" class="input" name="sdt" id="sdt" required>
            </div>  <br>

            <div class="input_field">
                <label class="requir">End Date</label>
                <input type="date" class="input" name="edt" id="edt" required>
            </div>  <br>
            
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
        $jid=$_POST['jid'];
        $aname=$_POST['aname'];
        $sdt=$_POST['sdt'];
        $edt=$_POST['edt'];
        $query="insert into jobsid values('$jid','$aname','$sdt','$edt')";
        $data= mysqli_query($conn,$query);
        if($data){
            echo "<script>alert('Data inserted into Database')</script>";
            ?>
            <meta http-equiv = "refresh" content = "0; url = http://localhost/steel/index.php" />
            <?php
        }
        else{
            echo "Failed";
        }
    }
?>
<?php include("connection.php");
error_reporting(0);
$query="select * from jobsid";
$data=mysqli_query($conn,$query);
$total=mysqli_num_rows($data);



//echo $total;
if($total !=0){
    ?>
    <h2 align="center">Displaying Job Details</h2>
    <br>
    <style>
table {
  border-collapse: collapse;
  width: 80%;
 
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
            <th width="15%">JobId</th>
            <th width="25%">AgencyName</th>
            <th width="10%">StartDate</th>
            <th width="10%">EndDate</th>
            <th width="20%">Operations</th>

        </tr>  
    <?php
    while($result=mysqli_fetch_assoc($data)){
        echo "<tr>
                  <td>".$result['jobid']."</td>
                  <td>".$result['agency']."</td>
                  <td>".$result['sdate']."</td>
                  <td>".$result['edate']."</td>
                  <td><a href='update.php?id=$result[jobid]'><input type='submit' value='Update' class='update'></a>
              
                  <a href='delete.php?id=$result[jobid]'><input type='submit' value='Delete' class='delete' onclick='return checkdelete()'></a></td>
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






<script>
        
        const startDateInput = document.getElementById("start_date");
        const endDateInput = document.getElementById("end_date");

        
        document.querySelector("form").addEventListener("submit", function(event) {
            const startDate = new Date(startDateInput.value);
            const endDate = new Date(endDateInput.value);

            if (startDate > endDate) {
                alert("End date must be after the start date");
                event.preventDefault(); 
            }
        });
    </script>
  

