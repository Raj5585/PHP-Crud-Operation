<?php 

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    require 'partials/_dbconnect.php';

    $username = $_POST["username"];
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];
    $exists = false;

    if (($password == $cpassword) && $exists == false){
        $sql = "INSERT INTO `usersnp` (`name`, `password`) VALUES ('$username', '$password')";
        $result = mysqli_query($conn, $sql);

        if ($result){
            print("user created");
        }
        else{
          echo "$result";
            print("error");
        }
    }
    else{
        print("there is some error in your code");
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
    integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <title>Sign Up page</title>
</head>
<body>
  <div class="container" style='margin-top: 100px'>
  <h1 style='margin-left: 30%'>Sign up page</h1> 
        <form action="/php-crud/signup.php" method="POST">
            <div class="form-group ">
              <label for="username" class="label">Username</label>
              <input type="text" name="username" id="username" placeholder="Username" class="form-control username-form" />

              <label for="password" class="label">password</label>
              <input type="password" name="password" id="password" placeholder="Enter password" class="form-control password-form" />

              <label for="cpassword" class="label">Confirm Password</label>
              <input type="password" name="cpassword" id="cpassword" placeholder="Confirm password" class="form-control password-form" />

            </div>
            <button type="submit" id="butn" class="login-btn btn btn-primary" style='margin-bottom: 10px'>
            <a class='link1' href='/php-crud/_nav.php' style='color: white'>Sign up</a>
            </button>
          </form>


       
      
    </div>
  </div>
  </div>
</body>
</html>
