<?php
include "connection.php";
if(isset($_POST['sumbit'])){
    $admin=$_POST['admin'];
    $password=$_POST['password'];

    if($admin!="" AND $password!="");
    {
        $sql="SELECT *FROM admin1 WhERE (admin='".$admin."' AND  password='".$password."')";
        $query=mysqli_query($con,$sql);
        $n=mysqli_num_rows($query);
        if($n==1){
            // echo "login success";
            header('location:adminafter.php');
            
        }
        else
        {
            
            echo ' <div class="alert alert-danger" role="alert">
            <strong>Failed</strong> You data is incorrect please try again.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>';
        }
    }



}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
    <link rel="stylesheet" href="newaccount.css" />
    <title>Login Page</title>
</head>

<body>
    <!-- main section -->
    <main class="hero d-flex">
        <!-- left section -->
        <div class="left-section">
            <div class="leftsection" style="margin-top: 50px; margin-left: 50px; width: 500px">
                <img src="./favicon.png" alt=""  class="" style="height: 300px; width: 400px; margin-top: 130px;" />
            </div>
        </div>
                <!-- right section -->
        <div class="right-section" style="width: 500px; margin-left: 10%; margin-top: 140px">
            <form action="" method="POST">
                <div class="container bg-light" style="border-radius: 10px">
                    <h1 class="text-center mb-5" style="padding-top: 20px; color: #003366" id="login" required>
                        Admin panel
                    </h1>
                    <!-- First Row  phone -->
                    <div class="row d-flex justify-content-center">
                        <div class="col-6 w-100">
                            <div class="form-group name">
                                <label for="file" style="cursor: pointer">Admin Name:</label>
                                <input class="form-control" type="tel" placeholder="Enter Your Phone No."
                                    name="admin" required />
                            </div>
                        </div>
                    </div>
                    <!--  password -->
                    <div class="row d-flex justify-content-center">
                        <div class="col-6 w-100">
                            <div class="form-group name">
                                <label for="file" style="cursor: pointer">Password:</label>
                                <input class="form-control" type="password" placeholder="Enter Your Password"
                                    name="password" />
                            </div>
                        </div>
                    </div>
                        <!-- log in button -->
                    <div class="d-flex justify-content-center">
                        <button class="btn btn-primary mt-3 mb-4" id="submit" name="sumbit">
                            Log in
                        </button>
                    </div>

                    <!-- dont have account -->
                    <!-- <div class="d-flex justify-content-center ">
                        <p>Don't have a Account</p>
                      </div> -->

                      <!-- button of register -->
                      <!-- <div class="d-flex justify-content-center">
                        <button class="btn btn-primary mt-1 mb-4" id="register2" name="sumbit">
                            <a href="Newaccount.php" class="text-decoration-none text-light">Register</a>
                        </button> -->
                    </div>
                </div>
            </form>

        </div>
    </main>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>

</html>