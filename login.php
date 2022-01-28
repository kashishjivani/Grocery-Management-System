<!DOCTYPE html>
<html lang="en">

    
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
      <!-- login css -->
      <link rel="stylesheet" href="css/login.css">
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
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card mx-auto">
                <form method="POST" class="box">
                    <h1>Login</h1>
                    <p class="text-muted"> Please enter your login and password!</p> 
                    <input type="text" name="name" placeholder="Username"> 
                    <input type="password" name="password" placeholder="Password"> 
                    <input type="submit" name="submit" value="Login" href="#">
                    <div class="col-md-12">
                    
                        
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

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
				$_SESSION['logi_valid']='set';
				// $_SESSION['uid']=$row['id'];
				//header("Location: user_hotel_list.php?uid=".$row["userID"]);
				header("Location: user_welcome.php");
                $flagvalid=1;
				exit();
				// $flagvalid=1;
				break;

			}
		}
		$flageml=0;
		$flagpass=0;
		// if($flagvalid==0){			
		// 	$sql="select  username , password from owner";
        //     $query = mysqli_query($conn,$sql);
		// 	if(mysqli_num_rows($query) >0){
		// 		while($row = $result-> fetch_assoc()){
			
		// 			if($row["name"] == $eml){
		// 				$flageml = 1;
		// 			}
		// 			if($row["password"] == $pass){
		// 				$flagpass = 1;
		// 			}
		// 			if(($flageml==1) && ($flagpass==1)){
		// 				echo "Welcome ".$row["first_name"] ;
		// 				$_SESSION['logi_valid']='set';
		// 				// $_SESSION['hid']=$row["id"];
		// 				//header("Location: owner_menu_list.php?hid=".$row["hotelID"]);
		// 				header("Location: owner_welcome.php");
		// 				exit();
		// 				$flagvalid=1;
		// 				break;
						
		// 			}					
		// 		}
		if($flagvalid==0){	
			echo "please check username or password!";
		}


	else{
		echo "0 result <br>";
	$conn->close();
}
	}
}
?>