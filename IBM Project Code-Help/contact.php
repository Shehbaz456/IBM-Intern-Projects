<?php
include 'connect.php';
if ($_SERVER['REQUEST_METHOD'] =='POST') {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $mobile = $_POST['mobileno'];
  $Emsubject = $_POST['Emsubject'];
  $message = $_POST['message'];
  $sql = "INSERT INTO `codehelpcontact` (`Name`, `Email`, `Mobile no`, `Email subject`, `Message`) VALUES ('$name', '$email', '$mobile', '$Emsubject', '$message');";
  $result = mysqli_query($conn,$sql);
  if ($result) {
      header("location: index.html");
  }
  else {
      echo "not insert";
  }
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="contact.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Document</title>
    <style>
      
@media (max-width: 768px) {
    .contact {
    width: 96vw;
    }
    .contact form .input-box input {
    width: 100%;
    }
    .big-footer-container {
    text-align: center;
    flex-direction: column;
    }
    .content-section {
    padding: 0 0;
    text-align: center;
    line-height: 1.3;
    }
    .contact form .btn {
    width: 100%;
    }
    .main-footer {
    padding: 0;
    }
    .big-footer-container {
        flex-direction: column;
    }
}    

/* BreakPoint */
@media (max-width: 991px) {
.contact {
width: 96vw;
}
}
    </style>
  </head>
  <body>
    <!-- Header Section -->
    <div class="header-section flex">
      <div class="content-section flex">
        <h1>Get In Touch</h1>
        <p>The Ultimate Guide To Ace SDE Interviews.</p>
      </div>
    </div>

    <!-- take-info-section -->

    <div class="take-info-section  flex">

        <!-- 1-inside -->
      <section class="contact" id="contact">
        <div class="content-section flex">
            <h2 class="heading">Send us a message</h2>
        </div>
        <form action="/code-help/contact.php" method="POST">
          <div class="input-box flex">
            <input type="name" placeholder="Full Name" name="name"/>
            <input type="email" placeholder="Email Address" name="email"/>
          </div>
          <div class="input-box flex">
            <input type="number" placeholder="Mobile Number" name="mobileno"/>
            <input type="text" placeholder="Email Subject" name="Emsubject"/>
          </div>
          <textarea cols="20" rows="3" placeholder="Your Messege" name="message"
          ></textarea>
          <button type="submit"
            class="btn"
            id="submit-btn">
            Send Messeg
          </button>
        </form>        
      </section>
      </div>
    </div>
  </body>
</html>
