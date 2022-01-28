<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body style="background-color:#C0DFDA;">

<a class="btn btn-primary" href="./owner_welcome_home.php" role="button">Home</a>

<div class="container">
  <h2>Customer Orders</h2>
  </br>

  <p>The list shows the ordeer placed by customer</p>            
  </br>
  </br>
  
  <table class="table table-striped">
    <thead>
      <tr>
        <th style="text-align:center;">Username</th>
        <th style="text-align:center;">Bill Amount</th>
        
      </tr>
    </thead>
    <?php


// Create connection
$conn=mysqli_connect("localhost", "root","", "grocery");

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT username,billamount FROM bill_detail";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
?>
    <tbody>
      <tr>
        <td style="text-align:center;"><?php echo $row["username"]?> </td>
        <td style="text-align:center;"><?php echo $row["billamount"]?></td>
       
      </tr>
    
    <?php
  }
  
} else {
  echo "No Data found";
}
$conn->close();
?>
    </tbody>
  </table>
</div>

</body>
</html>
