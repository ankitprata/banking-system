<?php
include "connection.php";

function generateAccountNumber() {
  // You can implement your logic here to generate a unique account number
  // For example, you can use a combination of date, time, and a random number
  return  rand();
}

if(isset($_POST['Register']))
{
  $name=$_POST['name'];
  $phone=$_POST['phone'];
  $email=$_POST['email'];
  $password=$_POST['password'];
  $dateofbirth=$_POST['dateofbirth'];
  $photo=$_POST['photo'];
  $adhar=$_POST['adhar'];
  $pan=$_POST['pan'];
  $gender=$_POST['gender'];
  $Account=$_POST['Account'];
  $Address=$_POST['Address'];

  // 
  $account_num = generateAccountNumber();

  $sql="INSERT INTO register (name,phone,email,password,dateofbirth,photo,adhar,pan,gender,Account,Address,account_num) VALUES ('$name','$phone', '$email','$password','$dateofbirth','$photo','$adhar','$pan','$gender','$Account','$Address','$account_num') ";
  if(mysqli_query($con,$sql))
  {
    echo "Succesfull register";
    header('location:login.php');
  }

  else 
  {
    echo "not registered";
  }
}
?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="newaccount.css">
  <title>Bank</title>
</head>

<body>
  <!-- main section -->
  <div class="main d-flex">
    <!-- left section -->
    <div class="left-side">
      <div class="leftsection" style="margin-top: 80px; margin-left: 10px; width: 500px">
        <img src="./newaccount.png" style="height: 500px; width: 700px;" alt="" />
    </div>

    </div>
      <!-- right section -->
    <div class="right-section ">
      <form action="" method="POST">
        <div class="container bg-light mt-5" style="border-radius: 10px; width: 600px; margin-left: 250px;">
            <h1 class="text-center mt-2 mb-2" id="newaccount">New Account</h1>
            <!-- First Row -->
            <div class="row ">
              <div class="col-6 w-60">
                <div class="form-group name">
                  <label">Name:<i class="fa-solid fa-star-of-life fa-2xs" style="color: #f00000;"></i></label>
                  <input class="form-control" type="text" placeholder="Full Name" name="name" required>
                </div>
              </div>
              <div class="col-6 w-40">
                <label">Phone:</label>
                <input class="form-control " type="tel" placeholder="Enter Your Phone num" name="phone" required>
              </div>
            </div>
            <!-- second row -->
            <div class="row ">
              <div class="col-6 w-60">
                <div class="form-group name">
                  <label for="file" style="cursor: pointer;">Email</label>
                  <input class="form-control" type="email" placeholder="Enter your Email" name="email" required>
                </div>
              </div>
              <div class="col-6 w-40">
                <label for="file" style="cursor: pointer;">Password</label>
                <input class="form-control " type="password" placeholder="Password" name="password" required>
              </div>
            </div>
        
            <!-- row third -->
            <div class="row ">
              <div class="col-6 w-60">
                <div class="form-group name">
                  <label for="file" style="cursor: pointer;">Date Of birth</label>
                  <input class="form-control " type="date" placeholder="D.O.B" name="dateofbirth" required>
                </div>
              </div>
              <div class="col-6 w-40">
                <label for="file" style="cursor: pointer;">Upload Photo</label>
                <input class="form-control" type="file" accept="image/*" placeholder="Photo upload" name="photo" required>
        
              </div>
            </div>
            <!-- row four -->
            <div class="row ">
              <div class="col-6 w-60">
                <div class="form-group name">
                  <label for="file" style="cursor: pointer;">Adhar Card</label>
                  <input class="form-control" type="number" placeholder="Enter your Adhar Card" name="adhar" required>
                </div>
              </div>
              <div class="col-6 w-40">
                <label for="file" style="cursor: pointer;">Pan Card</label>
                <input class="form-control" type="text" placeholder="Enter your Pan Card" name="pan" required>
              </div>
            </div>
        
               <!-- row five -->
               <div class="row ">
                <div class="col-6 w-60">
                  <div class="form-group name">
                    <label name="gender" >Gender</label><br>
                    <label for="">Male</label>
                    <input type="radio" name="gender" value="Male" style="margin-right: 10px;" required>
                    <label for="">Female</label>
                    <input type="radio" name="gender" value="Female" style="margin-right: 10px;"required>
                    <label for="">Other</label>
                    <input type="radio" name="gender" value="other"required>
                  </div>
                </div>
                <div class="col-6 w-40">
                  <label>Account Type:</label>
                  <select  id="" name="Account">
                  <option value="Saving Account"  ></option>
                    <option value="Saving Account"  >Saving Account</option>
                    <option value="Current Account" >Current Account</option>
                    <option value="Trading Account" >Trading Account</option>
                    <option value="JOint Account" >JOint Account</option>
                  </select>
                </div>
              </div>
            <!-- row six -->
            <div class="row ">
              <div class="col-12 w-60">
                <div class="form-group name">
                  <label>Address</label>
                  <input class="form-control" type="text" placeholder="Enter your permanent Address-" name="Address">
                </div>
              </div>
            </div>
            <div class="d-flex justify-content-center">
              <button class="btn mb-5 " style="color: aliceblue;" name="Register" id="register">Register </button>
              
            </div>
          </div>
        </form>
    </div>
  </div>
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
