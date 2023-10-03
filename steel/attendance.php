
<?php include("connection.php");?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" >
    <link rel="stylesheet" type="text/css" href="attendance.css">
    <title>Attendance</title>
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
   <img src="photos\sticklogo.png" height="100px" width="1500px">
   </div>
   
   <div class="navbar">
       <a href="http://localhost/steel/rinl.php">GO HOME</a>
       <a href="http://localhost/steel/login.php">LOG OUT</a>
     
   </div>
   
   <div class = "container">
   <div class="card-header">
        <h4> Attendance</h4>
    </div>
<form action ="#" method ="POST">
<div class="input-group mb-3">
  <div class="input-group-prepend">
   <span class="input-group-text" id="basic-addon1">@</span>
</div>
  <select type="text" class="form-control" name="getid" placeholder="JobID" aria-label="JobID" aria-describedby="basic-addon1" >
                    <option selected="selected">JobID</option>
                    <?php
                          $sql=mysqli_query($conn,"select jobid from jobsid order by jobid");
                          while($row=mysqli_fetch_array($sql)){
                             ?>
                             <option value="<?php echo $row['jobid'];?>">
                             <?php echo $row['jobid'];?></option>
                             <?php
                          }
                    ?> 
  </select>
</div>
<div class="input-group mb-3">
  <div class="input-group-prepend">
   <span class="input-group-text" id="basic-addon1">@</span>
</div>
  <input type="text" class="form-control" name="geid" placeholder="Year" aria-label="Year" aria-describedby="basic-addon1" >
</div>
<div class="input-group mb-3">
  <div class="input-group-prepend">
   <span class="input-group-text" id="basic-addon1">@</span>
</div>
<select type="text" class="form-control" name="gid" placeholder="Month" aria-label="Month" aria-describedby="basic-addon1">
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
</div> <br>


<button type = "submit" name="submitid"> Search</button> <br> <br>
</form>
<?php
if(isset($_POST['submitid'])) {
  $id= $_POST['getid'];
  $iid= $_POST['geid'];
  $iiid= $_POST['gid'];
  $query = "select * from att where job= '$id' && year='$iid' && months='$iiid' ";

  $query_run = mysqli_query($conn,$query);
}

?>





  <center><table class="table table-hover table-dark" >
 <thead>
    <tr>
      <th scope="col">Aadhar Id</th>
      <th scope="col">Job Id</th>
      <th scope="col">First Name</th>
      <th scope="col">Year</th>
      <th scope="col">Month</th>
      <th scope="col">Present days</th>
      <th scope="col">Weekly offs</th>
      <th scope="col">Holidays</th>
      <th scope="col">salary</th>
      <th scope="col">Operations</th>
    </tr>
  </thead>
  <tbody>
    <?php
     if(mysqli_num_rows($query_run) > 0) {
     ?>
    <tr>
    <?php
    while($result=mysqli_fetch_assoc($query_run)){
        echo "<tr>
                  <td>".$result['aadhar']."</td>
                  <td>".$result['job']."</td>
                  <td>".$result['fname']."</td>
                  <td>".$result['year']."</td>
                  <td>".$result['months']."</td>
              
                  <td>".$result['pdays']."</td>
                  <td>".$result['wdays']."</td>
                  <td>".$result['hdays']."</td>
                  <td>".$result[' ']."</td>
                  <td><a href='attupdate.php?id=$result[aadhar]'><input type='submit' value='Update' class='update'></a>

                  <a href='attdelete.php?id=$result[aadhar]'><input type='submit' value='Delete' class='delete' onclick='return checkdelete()'></a></td>
              
                  
              </tr>"
              ;
    }
}


  
        
       else{
        ?>
        <tr>
        <td colspan="5">No record found</td>
      </tr>
      <?php
      }
    
  ?>
  
  
</tbody>
</table> </center>
</div>


</div>
           
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>


