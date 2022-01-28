<?php
	$conn = mysqli_connect("localhost", "root", "","grocery");
	if($conn->connect_error){
			die("Connection failed : ".$conn->connect_error);
	}
    session_start();
    $user_check=$_SESSION['logi_valid'];
    $ses_sql=mysqli_query($conn,"select username,password from customer where username='$user_check'");
    $row=mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
    $loggedin_session=$row['username'];
    // $loggedin_id=$row['mem_id'];
    if(!isset($loggedin_session) || $loggedin_session==NULL) {
     echo "Go back";
     header("Location: index.html");
    }

?>