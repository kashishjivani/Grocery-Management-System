<html>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card mx-auto">
                <form onsubmit="event.preventDefault()" class="box">
                    <h1>Login</h1>
                    <p class="text-muted"> Please enter your login and password!</p> 
                    <input type="text" name="name" placeholder="Username"> 
                    <input type="password" name="password" placeholder="Password"> 
                    <input type="submit" name="" value="Login" href="#">
                    <div class="col-md-12">
                    
                        
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

</html>

<?php
	if (isset($_POST['submit']))
	{
	session_start();
	$_SESSION['logi_valid']=null;
	//$_SESSION['entered_hotel_list']=null;
	$_SESSION['uid']=null;
	// $_SESSION['hid']=null;
	$eml=$_POST["name"];
	$pass=$_POST["password"];
	$flageml=0;
	$flagpass=0;
	$flagvalid=0;
	
	$conn = mysqli_connect("localhost", "root", "","grocery");
	if($conn->connect_error){
			die("Connection failed : ".$conn->connect_error);
	}
	$sql="select userID, email, password from user_table";
	$result= $conn->query($sql);
	if($result->num_rows >0){
		while($row = $result-> fetch_assoc()){
			//echo "<tr><td>".$row["hotel_name"]."</td></tr>";
			if($row["name"] == $eml){
				$flageml = 1;
			}
			if($row["password"] == $pass){
				$flagpass = 1;
			}
			if(($flageml==1) && ($flagpass==1)){
				//echo "Welcome ".$row["first_name"] ;
				$_SESSION['logi_valid']='set';
				$_SESSION['uid']=$row['userID'];
				//header("Location: user_hotel_list.php?uid=".$row["userID"]);
				header("Location: user_welcome.php");
				exit();
				$flagvalid=1;
				break;

			}
		}
		$flageml=0;
		$flagpass=0;
		if($flagvalid==0){			
			$sql="select ID, name , password from test";
			$result= $conn->query($sql);
			if($result->num_rows >0){
				while($row = $result-> fetch_assoc()){
			
					if($row["name"] == $eml){
						$flageml = 1;
					}
					if($row["password"] == $pass){
						$flagpass = 1;
					}
					if(($flageml==1) && ($flagpass==1)){
						//echo "Welcome ".$row["first_name"] ;
						$_SESSION['logi_valid']='set';
						//$_SESSION['hid']=$row["hotelID"];
						//header("Location: owner_menu_list.php?hid=".$row["hotelID"]);
						//header("Location: owner_menu_list.php");
						exit();
						$flagvalid=1;
						break;
						
					}					
				}
				if($flagvalid==0){	
					echo "please check email or pass";
				}
			}
		}
	}
	else
		echo "0 result <br>";
	$conn->close();
}
?>