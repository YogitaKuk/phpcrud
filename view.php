<?php

include 'connection.php';

if(isset($_POST['entered'])){

 $firstname = $_POST['fname'];
 $lastname = $_POST['lname'];
 $email = $_POST['email'];
 $sql = "select * from phpcrudtable";

 $query = mysqli_query($con,$sql);
}
?>

<!DOCTYPE html>
<html>
  <head>

    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  </head>
  <body>
    <script type='text/javascript'>
function myFunction(id){
    var answer = confirm('Are you sure to update?');
    if (answer){
        window.location = 'edit.php?id=' + id;
    }
    else{
      view.location = 'edit.php?id=' + id;
    }
}
function delete_function(id){

    var answer = confirm('Are you sure to delete?');
    if (answer){
        window.location = 'delete.php?id=' + id;
    }
    else{
      view.location = 'delete.php?id=' + id;
    }
}
</script>
    <div class="container">
     <div class="col-lg-12">
     <br><br>
     <h1 class="text-success text-center" > Records </h1>
     <br>
     <table  id="tabledata" class=" table table-striped table-hover table-bordered">

     <tr class="bg-dark text-white text-center">

     <th> Id </th>
     <th> First Name </th>
     <th> Last Name </th>
     <th> Email </th>
     <th colspan="2"> Action </th>


     </tr >

     <?php

    include 'connection.php';
    $sql = "select * from phpcrudtable";

     $query = mysqli_query($con,$sql);

     while($res = mysqli_fetch_array($query)){
     ?>
     <tr class="text-center">
     <td> <?php echo $res['id'];  ?> </td>
     <td> <?php echo $res['firstname'];  ?> </td>
     <td> <?php echo $res['lastname'];  ?> </td>
     <td> <?php echo $res['email'];  ?> </td>
     <td> <button onclick="myFunction()" class="btn-primary btn"> <a href="edit.php?id=<?php echo $res['id']; ?>" class="text-white"> Edit </a> </button> </td>
     <td> <button onclick="delete_function()" class="btn-danger btn"> <a href="delete.php?id=<?php echo $res['id']; ?>" class="text-white"> Delete </a>  </button> </td>
     </tr>

     <?php
     }
      ?>

     </table>

     </div>
     </div>

  </body>
</html>
