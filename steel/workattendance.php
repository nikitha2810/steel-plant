<?php include("connection.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css\style.css">
    <title>ATTENDANCE</title>
    
    <style>
        .requir::after{
            content:"*";
            color:rgb(255,0,0);
        }   
    </style>
</head>
<body>
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
   <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

   <script type="text/javascript">
         $(document).ready(function() {
    // When the Job ID dropdown changes
    $("#jobid").change(function() {
        var jobid = $(this).val();
        
        // Make an AJAX request to fetch Aadhar IDs based on the selected Job ID
        $.ajax({
            url: "ajax.php", // Replace with the actual PHP script to fetch Aadhar IDs
            method: "POST",
            data: { jobid: jobid },
            dataType: "html",
            success: function(data) {
                $("#adid").html(data); // Populate Aadhar ID dropdown
            }
        });
    });

 
    $("#adid").change(function() {
        var add = $(this).val();
        // $("#jobid").change(function() {
        // var add = $(this).val();


         $.ajax({
            url: "ajax.php", // Replace with the actual PHP script to fetch First Names
            method: "POST",
            data: { jd: add},
            dataType: "html",
            success: function(data) {
                $("#fname").html(data); // Populate First Name dropdown
            }
        });
    });

    $("#adid").change(function() {
        var addi = $(this).val();

         $.ajax({
            url: "ajax.php", // Replace with the actual PHP script to fetch First Names
            method: "POST",
            data: { addi: addi},
            dataType: "html",
            success: function(data) {
                $("#skill").html(data); // Populate First Name dropdown
            }
        });
    });


        
});



    </script>


</head>
<body>

<div class="stick">
   <img src="photos\sticklogo.png" height="100px" width="1500px">
   </div>
   
   <div class="navbar">
       <a href="http://localhost/steel/rinl.php">BACK</a>
       <a href="http://localhost/steel/login.php">LOG OUT</a>
   </div> <br>
   
    <div class="container">
        <form action="#" method="POST">
        <div class="title">ATTENDANCE</div> <br> 
        <div class="form">
        <div class="input_field">
                <label class="requir">Job ID</label>
                <select  name="jobid" class="input" id="jobid" required >
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
                <label class="requir">Aadhar ID</label>
                <select  name="adid" class="input" id="adid" required >
                    <option selected="selected">Select</option>
                    <option selected="selected">Select</option>
                </select>
            </div>
            
            <div class="input_field">
                <label class="requir">First Name</label>
                <select name="fname" class="input" id="fname" required >
                    <option selected="selected">Select</option>
                    <option selected="selected">Select</option>
                </select>
            </div>


            <div class="input_field">
                <label class="requir">Year</label>
                <input type="year" class="input" name="year" required>
            </div>
            
            <div class="input_field">
                <label class="requir">Month</label>
                <select  type="text"  class="input"  name="month" required>
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
                <label class="requir">SkillType</label>
                <select  type="text"  class="input"  name="skilltype" id ="skill" required>
                    <option>Select</option>
                    <option>Skilled</option>
                    <option>Semiskilled</option>
                    <option>Supervisor</option>
                    <option>Unskilled</option>
                </select>
            </div>

            
            
                  
            <div class="input_field">
                <label class="requir">Present Days</label>
                <input type="text" class="input" name="prd" required>
            </div>
            
            <div class="input_field">
                <label class="requir">Weekly Offs</label>
                <input type="text" class="input" name="wo" required>
            </div>
            
            <div class="input_field">
                <label class="requir">Holidays</label>
                <input type="text" class="input" name="hol" required>
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
        $jobid=$_POST['jobid'];
        $adid=$_POST['adid'];
        $fname=$_POST['fname'];
        $year=$_POST['year'];
        $month=$_POST['month'];
        $skilltype=$_POST['skilltype'];
        $prd=$_POST['prd'];
        $wo=$_POST['wo'];
        $hol=$_POST['hol'];

       

     
            $query= "insert into att values('$jobid','$adid','$fname','$year','$month','$skilltype','$prd','$wo','$hol')";
            $data= mysqli_query($conn,$query);
            if($data){
                echo "<script>alert('Sucessfully Submitted')</script>";
                ?>
                <meta http-equiv = "refresh" content = "0; url = http://localhost/steel/workattendance.php" />
                <?php 
               
            }
            else{
                echo "Failed";
            }
}
?>


</center>
<script>
    function checkdelete(){
        return confirm('Are you sure you want to delete this record ?');
        }
</script>
