<html>
<head>
    <title>Signup</title>
</head>
<body>
        <form class="" action="validate.php" method="post" autocomplete="off">
        
        <table border="0" align="center">
            <h3 align="center">Create Your Accout Here</h3>
                
            <tr>
            <td>
                <p>First Name</p>
                    <input type="text" name="fname" id="fname" required values=""/>
                    <br>
                <p>Last Name: </p>
                    <input type="text" name="lname" id="lname" required value=""></td>
            </tr>
            <tr>
                <td>
                <br><label for="dob">Date of Birth:</label><br>
                </td>
            </tr>
            <tr>
                <td>
                <select name="day" id="day">
                        <option value="">Day</option>
                        <?php
                            for ($i = 1; $i <= 31; $i++) {
                            echo "<option value='$i'>$i</option>";
                            }
                        ?>
                    </select>
                    <select name="month" id="month">
                        <option value="">Month</option>
                        <?php
                            $months = array(
                            "January", "February", "March", "April", "May", "June", "July",
                            "August", "September", "October", "November", "December");

                            foreach ($months as $index => $month) {
                                $value = $index + 1;
                                echo "<option value='$value'>$month</option>";
                            }
                        ?>

                    </select>
                    <select name="year" id="year">
                        <option value="">Year</option>
                        <?php
                            $currentYear = date("Y");
                            $startYear = $currentYear - 10; 
                            for ($i = $currentYear; $i >= $startYear; $i--) {
                            echo "<option value='$i'>$i</option>";
                            }
                        ?>
                    </select>
                    <br><br>
                </td>
            </tr>
            <tr>
                <td>
                <label>Gender:</label>
                    <input type="checkbox" id="male" name="gender[]" value="Male">
                    <label for="male">Male</label>
                    <input type="checkbox" id="female" name="gender[]" value="Female">
                    <label for="female">Female</label>
                    <input type="checkbox" id="other" name="gender[]" value="Other">
                    <label for="other">Other</label><br><br> 
                </td>
            </tr>   
            <tr>
            <td>
            <p>Phone Number</p>
            <input type="number" name="pnumber" id="pnumber"><br>
            <p>Email:</p>
            <input type="text" name="email" id="email" required value="">
            <p>Password: </p>    
            <input type="password" name="password" id="password" required value="">
            <p>Confirm Password: </p>
            <input type="password" name="confirmpassword" id="connfirmpassword" required value=""> </td>
            </tr>
            <tr>
                <td colspan="2"><input type="checkbox" name="check[]" value="" required/> I have read the <a href="term.php" >Terms & Conditions </a><br><br></td>
            </tr>
            <tr>
                <td colspan="2" align="center"><button type="submit" name="submit">Sign Up</button><br><br> </td>
            </tr>
            <tr>
                <td colspan="2">Already have an Accout? Click here to <a href="login.php" >Sign in </a><br><br></td>
            </tr>
    </table>
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



 
function validateName($name) {
    // Rule i: Cannot be empty
    if (empty($name)) {
        return false;
    }
 
    // Rule ii: Contains at least two words
    $words = explode(' ', $name);
    if (count($words) < 2) {
        return false;
    }
 
    // Rule iii: Can contain a-z or A-Z or dot(.) or dash(-)
    $allowedChars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ.-';
    foreach (str_split($name) as $char) {
        if (strpos($allowedChars, $char) === false) {
            return false;
        }
    }
 
    // Rule iv: Must start with a letter
    $firstChar = $name[0];
    if (!ctype_alpha($firstChar)) {
        return false;
    }
 
    // All rules passed
    return true;
}
 
// Test the function
$name = "John Doe"; // Example name
if (validateName($name)) {
    echo "Name is valid.";
} else {
    echo "Name is not valid.";
}
