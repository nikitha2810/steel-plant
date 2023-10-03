<?php include("steel\connection.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .container {
            width: 400px;
            padding: 30px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
            text-align: center;
        }

        .container h2 {
            color: #333;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 20px;
            text-align: left;
        }

        .form-group label {
            display: block;
            font-size: 16px;
            font-weight: 600;
            margin-bottom: 5px;
            color: #555;
        }

        .form-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        .btn {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            font-size: 18px;
            cursor: pointer;
        }

        .btn:hover {
            background-color: #0056b3;
        }

        .signup-link {
            margin-top: 20px;
            font-size: 14px;
        }

        .signup-link a {
            color: #007bff;
            text-decoration: none;
            font-weight: 600;
        }
        #show-password{
            padding: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <img src ="photos\logonew..jpg" alt = "rinl" height = "100px" width ="80px">
        <h2>Login</h2>
        <form action="#" method="post">
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="text" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
              
            </div>
            <div class="show">
            <input type="checkbox" id="show-password" onclick="togglePasswordVisibility()"> Show Password
            </div> <br>
            <button type="submit" name= "submit" class="btn">Login</button>
        </form>
        <p class="http://localhost/steel/signup.php">Don't have an account? <a href="http://localhost/steel/signup.php">Sign Up</a></p>
    </div>

    <script>
        function togglePasswordVisibility() {
            var passwordInput = document.getElementById("password");
            var checkbox = document.getElementById("show-password");

            if (passwordInput.type === "password") {
                passwordInput.type = "text";
            } else {
                passwordInput.type = "password";
            }
        }
    </script>
</body>
</html>
<?php
if(isset($_POST["submit"])){
    $email = $_POST["email"];
    $password = $_POST["password"];
    $result = mysqli_query($conn, "select * from login where email = '$email' ");
    $row = mysqli_fetch_assoc($result);
    if(mysqli_num_rows($result)>0){
        if($password == $row["password"]){
            $_SESSION["login"] = true;
           
            header("Location: steel\rinl.php");
          
            // echo "<script>alert('login sucessful')</script>";  
        } 
        else{
            echo "<script>alert('Wrong Password')</script>";
        
        } }
        else{
        echo "<script>alert('No register found')</script>";
    }
}
