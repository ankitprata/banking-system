<?php

?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bank</title>
  <link rel="icon" href="favicon.png" type="image/x-icon">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
    integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="home.css">
</head>

<body>
  <nav class="navbar-expand-lg" id="na" ;>
    <div class="container-fluid d-flex ">
      <!-- left side -->
      <div class="left-side">
        <div class="navbar-brand">
          <i class="fa-solid fa-building-columns fa-2x mt-2" style="color: white"></i><span class=""
            style="margin-left: 10px;"><b style="color: #ff8d1e;">Apana Bank</b></span>

        </div>

      </div>
      <!-- right side -->
      <div class="righr-side ">
        <div class="">
          <ul class="nav-item d-flex ">
            <li class=""><a class="nav-link mt-2" href="./home.php">Home</a></li>
            <li class=""><a class="nav-link mt-2" href="./about.php">About</a></li>
            <li class=""> <a class="nav-link mt-2" href="./contact.php">Contact</a></li>
            <select id="btnlogin" onchange="location=this.value;" name="Login" class="btn">
              <option value=""> Account Login</option>
              <option value="login.php">User Login </option>
              <option value="admin.php">Admin Login</option>
            </select>
          </ul>
        </div>
      </div>
    </div>
  </nav>

  <!-- Slideshow container -->
  <div class="slideshow-container-fluid">

    <!-- Full-width images with number and caption text -->
    <div class="mySlides ">
      <div class="numbertext"></div>
      <img src="./slider image/1.jpg" style="width:100%; height: 600px;">
      <!-- <div class="text">Caption Text</div> -->
    </div>

    <div class="mySlides ">
      <div class="numbertext"></div>
      <img src="./slider image/2.jpg" style="width:100%; height: 600px;">
      <!-- <div class="text">Caption Two</div> -->
    </div>

    <div class="mySlides ">
      <div class="numbertext"></div>
      <img src="./slider image/3.jpg" style="width:100%; height: 600px;">
      <!-- <div class="text">Caption Three</div> -->
    </div>
    <div class="mySlides ">
      <div class="numbertext"></div>
      <img src="./slider image/4.jpg" style="width:100%; height: 600px;">
      <!-- <div class="text">Caption four</div> -->
    </div>

    <div class="mySlides">
      <div class="numbertext"></div>
      <img src="./slider image/5.jpg" style="width:100%; height: 600px;">
      <!-- <div class="text">Caption five</div> -->
    </div>
    <div class="mySlides ">
      <div class="numbertext"></div>
      <img src="./slider image/6.jpg" style="width:100%; height: 600px;">
      <!-- <div class="text">Caption six</div> -->
    </div>
    <div class="mySlides ">
      <div class="numbertext"></div>
      <img src="./slider image/7.jpg" style="width:100%; height: 600px;">
      <!-- <div class="text">Caption seven</div> -->
    </div>

    <!-- Next and previous buttons -->
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>
  </div>
  <br>

  <!-- The dots/circles -->
  <div style="text-align:center">
    <span class="dot" onclick="currentSlide(1)"></span>
    <span class="dot" onclick="currentSlide(2)"></span>
    <span class="dot" onclick="currentSlide(3)"></span>
    <span class="dot" onclick="currentSlide(4)"></span>
    <span class="dot" onclick="currentSlide(5)"></span>
    <span class="dot" onclick="currentSlide(6)"></span>
    <span class="dot" onclick="currentSlide(7)"></span>
  </div>


  <div class="main-content">
    <div class="container-fluid w-100 bg-light " style="height: 450px;">
      <div class="title">
        <h1 class="text-center mt-5">Our Features</h1>
        <p class="text-center mb-4">To provide a description of Apna Bank and its services,
          I would need more information about its offerings, <br>location, and any unique features or services it
          provides. If Apna Bank is a
          real financial institution</p>
      </div>
      <!-- Service -->
      <div class="row d-flex gap-lg-5 " style="margin-left: 200px;">
        <!-- first div -->
        <div class="col-md-2 an bg-primary bg-gradient text-center" style="width: 400px; height:300 ;">

          <img src="./service image/1.png" class="mb-2" style="height: 100px; width: 100px;">
          <h4 class=""> Cash Top off</h4>
          <p>Sample text. Click to select the text box. </p>
          <a href="#" class="text-decoration-none text-light mb-4">Learn more</a>
        </div>

        <!-- second div -->
        <div class="col-md-2 an bg-primary bg-gradient text-center">

          <img src="./service image/bank.png" class="mb-2" style="height: 100px; width: 100px;">
          <h4>Top Bank</h4>
          <p>Sample text. Click to select the text box. </p>
          <a href="#" class="text-decoration-none text-light mb-4">Learn more</a>
        </div>
        <!-- third -->
        <div class="col-md-2 an bg-primary bg-gradient text-center">
          <img src="./service image/card.png" class="mb-2" style="height: 100px; width: 100px;">
          <h4>Flexy Pay</h4>
          <p>Sample text. Click to select the text box. </p>
          <a href="#" class="text-decoration-none text-light mb-4">Learn more</a>
        </div>
        <!-- fourth -->
        <div class="col-md-2 an bg-primary bg-gradient text-center">

          <img src="./service image/secrrity.png" class="mb-3" style="height: 100px; width: 100px;">
          <h4 class="mb-2">Security</h4>
          <p class="">Sample text. Click to select the text box. </p>
          <a href="#" class="text-decoration-none text-light mb-2">Learn more</a>
        </div>
      </div>
    </div>

    <!-- about -->
    <div class="about">
      <div class="container-fluid d-flex bg-light">
        <div class="row">
          <div class="col-md-4" style="width: 500px; margin-left: 100px;">
            <div class="first-section  ">
              <h1 class="mt-5"><a href="about.php" class="text-decoration-none " style="margin-left: 135px; margin-top: 100px;">About Us</a></h1>
            
              <!-- <h3 class="text-center mt-2">Introduction</h3> -->
              <p class="text-center mt-2">Welcome to Apna Bank, your trusted partner in
                financial prosperity and security. At Apna Bank, we understand the significance
                of your financial well-being and are committed to delivering exceptional
                banking solutions designed with your needs in mind.</p>
            </div>
          </div>

          <div class="col-md-4" style="width: 500px; margin-left: 300px;">
            <div class="second-section">
              <img src="./home image/about.png" class=""
                style=" height: 400px; width: 500px; border-radius: 10px; margin-bottom: 20px;">
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Contact -->
    <div class="Contact">
      <div class="container-fluid d-flex bg-light">
        <div class="row">
          <div class="col-md-4" style="width: 500px; margin-left: 100px;">
            <div class="second-section">
              <img src="./home image/contactus.png" class=""
                style=" height: 400px; width: 500px; border-radius: 10px; margin-bottom: 20px;;">
            </div>
          </div>

          <div class="col-md-4" style="width: 500px; margin-left: 300px;">
            <div class="first-section  ">
              <h1 class="mt-5"><a href="contact.php" class="text-decoration-none " style="margin-left: 130px; padding-top: 25px;">Contact Us</a></h1>
              
              <!-- <h3 class="text-center">Introduction</h3> -->
              <p class="text-center ">At Apna Bank, we value your feedback, inquiries,
                 and the opportunity to assist you with your financial needs. We're here to
                 make it easy for you to get in touch with us..</p>
            </div>
          </div>


        </div>
      </div>
    </div>


    <?php
  include "footer.php";
  ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.10/typed.min.js"
      integrity="sha512-hIlMpy2enepx9maXZF1gn0hsvPLerXoLHdb095CmRY5HG3bZfN7XPBZ14g+TUDH1aGgfLyPHmY9/zuU53smuMw=="
      crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="home.js"></script>
</body>



</html>