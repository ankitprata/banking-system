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

    <div class="hero-section">
        <div class="container-fluid p-0">
            <div class="image">
                <img src="./Contact image/contact8.png" width="100%" class="w-100 ">
            </div>
        </div>
    </div>

    <!-- Contact -->
    <div class="Contact">
        <div class="container-fluid d-flex bg-light">
            <div class="row">
                <div class="col-md-4 mt-4 " style="width: 500px; margin-left: 100px;">
                    <div class="second-section">
                        <img src="./home image/contactus.png" class=""
                            style=" height: 400px; width: 500px; border-radius: 10px; margin-bottom: 20px;;">
                    </div>
                </div>

                <div class="col-md-4" style="width: 500px; margin-left: 300px;">
                    <div class="first-section  ">
                        <h1 class="mt-5"><a href="contact.php" class="text-decoration-none "
                                style="margin-left: 130px; padding-top: 25px;">Contact Us</a></h1>

                        <!-- <h3 class="text-center">Introduction</h3> -->
                        <p class="text-center ">At Apna Bank, we value your feedback, inquiries,
                            and the opportunity to assist you with your financial needs. We're here to
                            make it easy for you to get in touch with us..</p>
                    </div>
                </div>


            </div>
        </div>
    </div>

    <div class="container mt-5 mb-5 border border-opacity-10 shadow-lg" style="height: 700px;">
        <form action="https://getform.io/f/9c5c988b-502f-4840-b21a-59463339366e" method="post">
            <h1 class="text-center text-primary">Contact us</h1>
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" name="name" placeholder="Enter Your name" class="form-control">

            </div>
            <div class="form-group">
                <label for="">Email</label>
                <input type="Email" name="email" placeholder="Enter your Email " class="form-control">
            </div>

            <div class="form-group">
                <textarea name="textarea" id="" cols="135" rows="10" placeholder="Enter your message" class="border-primary">
             </textarea>

            </div>
            <div class="form-group">
                <input type="submit" name="email" placeholder="Enter your Email " class=" btn btn-primary" style="margin-left: 500px; width: 100px;">
            </div>
        </form>
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