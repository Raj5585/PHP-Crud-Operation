<!-- <nav>
  <div>
    <a class='navbar-brand' href='/web-assignment/index.php'>Home Page</a>
  </div>
  <div class='actual-links'>
  <ul>
    <li>
      <a class='link1' href='/web-assignment/login.php'>Login</a>
    </li>
    <li>
      <a class='link1' href='/web-assignment/signup.php'>Sign up</a>
    </li>
  </ul>
  </div>
</nav> -->

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    require 'partials/_dbconnect.php';

    $username = $_POST["username"];
    $password = $_POST["password"];

        $sql = "select * from usersnp where username = '$username' AND password= '$password'";
        $result = mysqli_query($conn, $sql);

        // if ($result === false) {
        //     echo "Query error: " . mysqli_error($conn);
        //     exit(); // Terminate script execution
        // }

        $num = mysqli_num_rows($result);

        if ($num == 1){
            echo '<form action="dashboard.php" method="get">
                  <button type="submit" class="btn btn-primary">Go to Company records</button>
              </form>';
        echo '<form action="board.php" method="get">
                  <button type="submit" class="btn btn-secondary">Go to Employee Records</button>
              </form>';
        }
        else{
            echo "user cant log in";
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
  <title>Document</title>

  <script>
        function validateLoginForm() {
            var username = document.getElementById("username").value;
            var password = document.getElementById("password").value;
            var warningDiv1 = document.getElementById("warning1");
            var warningDiv2 = document.getElementById("warning2");
            
            if (username === "" || password === ""){
                warningDiv1.innerHTML = "Username cannot be empty"; 
                warningDiv2.innerHTML = "Password cannot be empty"; 
                return false;
            }

            if (username === "") {
                // alert("All fields are required.");
                warningDiv1.innerHTML = "Username cannot be empty"; 
                return false;
            }
            
            if (password === "") {
                warningDiv2.innerHTML = "Password cannot be empty"; 
                return false;
            }
            return true;
}
    </script>
</head>


<body>   


  <div class="login-page-container container" style='margin-top: 100px'>
    <div class="logo-moto ">
      <div >
       
    <div class="login"> 

    
      <div class="col m-auto">
        <div class="card card-body login-container  ">
        <a class='navbar-brand' href='_nav.php'>Home Page</a>
    
          
        <form action="_nav.php" method="POST" onsubmit="return validateLoginForm()">
            <div class="form-group ">
              <label for="username" class="label"></label>
              <input type="text" name="username" id="username" placeholder="Username" class="form-control username-form" />

              <label for="password" class="label"></label>
              <input type="password" name="password" id="password" placeholder="Enter password" class="form-control password-form" />

            </div>
            <button type="submit" id="butn" class="login-btn btn btn-primary" style='margin-bottom: 10px'>
            <a href='_nav.php' style='color: white'>Login</a>
            </button>
          </form>


          <div class="create-new ">
            <a style="text-decoration: none;" href='/php-crud/signup.php'><button id="butn" class=" btn btn-primary"
                type="button" >Create new account</button></a>
          </div>

       
      
    </div>
  </div>

</body>
</html>