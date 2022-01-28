<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="ie6 ielt8"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="ie7 ielt8"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="ie8"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html lang="en"> <!--<![endif]-->
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
  <!-- Responsive-->
  <link rel="stylesheet" href="css/responsive.css"> 

  <link rel="stylesheet" href="css/login_user_sub_1.css"> 
  <!-- Scrollbar Custom CSS -->
  <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
  <!-- Tweaks for older IEs-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
<meta charset="utf-8">
<title>Paper Stack</title>
<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light bg-transparent">
  <div class="container-fluid bg-transparent">
    <a class="navbar-brand bg-transparent" href="#"></a>
    <button class="navbar-toggler bg-transparent" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse bg-transparent" id="navbarNavAltMarkup">
	<div class="navbar-nav bg-transparent">
        <a class="nav-link " aria-current="page" href="./index.html">Home</a>
        <a class="nav-link" href="./login_owner_sub.php">Login As Owner</a>
        <a class="nav-link active" href="#">Login As Customer</a>
        
      </div>
    </div>
  </div>
</nav>
<div class="container">
  <section id="content">
  <Form action="" method="POST">
      <h1> Customer Login</h1>
      <div>
        <input type="text" placeholder="Username" name = "name" required="" id="username" />
      </div>
      <div>
        <input type="password" placeholder="Password" name = "password" required="" id="password" />
      </div>
      <div>
        
        <input type="submit" name="submit" value="Log in" href="#">
        <a href="#"></a>
        <a href="#"></a>
      </div>
    </form><!-- form -->
    
  </section><!-- content -->
</div><!-- container -->
</body>
</html>
<?php
	if (isset($_POST['submit']))
	{
	session_start();
	$_SESSION['logi_valid']=null;
	//$_SESSION['entered_hotel_list']=null;
	$_SESSION['uid']=null;
	$_SESSION['hid']=null;
	$eml=$_POST["name"];
	$pass=$_POST["password"];
	$flageml=0;
	$flagpass=0;
	$flagvalid=0;
	
	$conn = mysqli_connect("localhost", "root", "","grocery");
	if($conn->connect_error){
			die("Connection failed : ".$conn->connect_error);
	}
	$sql="select  username, password from customer";
	$result= $conn->query($sql);
	if($result->num_rows >0){
		while($row = $result-> fetch_assoc()){
			if($row["username"] == $eml){
				$flageml = 1;
			}
			if($row["password"] == $pass){
				$flagpass = 1;
			}
			if(($flageml==1) && ($flagpass==1)){
				echo "Welcome ".$row["first_name"] ;
				$_SESSION['logi_valid']=$eml;;
				
				header("Location: user_main.php");
                $flagvalid=1;
				exit();
				
				break;

			}
		}
		$flageml=0;
		$flagpass=0;
		
		if($flagvalid==0){	
			
			$precio_digital= "&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Error IN User Login Process";

            echo '<div style="font-size:1.25em;color:##FF0000;font-weight:bold;"><span style="font-size:1.25em;color:#FF0000;font-weight:bold;">'.$precio_digital.'</span></div>';
           }


	else{
		echo "0 result <br>";
	$conn->close();
}
	}
}
?>