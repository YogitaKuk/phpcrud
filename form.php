<?php

include 'connection.php';

if(isset($_POST['entered'])){

 $firstname = $_POST['fname'];
 $lastname = $_POST['lname'];
 $email = $_POST['email'];
 $sql = " INSERT INTO `phpcrudtable`(`firstname`, `lastname`, `email`) VALUES ( '$firstname', '$lastname','$email' )";

 $query = mysqli_query($con,$sql);
}
?>

<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
<form method="POST">
  <h1 class="text-success text-center" > Add user's data </h1>
  <div class="col-lg-6 m-auto">
        <label>First Name </label>
        <input type="text" name="fname" placeholder="Enter first name"><br>
        <label>Last Name</label>
        <input type="text" name="lname" placeholder="Enter Last Name"><br>
        <label>Email ID</label>:--
        <input type="text" name="email" placeholder="Enter Email"><br>
      <button class="btn btn-success" name="entered" type="submit"> Submit </button>

  </div>
</form>

</body>
</html>
