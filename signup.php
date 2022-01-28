<html>
<head>
    <!-- basic -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- mobile metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="initial-scale=1, maximum-scale=1">
  <!-- site metas -->
  <title>shree</title>
  <meta name="keywords" content="">
  <meta name="description" content="">
  <meta name="author" content="">
  <!-- fevicon -->
  <link rel="icon" href="images/fevicon.png" type="image/gif" />
  <!-- bootstrap css -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- style css -->
  <link rel="stylesheet" href="css/style.css">
   <!-- signup css -->
   <link rel="stylesheet" href="css/signup.css">

  <!-- Responsive-->
  <link rel="stylesheet" href="css/responsive.css">  
  <!-- Scrollbar Custom CSS -->
  <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
  <!-- Tweaks for older IEs-->
  <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>


<body>

<!-- Navbar-->
<header class="header">
    <nav class="navbar navbar-expand-lg navbar-light py-3">
        <div class="container">
            <!-- Navbar Brand -->
            <a href="#" class="navbar-brand">Shree Vegetable Store
                <!-- <img src="https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.justdial.com%2FNagpur%2FNR-Online-Fresh-Fruits-And-Vegetables-Store-Near-Kamal-Chowk-Kamal-Chowk%2F0712PX712-X712-180119200026-G6N8_BZDET&psig=AOvVaw3ihAVhS_jiJDaxexlUYn-E&ust=1618980178882000&source=images&cd=vfe&ved=0CAIQjRxqFwoTCPiGwqWBjPACFQAAAAAdAAAAABAE" alt="logo" width="150"> -->
            </a>
            <a href= "./index.html">Home</a>
        </div>
    </nav>
</header>


<div class="container">
    <div class="row py-5 mt-4 align-items-center">
       
        <!-- Registeration Form -->
        <div class="col-md-7 col-lg-6 ml-auto">
            <form id="form" method="POST" action="">
                <div class="row">

                    <!-- First Name -->
                    <div class="input-group col-lg-6 mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-white px-4 border-md border-right-0">
                                <i class="fa fa-user text-muted"></i>
                            </span>
                        </div>
                        <input id="firstName" type="text" name="firstname" placeholder="First Name" class="form-control bg-white border-left-0 border-md">
                    </div>

                    <!-- Last Name -->
                    <div class="input-group col-lg-6 mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-white px-4 border-md border-right-0">
                                <i class="fa fa-user text-muted"></i>
                            </span>
                        </div>
                        <input id="lastName" type="text" name="lastname" placeholder="Last Name" class="form-control bg-white border-left-0 border-md">
                    </div>

                    <!-- Username -->
                    <div class="input-group col-lg-12 mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-white px-4 border-md border-right-0">
                                <i class="fa fa-user text-muted"></i>
                            </span>
                        </div>
                        <input id="uname" type="text" name="uname" placeholder="User Name" class="form-control bg-white border-left-0 border-md">
                    </div>

                    <!-- Phone Number -->
                    <div class="input-group col-lg-12 mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-white px-4 border-md border-right-0">
                                <i class="fa fa-phone-square text-muted"></i>
                            </span>
                        </div>
                        
                        <input id="phoneNumber" type="tel" name="phone" placeholder="Phone Number" class="form-control bg-white border-md border-left-0 pl-3">
                    </div>.

                    <!-- Address -->
                    <div class="input-group col-lg-6 mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-white px-4 border-md border-right-0">
                                <i class="fa fa-home" aria-hidden="true"></i>
                            </span>
                        </div>
                        <textarea id="address" name="Address" placeholder="Address" rows = "3" cols="30" class="form-control bg-white border-left-0 border-md"></textarea>
                    </div>
                    
                    
                    <!-- Password -->
                    <div class="input-group col-lg-6 mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-white px-4 border-md border-right-0">
                                <i class="fa fa-lock text-muted"></i>
                            </span>
                        </div>
                        <input id="password" type="password" name="password" placeholder="Password" class="form-control bg-white border-left-0 border-md">
                    </div>

                    <!-- Password Confirmation -->
                    <div class="input-group col-lg-6 mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-white px-4 border-md border-right-0">
                                <i class="fa fa-lock text-muted"></i>
                            </span>
                        </div>
                        <input id="passwordConfirmation" type="password" name="passwordConfirmation" placeholder="Confirm Password" class="form-control bg-white border-left-0 border-md">
                    </div>

                    <!-- Submit Button -->
                    <div class="form-group col-lg-12 mx-auto mb-0">
                        <!-- <a href="#" class="btn btn-primary btn-block py-2" >
                            <span class="font-weight-bold" name="signup_submit">Create your account</span>
                        </a> -->
                        <input type="submit" name="submit">
                    </div>
                    
                    

                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>


<?php
    if (isset($_POST['submit']))
    {
        $fname = $_POST["firstname"];
        $lname = $_POST["lastname"];
        $uname = $_POST["uname"];
        $phone = $_POST["phone"];
        $add = $_POST["Address"];
        $passwd = $_POST["password"];

        $servername = "localhost";
        $user = "root";
        $pwd = "";
        $database = "grocery";

        $conn = mysqli_connect($servername, $user, $pwd, $database);
        if (!$conn){
            die("Sorry we failed to connect: ". mysqli_connect_error());
        }
        else{ 
        
        $sql = "INSERT INTO `customer`(`first name`, `last name`, `username`, `phone number`, `address`, `password`) VALUES ('$fname','$lname','$uname','$phone','$add','$passwd')";
        $result = mysqli_query($conn , $sql);   
        if (!$result) {
             $precio_digital= "Error IN Signup Process";

            echo '<div style="font-size:1.25em;color:##FF0000;font-weight:bold;"><span style="font-size:1.25em;color:#FF0000;font-weight:bold;">'.$precio_digital.'</span></div>';
            // echo "&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;" .$error_msg;
        } else {
          echo('Success, row has been inserted');
        }}
    }
?>
