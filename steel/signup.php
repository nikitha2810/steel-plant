<?php include("connection.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Page</title>
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
    </style>
</head>
<body>
    <div class="container">
    <img src ="photos\logonew..jpg" alt = "rinl" height = "100px" width ="80px">
        <h2>Sign Up</h2>
       
        <form action="#" method="post">
            <div class="form-group">
                <label for="fullname">Full Name</label>
                <input type="text" id="fullname" name="fullname" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="newpassword">Password</label>
                <input type="password" id="newpassword" name="password" required>
            </div>
            <button type="submit" class="btn" name="submit">Sign Up</button>
        </form>
        <p class="signup-link">Already have an account? <a href="http://localhost/steel/login.php">Login</a></p>
    </div>
</body>
</html>
<?php
if(isset($_POST['submit'])){

    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
      

    $check_query = "SELECT * FROM login WHERE email = '$email'";
    $result = $conn->query($check_query);

    if ($result->num_rows > 0) {
        echo "<script>alert('Email already exists')</script>";
    }

    $sql = "INSERT INTO login (fullname, email, password) VALUES ('$fullname', '$email', '$password')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Signup Sucessful')</script>";
    } else {
        echo "<script>alert('Signup failed')</script>";
    }

}
?>