<?php
// include 'connect.php';
// if ($_SERVER['REQUEST_METHOD'] =='POST') {
//      $name = $_POST['name'];
//      $email = $_POST['email'];
//      $password = $_POST['password'];
//      $hash = password_hash($password,PASSWORD_DEFAULT);
//      $sql = "INSERT INTO `coderhelplogin` (`name`, `email`, `password`) VALUES ('$name', '$email', '$hash')";
//      $result = mysqli_query($conn,$sql);
//      if ($result) {
//          header("location: Login-page.php");
//      }
//      else {
//       echo "not";
//      }
// }
?>
<!-- <!Doctype html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
        <link rel="stylesheet" href="login-style.css" >
        <script src="https://kit.fontawesome.com/451b2ec1a8.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="container1">
            <div class="form-box">
                <h1 id="title">Sign Up</h1>
                <form action="signin-page.php" method="post">
                    <div class="input-group">
                        <div class="input-field">
                            <i class="fa-solid fa-user"></i>
                            <input type="name" placeholder="Username" name="name">
                        </div>

                        <div class="input-field" id="namefield">
                            <i class="fa-solid fa-envelope"></i>
                            <input type="email" placeholder="Email" name="email">
                        </div>

                        <div class="input-field">
                            <i class="fa-solid fa-lock"></i>
                            <input type="password" placeholder="password" name="password">
                        </div>
                        <p>Lost password <a href="#">Click Here!</a></p>
                    </div>
                    <div class="btn-field">
                        <button type="submit" id="signupbtn" name="submit">Register</button>
                    </div>
                </form>
               <a href="index.html" style="color: rgb(170, 170, 170); padding-top: 20px; font-weight: 50; text-decoration: underline; ">Go To Home</a> 
            </div>
        </div>
        <script>
            let signupbtn = document.getElementById("signupbtn");
            let signinbtn = document.getElementById("signinbtn");
            let namefield = document.getElementById("namefield");
            let title = document.getElementById("title");

            signinbtn.onclick = function(){
                namefield.style.maxHeight = "0";
                title.innerHTML = "Sign In";
                signupbtn.classList.add("disable");
                signinbtn.classList.remove("disable");
            }
            signupbtn.onclick = function(){
                namefield.style.maxHeight = "60px";
                title.innerHTML = "Sign Up";
                signupbtn.classList.remove("disable");
                signinbtn.classList.add("disable");
            }
        </script>
    </body>
</html> -->