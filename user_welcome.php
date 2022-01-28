
<html>
   
   <head>
      <title>Welcome </title>
   </head>
   
   <body>
      <h1>Welcome </h1> 
      <h2><a href = "logout.php">Sign Out</a></h2>
   </body>
   
</html>
<?php
        $servername = "localhost";
        $user = "root";
        $pwd = "";
        $database = "grocery";

        // create a connection
        $conn = mysqli_connect($servername, $user, $pwd, $database);

        // Die if connection was not successful
        if (!$conn){
            die("Sorry we failed to connect: ". mysqli_connect_error());
        }

        $sql = "select * from product";
	
        $query = mysqli_query($conn,$sql);
        
        $num = mysqli_num_rows($query);
        echo $num;
        echo " Groceries found in our store<br>";
        
	    if( mysqli_num_rows($query) > 0 ){
        
	    	echo "<table border='1'>";
         echo "<tr><th>Item name</th> <th>Item Price/kg</th> <th>Quantity available(in kg)</th></tr>";
	    	while( $result = mysqli_fetch_assoc($query)){
	    		echo "<tr><td>".$result["item name"]. "</td><td> ".$result["item price"]."</td><td>".$result["quantity available"]."</td></tr>";
	    	}
	    	echo "</table>";
	    }
?>