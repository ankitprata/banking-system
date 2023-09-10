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
  <link rel="stylesheet" href="about.css">
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
            <li class=""><a class="nav-link mt-2" href="">About</a></li>
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

  <div class="hero-section">
    <div class="container-fluid p-0">
      <div class="image">
        <img src="./About image/about5.png" width="100%" class="w-100 ">
      </div>
    </div>
  </div>

  <!-- about -->
  <div class="about">
    <div class="container-fluid d-flex bg-light">
      <div class="row">
        <div class="col-md-4" style="width: 500px; margin-left: 100px;">
          <div class="first-section  ">
            <h1 class="mt-5"><a href="about.php" class="text-decoration-none "
                style="margin-left: 135px; margin-top: 100px;">About Us</a></h1>

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

  <div class="main-content">
    <div class="container-fluid w-100 bg-light " style="height: 800px;">
      <div class="title">
        <h1 class="text-center mt-5">Our Serivices</h1>
        <p class="text-center mb-4">To provide a description of Apna Bank and its services,
          I would need more information about its offerings, <br>location, and any unique features or services it
          provides. If Apna Bank is a
          real financial institution</p>
      </div>
      <!-- first Service -->
      <div class="row d-flex gap-lg-5 " style="margin-left: 200px;">
        <!-- first div -->
        <div class="col-md-2 an bg-danger bg-gradient text-center" style="width: 400px; height:300 ;">

          <img src="./About image/service_1-removebg-preview.png" class="mb-2" style="height: 80px; width: 100px;">
          <h4 class=""> Credit Card</h4>
          <p>Sample text. Click to select the text box. </p>
          <a href="#" class="text-decoration-none text-light mb-4">Learn more</a>
        </div>

        <!-- second div -->
        <div class="col-md-2 an bg-primary bg-gradient text-center">

          <img src="./About image/loan_2-removebg-preview.png" class="mb-2" style="height: 80px; width: 150px;">
          <h4>Loan</h4>
          <p>Sample text. Click to select the text box. </p>
          <a href="#" class="text-decoration-none text-light mb-4">Learn more</a>
        </div>
        <!-- third -->
        <div class="col-md-2 an bg-danger bg-gradient text-center">
          <img src="./About image/insurance_3-removebg-preview.png" class="mb-2" style="height: 80px; width: 150px;">
          <h4>Insurance</h4>
          <p>Sample text. Click to select the text box. </p>
          <a href="#" class="text-decoration-none text-light mb-4">Learn more</a>
        </div>
        <!-- fourth -->
        <div class="col-md-2 an bg-primary bg-gradient text-center">

          <img src="./About image/loker4.png" class="mb-1" style="height: 80px; width: 150px;">
          <h4 class="mb-2">Loker</h4>
          <p class="">Sample text. Click to select the text box. </p>
          <a href="#" class="text-decoration-none text-light mb-2">Learn more</a>
        </div>
      </div>

      <!-- second -->

       <!-- Service -->
       <div class="row d-flex gap-lg-5 mt-5 " style="margin-left: 200px;">
        <!-- five div -->
        <div class="col-md-2 an bg-primary bg-gradient text-center" style="width: 400px; height:300 ;">

          <img src="./About image/5-removebg-preview.png" class="mb-2" style="height: 100px; width: 100px;">
          <h4 class=""> Digital banking</h4>
          <p>Sample text. Click to select the text box. </p>
          <a href="#" class="text-decoration-none text-light mb-4">Learn more</a>
        </div>

        <!-- six div -->
        <div class="col-md-2 an bg-danger bg-gradient text-center">

          <img src="./About image/6-removebg-preview.png" class="mb-2" style="height: 80px; width: 100px;">
          <h4>Currency Exchange</h4>
          <p>Sample text. Click to select the text box. </p>
          <a href="#" class="text-decoration-none text-light mb-4">Learn more</a>
        </div>
        <!-- seven-->
        <div class="col-md-2 an bg-primary bg-gradient text-center">
          <img src="./About image/7-removebg-preview.png" class="mb-2" style="height: 100px; width: 100px;">
          <h4>Trading</h4>
          <p>Sample text. Click to select the text box. </p>
          <a href="#" class="text-decoration-none text-light mb-4">Learn more</a>
        </div>
        <!-- eight -->
        <div class="col-md-2 an bg-danger bg-gradient text-center">

          <img src="./About image/8 mutual fund.png" class="mb-3" style="height: 100px; width: 100px;">
          <h4 class="mb-2">Mutual Fund</h4>
          <p class="">Sample text. Click to select the text box. </p>
          <a href="#" class="text-decoration-none text-light mb-2">Learn more</a>
        </div>
      </div>
    </div>

  </div>

  <?php
  include('footer.php');

  ?>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.10/typed.min.js"
    integrity="sha512-hIlMpy2enepx9maXZF1gn0hsvPLerXoLHdb095CmRY5HG3bZfN7XPBZ14g+TUDH1aGgfLyPHmY9/zuU53smuMw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="home.js"></script>
</body>



</html>