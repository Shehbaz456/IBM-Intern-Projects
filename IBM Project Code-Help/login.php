<?php
  $login = false;
  include 'connect.php';
if ($_SERVER['REQUEST_METHOD'] =='POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM `codehelpinfo`where password='$password'";
    $result = mysqli_query($conn,$sql);
    $num = mysqli_num_rows($result);
    if ($num == 1) {
    while ($row = mysqli_fetch_assoc($result)) {
              $login = true;
              session_start();
             // $_SESSION('loggedin') = true;
             //$_SESSION('password') = $password;
              header("location: index.html");
             //echo "logged";
          }
    }
else {
    echo "not loggedin";
}
}
?>
<!Doctype html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
        <link rel="stylesheet" href="navbar.css">
        <link rel="stylesheet" href="login-style.css" >
        <script src="https://kit.fontawesome.com/451b2ec1a8.js" crossorigin="anonymous"></script>
    </head>
    <body>
              <!-- Start Navbar Section -->
  <header class="sec-nav">
    <nav>
      <div>
        <a href="index.html">
          <svg width="171" height="46" viewBox="0 0 201 46" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path
              d="M77.988 32.36C76.26 32.36 74.78 31.984 73.548 31.232C72.316 30.472 71.368 29.416 70.704 28.064C70.048 26.712 69.72 25.144 69.72 23.36C69.72 21.576 70.048 20.008 70.704 18.656C71.368 17.304 72.316 16.252 73.548 15.5C74.78 14.74 76.26 14.36 77.988 14.36C79.98 14.36 81.64 14.86 82.968 15.86C84.296 16.852 85.228 18.192 85.764 19.88L82.848 20.684C82.512 19.556 81.94 18.676 81.132 18.044C80.324 17.404 79.276 17.084 77.988 17.084C76.828 17.084 75.86 17.344 75.084 17.864C74.316 18.384 73.736 19.116 73.344 20.06C72.96 20.996 72.764 22.096 72.756 23.36C72.756 24.624 72.948 25.728 73.332 26.672C73.724 27.608 74.308 28.336 75.084 28.856C75.86 29.376 76.828 29.636 77.988 29.636C79.276 29.636 80.324 29.316 81.132 28.676C81.94 28.036 82.512 27.156 82.848 26.036L85.764 26.84C85.228 28.528 84.296 29.872 82.968 30.872C81.64 31.864 79.98 32.36 77.988 32.36ZM95.7068 32.36C93.9788 32.36 92.4988 31.984 91.2668 31.232C90.0348 30.472 89.0868 29.416 88.4228 28.064C87.7668 26.712 87.4388 25.144 87.4388 23.36C87.4388 21.576 87.7668 20.008 88.4228 18.656C89.0868 17.304 90.0348 16.252 91.2668 15.5C92.4988 14.74 93.9788 14.36 95.7068 14.36C97.4348 14.36 98.9148 14.74 100.147 15.5C101.387 16.252 102.335 17.304 102.991 18.656C103.655 20.008 103.987 21.576 103.987 23.36C103.987 25.144 103.655 26.712 102.991 28.064C102.335 29.416 101.387 30.472 100.147 31.232C98.9148 31.984 97.4348 32.36 95.7068 32.36ZM95.7068 29.636C96.8668 29.644 97.8308 29.388 98.5988 28.868C99.3748 28.348 99.9548 27.616 100.339 26.672C100.731 25.728 100.927 24.624 100.927 23.36C100.927 22.096 100.731 21 100.339 20.072C99.9548 19.136 99.3748 18.408 98.5988 17.888C97.8308 17.368 96.8668 17.1 95.7068 17.084C94.5468 17.076 93.5828 17.332 92.8148 17.852C92.0468 18.372 91.4668 19.104 91.0748 20.048C90.6908 20.992 90.4988 22.096 90.4988 23.36C90.4988 24.624 90.6908 25.724 91.0748 26.66C91.4588 27.588 92.0348 28.312 92.8028 28.832C93.5788 29.352 94.5468 29.62 95.7068 29.636ZM106.375 32V14.72H111.883C112.027 14.72 112.311 14.724 112.735 14.732C113.167 14.74 113.583 14.768 113.983 14.816C115.351 14.992 116.507 15.48 117.451 16.28C118.403 17.072 119.123 18.084 119.611 19.316C120.099 20.548 120.343 21.896 120.343 23.36C120.343 24.824 120.099 26.172 119.611 27.404C119.123 28.636 118.403 29.652 117.451 30.452C116.507 31.244 115.351 31.728 113.983 31.904C113.591 31.952 113.179 31.98 112.747 31.988C112.315 31.996 112.027 32 111.883 32H106.375ZM109.315 29.276H111.883C112.123 29.276 112.427 29.268 112.795 29.252C113.171 29.236 113.503 29.2 113.791 29.144C114.607 28.992 115.271 28.628 115.783 28.052C116.295 27.476 116.671 26.776 116.911 25.952C117.159 25.128 117.283 24.264 117.283 23.36C117.283 22.424 117.159 21.544 116.911 20.72C116.663 19.896 116.279 19.204 115.759 18.644C115.247 18.084 114.591 17.728 113.791 17.576C113.503 17.512 113.171 17.476 112.795 17.468C112.427 17.452 112.123 17.444 111.883 17.444H109.315V29.276ZM123.18 32V14.72H134.34V17.432H126.072V21.692H132.9V24.404H126.072V29.288H134.34V32H123.18Z"
              fill="black" />
            <path
              d="M142.024 32V14.72H145.288V21.824H153.016V14.72H156.28V32H153.016V24.872H145.288V32H142.024ZM159.649 32V14.72H170.929V17.768H162.913V21.464H169.489V24.512H162.913V28.952H170.929V32H159.649ZM174.045 32V14.72H177.309V28.952H184.749V32H174.045ZM186.789 32V14.72H194.085C194.253 14.72 194.477 14.728 194.757 14.744C195.045 14.752 195.301 14.776 195.525 14.816C196.557 14.976 197.401 15.316 198.057 15.836C198.721 16.356 199.209 17.012 199.521 17.804C199.833 18.588 199.989 19.464 199.989 20.432C199.989 21.4 199.829 22.28 199.509 23.072C199.197 23.856 198.709 24.508 198.045 25.028C197.389 25.548 196.549 25.888 195.525 26.048C195.301 26.08 195.045 26.104 194.757 26.12C194.469 26.136 194.245 26.144 194.085 26.144H190.053V32H186.789ZM190.053 23.096H193.941C194.109 23.096 194.293 23.088 194.493 23.072C194.693 23.056 194.877 23.024 195.045 22.976C195.485 22.856 195.825 22.656 196.065 22.376C196.305 22.088 196.469 21.772 196.557 21.428C196.653 21.076 196.701 20.744 196.701 20.432C196.701 20.12 196.653 19.792 196.557 19.448C196.469 19.096 196.305 18.78 196.065 18.5C195.825 18.212 195.485 18.008 195.045 17.888C194.877 17.84 194.693 17.808 194.493 17.792C194.293 17.776 194.109 17.768 193.941 17.768H190.053V23.096Z"
              fill="#6674CC" />
            <path
              d="M27.5534 24.4054C26.6132 24.7454 25.7204 25.1787 24.9336 25.8091C23.3172 27.1043 22.3367 28.7995 21.8817 30.8211C21.6483 31.8588 21.5461 32.9106 21.5656 33.9736C21.617 36.7488 23.4936 39.0823 26.1006 39.7403C26.1989 39.7652 26.296 39.7946 26.3909 39.8296C18.5047 39.276 12.1613 31.3221 14.3975 22.6306C15.527 24.0828 16.8777 25.2448 18.4416 26.1903C18.4936 26.0559 18.4433 25.9446 18.4366 25.8362C18.3378 24.3461 18.3484 22.8582 18.4718 21.3681C18.6047 19.7627 18.8487 18.1794 19.2781 16.6283C19.9704 14.1282 21.057 11.8388 22.8219 9.91826C24.0928 8.53546 25.6115 7.51758 27.3379 6.81149C27.4027 6.78495 27.473 6.77026 27.5406 6.75049C27.5445 6.88436 27.5512 7.01823 27.5512 7.15211C27.5523 12.903 27.5529 18.6545 27.5534 24.4054Z"
              fill="#6674CC" />
            <path
              d="M48.2178 12.3203C48.1949 12.9101 48.2083 13.6263 48.2619 14.3375C48.3658 15.7158 48.789 16.9833 49.5825 18.1277C50.3703 19.2642 51.4038 20.0692 52.6517 20.6137C53.1933 20.8498 53.7601 21.0018 54.3408 21.0871C54.7299 21.1441 55.0019 21.4401 54.9979 21.8112C54.9896 22.5789 55.0153 23.3471 54.9879 24.1153C54.9734 24.5107 54.7953 24.7502 54.4228 24.8457C53.5317 25.0739 52.6467 25.3111 51.8388 25.7834C50.6076 26.5041 49.669 27.4983 49.0152 28.7732C48.5864 29.6086 48.3692 30.4994 48.2402 31.4314C48.1123 32.351 48.1704 33.2667 48.1665 34.1829C48.1631 35.0144 48.1469 35.847 48.0492 36.6683C47.875 38.1274 47.3971 39.4898 46.6349 40.75C45.2491 43.0417 43.3065 44.6318 40.8006 45.5113C40.1552 45.7378 39.4857 45.8768 38.8051 45.9547C38.1842 46.0259 37.8933 45.7677 37.8916 45.1311C37.8905 44.5595 37.8916 43.9878 37.895 43.4162C37.8961 43.1733 37.9391 42.9321 38.0552 42.7237C38.2127 42.4424 38.5198 42.3842 38.7989 42.317C41.3244 41.7097 43.1256 40.2326 44.0927 37.7777C44.502 36.7389 44.6795 35.6453 44.6846 34.5241C44.6901 33.3187 44.6941 32.1127 44.7164 30.9073C44.7287 30.256 44.909 29.6284 45.0788 29.0065C45.3607 27.9733 45.8325 27.0232 46.4049 26.1228C46.9532 25.2609 47.6277 24.5135 48.3915 23.8447C48.5383 23.7165 48.6846 23.5866 48.8214 23.4482C49.1 23.1658 49.1045 22.9534 48.808 22.6726C48.3898 22.2767 47.9454 21.9101 47.5456 21.4921C46.5082 20.4081 45.7672 19.1383 45.2362 17.7391C44.8498 16.7206 44.6511 15.6615 44.6231 14.5708C44.588 13.197 44.5986 11.8204 44.5132 10.4501C44.4272 9.07293 43.981 7.80481 43.1798 6.66548C42.2099 5.28664 40.8822 4.43934 39.3266 3.91345C39.0792 3.82985 38.8196 3.76941 38.5611 3.73382C38.1328 3.67508 37.8827 3.44235 37.8481 3.01418C37.7811 2.18666 37.7699 1.35969 37.8665 0.531033C37.9195 0.0774462 38.2445 -0.0332672 38.6102 0.00796801C40.5527 0.227136 42.2987 0.949034 43.875 2.12283C45.6477 3.44348 46.8448 5.18835 47.6087 7.24729C47.9733 8.23072 48.1436 9.26273 48.1754 10.3213C48.1944 10.946 48.215 11.5702 48.219 12.3198L48.2178 12.3203Z"
              fill="#868686" />
            <path
              d="M17.1687 1.85897C17.1492 2.16512 17.1933 2.56561 17.1151 2.9661C17.0241 3.43155 16.8315 3.64902 16.3686 3.7185C15.3491 3.87215 14.435 4.30032 13.5981 4.881C12.2725 5.80003 11.3445 7.04387 10.8465 8.59216C10.5612 9.479 10.3803 10.393 10.373 11.3312C10.3652 12.4118 10.3574 13.4929 10.373 14.5735C10.3836 15.2932 10.2463 15.9902 10.0871 16.6805C9.83977 17.7486 9.39197 18.74 8.82859 19.676C8.20379 20.7136 7.41092 21.6038 6.48461 22.3743C6.41649 22.4308 6.35396 22.4941 6.29031 22.5562C5.93352 22.9042 5.95138 23.1555 6.33442 23.4764C8.04745 24.91 9.31603 26.6617 9.98941 28.8189C10.2831 29.7605 10.4367 30.7293 10.4501 31.7257C10.4674 33.0458 10.4936 34.3681 10.5589 35.6848C10.6304 37.128 11.1463 38.4476 12.0436 39.5993C12.9113 40.7133 13.9956 41.5159 15.3161 41.987C15.669 42.113 16.0314 42.2175 16.3954 42.3045C17.0297 42.4559 17.2067 42.5841 17.2413 43.2371C17.281 43.9821 17.3357 44.7351 17.1894 45.479C17.1129 45.8677 16.97 45.9964 16.5802 45.9998C15.9437 46.0055 15.3239 45.8789 14.7159 45.7044C13.5679 45.3751 12.5104 44.8554 11.531 44.1612C10.1502 43.1828 9.04579 41.9571 8.22221 40.4715C7.65604 39.4508 7.2758 38.3674 7.06586 37.2117C6.88774 36.2294 6.88607 35.2442 6.8844 34.2557C6.88272 33.3988 6.9017 32.5402 6.82074 31.6867C6.63369 29.7091 5.87656 28.0083 4.38129 26.6775C3.43153 25.8324 2.33994 25.2806 1.10039 25.0247C0.963595 24.9964 0.831823 24.9445 0.695585 24.9134C0.151188 24.7886 0.0484509 24.3553 0.0317002 23.8949C0.00489916 23.1736 -0.039211 22.4489 0.0713434 21.7298C0.132762 21.3305 0.338237 21.1175 0.732994 21.1C1.83519 21.0514 2.78328 20.5888 3.68502 20.003C4.86929 19.2337 5.71129 18.1632 6.24843 16.8607C6.52649 16.1862 6.74537 15.4852 6.83191 14.7464C6.97597 13.5184 6.89333 12.287 6.93241 11.0578C6.95977 10.2043 6.97708 9.34513 7.17251 8.51082C7.49524 7.13651 8.04354 5.85708 8.83696 4.68725C10.1686 2.72377 11.976 1.39126 14.1743 0.594796C14.8728 0.341736 15.5942 0.151941 16.348 0.118049C16.9448 0.0915003 17.1336 0.352468 17.166 0.906601C17.1827 1.19129 17.1687 1.47825 17.1687 1.85784V1.85897Z"
              fill="#868686" />
            <path
              d="M27.5519 24.4054C27.5513 18.6545 27.5508 12.9031 27.5497 7.15216C27.5497 7.01828 27.5424 6.88441 27.5391 6.75054C28.1287 6.45963 28.7691 6.32802 29.3945 6.15065C29.5525 6.10603 29.4983 6.24668 29.481 6.32293C29.3693 6.80759 29.2476 7.28999 29.141 7.77634C28.7686 9.47602 28.6128 11.1983 28.7317 12.933C28.821 14.2367 29.1008 15.5048 29.7541 16.6594C30.1745 17.4028 30.7116 18.0343 31.4877 18.4099C32.6212 18.959 33.6799 18.7579 34.6659 18.0275C35.3879 17.4932 35.8854 16.7724 36.2885 15.9771C36.3644 15.8274 36.4337 15.6743 36.5275 15.4783C37.8094 17.1802 38.628 19.0454 38.8636 21.1399C39.1009 23.2497 38.7034 25.2544 37.6665 27.1721C39.1891 27.2518 40.1797 26.3819 41.1562 25.3465C41.1562 25.8707 41.1774 26.3316 41.1523 26.7897C41.087 27.985 40.8927 29.1593 40.5264 30.3009C39.7017 32.8705 38.26 35.0238 36.2142 36.7511C34.9657 37.8052 33.5609 38.6005 32.0227 39.145C31.9903 39.1563 31.9545 39.158 31.9199 39.1642C31.8613 39.1456 31.8127 39.1546 31.7865 39.2179C31.6754 39.2704 31.562 39.3162 31.4369 39.3213C31.3884 39.31 31.3448 39.3145 31.3147 39.3614C31.0126 39.467 30.7049 39.55 30.3883 39.5958C30.3381 39.5794 30.2918 39.5783 30.256 39.6257C30.2091 39.6319 30.1617 39.6376 30.1148 39.6438C30.0489 39.6302 29.9835 39.6195 29.9361 39.6867C29.8897 39.6901 29.8428 39.6941 29.7959 39.6975C29.7284 39.6839 29.6619 39.6737 29.6167 39.7455C29.5385 39.7494 29.4609 39.7539 29.3828 39.7579C29.3118 39.7398 29.2393 39.7167 29.1907 39.8003C29.1259 39.8359 29.0561 39.8381 28.9852 39.8268C28.9852 39.8008 28.9846 39.7748 28.9841 39.7489C29.9808 39.4873 30.8691 39.0174 31.6195 38.3028C32.5894 37.3793 33.2125 36.2591 33.4342 34.9215C33.7491 33.0253 33.27 31.3504 32.0601 29.879C32.0093 29.8174 31.9573 29.7558 31.9009 29.6999C31.629 29.4282 31.4855 29.4231 31.2091 29.6948C30.9015 29.997 30.5698 30.2377 30.1304 30.3145C29.6 30.4077 29.1555 30.2303 28.7697 29.8965C28.0946 29.3124 27.7836 28.5306 27.6586 27.663C27.5084 26.6225 27.7211 25.6515 28.2158 24.7347C28.2722 24.6297 28.3565 24.511 28.2526 24.3902C28.1499 24.271 28.0198 24.297 27.8858 24.3371C27.7775 24.3693 27.6641 24.384 27.553 24.406L27.5519 24.4054Z"
              fill="#4E5DC0" />
            <path
              d="M28.9832 39.7485C28.9832 39.7745 28.9837 39.8005 28.9843 39.8265C28.733 39.8711 28.4812 39.9157 28.1602 39.8705C28.4829 39.8728 28.7297 39.7915 28.9832 39.7485Z"
              fill="#FE6536" />
            <path
              d="M29.9355 39.6864C29.9831 39.6198 30.0481 39.6305 30.1147 39.6435C30.066 39.7039 30.0055 39.7147 29.9355 39.6864Z"
              fill="#FE6536" />
            <path
              d="M29.6143 39.7457C29.6596 39.6739 29.7262 39.6841 29.794 39.6977C29.7436 39.7491 29.6876 39.7807 29.6143 39.7457Z"
              fill="#FE6536" />
            <path
              d="M29.1885 39.8004C29.2377 39.7168 29.31 39.7399 29.381 39.758C29.3245 39.8077 29.2618 39.8298 29.1885 39.8004Z"
              fill="#FE6536" />
            <path
              d="M31.7861 39.2176C31.8123 39.1538 31.8603 39.1453 31.9194 39.164C31.8826 39.2012 31.8447 39.2351 31.7861 39.2176Z"
              fill="#FE6536" />
            <path
              d="M31.3135 39.362C31.3439 39.3148 31.3878 39.3103 31.4367 39.3216C31.4086 39.3757 31.3669 39.3871 31.3135 39.362Z"
              fill="#FE6536" />
            <path
              d="M30.2559 39.6256C30.2915 39.5782 30.3378 39.5793 30.388 39.5957C30.3523 39.6437 30.3083 39.6527 30.2559 39.6256Z"
              fill="#FE6536" />
          </svg>
        </a>
      </div>
      <ul class="nav-manu">
        <li class="nav-item"><a href="about.html">About Us</a></li>
        <li class="nav-item"><a href="#Courses_section">Courses</a></li>
        <li class="nav-item"><a href="#">Labs</a></li>
        <li class="nav-item"><a href="contact.php">Contact</a></li>

        <div class="nav-btn">
          <a href="#"><button>Dashboard</button></a>
          <a href="sign.php" style="cursor: pointer;"><button>Login</button></a>
        </div>
      </ul>
      <div class="hamburger">
        <span class="bar"></span>
        <span class="bar"></span>
        <span class="bar"></span>
      </div>
    </nav>
  </header>
  <!-- End Navbar Section -->
        <div class="container1">
            <div class="form-box">
                <h1 id="title">Login</h1>
                <form action="/code-help/login.php" method="POST">
                    <div class="input-group" style="height: 183px;">
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
                    <div class="btn-field" style="justify-content: center;">
                        <button type="submit" id="signinbtn" class="disable" name="" style="background-color: rgb(95, 71, 233); color: aliceblue; " >Login</button>
                    </div>
                </form>
              <!-- <a href="index.html" style="color: rgb(170, 170, 170); padding-top: 20px; font-weight: 50; text-decoration: underline; ">Go To Home</a> --->
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
</html>