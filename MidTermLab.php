<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration Form</title>
    <style>
        /* Add your CSS styles here */
    </style>
</head>
<body>
    <form action="#" method="post">
        <div>
            <label for="firstName">First Name:</label>
            <input type="text" id="firstName" name="firstName" required>
        </div>
        <div>
            <label for="lastName">Last Name:</label>
            <input type="text" id="lastName" name="lastName" required>
        </div>
        <div>
            <label for="dob">Date of Birth:</label>
            <select id="dob" name="dob" required>
                <option value="">-- Select DOB --</option>
                <option value="01">January</option>
                <option value="02">February</option>
                <option value="03">March</option>
                <!-- Add more options for other months -->
            </select>
        </div>
        <div>
            <label>Gender:</label>
            <input type="radio" id="male" name="gender" value="male" required>
            <label for="male">Male</label>
            <input type="radio" id="female" name="gender" value="female">
            <label for="female">Female</label>
        </div>
        <div>
            <label for="phoneNumber">Phone Number:</label>
            <input type="text" id="phoneNumber" name="phoneNumber" required>
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
        </div>
        <div>
            <label for="confirmPassword">Confirm Password:</label>
            <input type="password" id="confirmPassword" name="confirmPassword" required>
        </div>
        <div>
            <input type="submit" value="Submit">
        </div>
    </form>
</body>
</html>

<?php
require_once('db_connection.php');

function login($username, $password)
{
    $con = dbConnection();
    $sql = "select * from login where username='{$username}' and password='{$password}'";
    $result = mysqli_query($con, $sql);
    $count = mysqli_num_rows($result);

    if ($count == 1) {
        return true;
    } else {
        return false;
    }


    
if(empty($_GET['username'])|| empty($_GET['password']) ||empty($_GET['email'])|| empty($_GET['dob']))
{
   echo "Fill up the form";
}
else
{
   $username= $_GET['username'];
   $password=$_GET['password'];
   $sql="select * from ab where username='$username' and password='$password' and email='$email' and dob='$dob'";
   $res=mysqli_query($con,$sql);
   //print_r($res3);
   if($res-> num_rows>0)
   {
      echo "Valid User";
   }
   else
   {
      echo "invalid";
   }

}
}

function updateUserPass($newpassword, $email)
{
    $con = dbConnection();
    $sql = "UPDATE login SET password = '{$newpassword}' WHERE username = (SELECT username FROM user WHERE email = '{$email}')";
    $result = mysqli_query($con, $sql);
    //$count = mysqli_num_rows($result);

    if ($result) {
        return true;
    } else {
        return false;
    } 
}
function createUser($user)
{
    $con = dbConnection();
    $sql = "insert into user values('{$user['username']}','{$user['name']}','{$user['email']}', '{$user['gender']}', '{$user['dob']}')";
    $sql1 = "insert into login values('{$user['username']}','{$user['password']}')";
    if (mysqli_query($con, $sql) && mysqli_query($con, $sql1)) {
        return true;
    } else {
        return false;
    }
}








   if(empty($_GET['firstName'])|| empty($_GET['password']) )
   {
      echo "Fill up the form";
   }
   else
   {
      $firstName= $_GET['firstName'];
      $password=$_GET['password'];
      $sql="select * from ab where firstName='$firstName' and password='$password'";
      $res=mysqli_query($conn,$sql);
    
      if($res-> num_rows>0)
      {
         echo "Valid User";
      }
      else
      {
         echo "invalid";
}

}


