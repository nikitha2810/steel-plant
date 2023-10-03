<?php include("connection.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css\style.css">
    <title>WAGE DETAILS FORM</title>
    <style>
        .requir::after{
            content:"*";
            color:rgb(255,0,0);
        }   
    </style>
    <style>
            
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
    <div class="container">
        <form action="#" method="POST">
        <div class="title">WAGE MASTER</div>
        <div class="form">
            <div class="input_field">
                <label class="requir">Year</label>
                <input type="year" class="input" name="year" placeholder='YYYY' required>
            </div>
            
            <div class="input_field">
                <label class="requir">Month</label>
                <select class="input" name="month" required>
                    <option>Select</option>
                    <option>January</option>
                    <option>February</option>
                    <option>March</option>
                    <option>April</option>
                    <option>May</option>
                    <option>June</option>
                    <option>July</option>
                    <option>August</option>
                    <option>September</option>
                    <option>October</option>
                    <option>November</option>
                    <option>December</option>
                </select>
            </div>

            <div class="input_field">
                <label class="requir">Type of skill</label>
                <select class="input" name="skilltype" required>
                    <option>Select</option>
                    <option>Skilled</option>
                    <option>Semis killed</option>
                    <option>Supervisor</option>
                    <option>Unskilled</option>
                </select>
           </div>

           <div class="input_field">
                <label class="requir">Rate</label>
                <input type="number" class="input" name="rate" required>
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
        $year=$_POST['year'];
        $month=$_POST['month'];
        $skilltype=$_POST['skilltype'];
        $rate=$_POST['rate'];
        $query="insert into wages (Year,Month,Skill,Rate) values('$year','$month','$skilltype','$rate')";
        $data= mysqli_query($conn,$query);
        if($data){
            echo "<script>alert('Data inserted into Database')</script>";
            ?>
            <meta http-equiv = "refresh" content = "0; url = http://localhost/steel/wages.php" />
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
$query="select * from wages";
$data=mysqli_query($conn,$query);
$total=mysqli_num_rows($data);



//echo $total;
if($total !=0){
    ?>
    <h2 align="center">Displaying Wage Details</h2>
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
<table>
        <tr>
            <th width="15%">Year</th>
            <th width="15%">Month</th>
            <th width="10%">Skill Type</th>
            <th width="10%">Rate</th>
            <th width="20%">Operations</th>
        </tr>  
    <?php
    while($result=mysqli_fetch_assoc($data)){
        echo "<tr>
                  <td>".$result['Year']."</td>
                  <td>".$result['Month']."</td>
                  <td>".$result['Skill']."</td>
                  <td>".$result['Rate']."</td>
                  <td><a href='wageupdate.php?id=$result[Sno]'><input type='submit' value='Update' class='update'></a>
                  <a href='wagedelete.php?id=$result[Sno]'><input type='submit' value='Delete' class='delete' onclick='return checkdelete()'></a></td>
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
