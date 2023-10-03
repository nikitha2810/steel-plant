<?php
error_reporting(0);
    $servername="localhost";
    $username="root";
    $password="";
    $dbname="responsiveform";
    $conn = mysqli_connect($servername,$username,$password,$dbname);
    if(isset($_POST['jobid'])){
        $add=$_POST['jobid'];
        $query=mysqli_query($conn,"select * from empdet where JobID ='$add'");
        while($row=mysqli_fetch_array($query)){
            $jd=$row['JobID'];
            $add=$row['AadharID'];
            echo "<option value'$jd'>$add</option>";
        }
    }
    if(isset($_POST['jd'])){
        $nam=$_POST['jd'];
       
        $query=mysqli_query($conn,"select * from empdet where AadharID='$nam'  ");
        while($row=mysqli_fetch_array($query)){
            $aaad=$row['AadharID'];
           
            $fn=$row['FirstName'];
            echo "<option value'$aaad'>$fn</option>";
        }
    }
    if(isset($_POST['addi'])){
        $add=$_POST['addi'];
        $query=mysqli_query($conn,"select * from empdet where AadharID ='$add'");
        while($row=mysqli_fetch_array($query)){
            $jd=$row['AadharID'];
            $add=$row['SkillType'];
            echo "<option value'$jd'>$add</option>";
        }
    }
    


?>