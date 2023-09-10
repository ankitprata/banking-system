<?php
include "connection.php";
if (isset($_POST['sumbit'])) {
    $phone = $_POST['phone'];
    $password = $_POST['password'];

    if ($phone != "" and $password != ""); {
        $sql = "SELECT *FROM register WhERE (phone='" . $phone . "' AND  password='" . $password . "')";
        $query = mysqli_query($con, $sql);
        $n = mysqli_num_rows($query);
        if ($n == 1) {
            // echo "login success";
            // header('location:afterlogin.php');

        } else {

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
    <link rel="stylesheet" href="adminafter.css">
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

    <!-- <div class="hero-section">
    <div class="container-fluid p-0">
      <div class="image">
        <img src="./About image/about5.png" width="100%" class="w-100 ">
      </div>
    </div>
  </div> -->



   


   <div class="container">
   <h2 class="mt-5 text-center">User Details</h2>
   <!-- <hr class="hr"> -->
    <table class="table table-bordered  shadow-lg bg-opacity-75">
        <thead>
            <tr>
                <!-- <th>ID</th> -->
                <th class="text-black">Name</th>
                <!-- <th>surname</th> -->
                <th>Phone</th>

                <th>Email</th>
                <th>Account Type</th>
                <th>Account Num</th>
                <!-- <th>month</th>
                    <th>year</th>
                    <th>gender</th> -->
            </tr>
        </thead>
        <tbody>
            <?php
            include "connection.php";

            $sql = "SELECT  `name`, `phone`, `email`,  'Account', `account_num` FROM `register`   ";
            $query = mysqli_query($con, $sql);
            // $n=mysqli_num_rows($query);
            // echo "$n";
            while ($n = mysqli_fetch_assoc($query)) {


            ?>
            <tr>

                <td class="text-primary">
                    <?php echo $n['name']; ?>
                </td>
                <td class="text-primary">
                    <?php echo $n['phone']; ?>
                </td>
                <td class="text-primary">
                    <?php echo $n['email']; ?>
                </td>
                <td class="text-primary">
                    <?php echo $n['Account']; ?>
                </td>
                <td class="text-primary">
                    <?php echo $n['account_num']; ?>
                </td>


            </tr>

            <?php
            } ?>
        </tbody>

            </table>
   </div>

        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.10/typed.min.js"
            integrity="sha512-hIlMpy2enepx9maXZF1gn0hsvPLerXoLHdb095CmRY5HG3bZfN7XPBZ14g+TUDH1aGgfLyPHmY9/zuU53smuMw=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="home.js"></script>
        <?php
        include('footer.php');

        ?>
</body>



</html>