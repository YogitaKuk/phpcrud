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
     <div class="container" style="padding: 1rem;">
      <div class="alert alert-primary" role="alert">
      <h2 class="alert-heading text-center">User's Records</h2>
      </div>
      <div class="table-responsive-xl">
      <table class="table">
        <thead>
        <tr class="bg-dark text-white text-center">
           <th scope="col"> Id </th>
           <th scope="col"> First Name </th>
           <th scope="col"> Last Name </th>
           <th scope="col"> Email </th>
           <th scope="col" colspan="2"> Action </th>
     </tr >
     <?php

    include 'connection.php';
    $sql = "select * from phpcrudtable";

     $query = mysqli_query($con,$sql);

     while($res = mysqli_fetch_array($query)){
     ?>
     <tr class="text-center">
     <td class="table-dark "> <?php echo $res['id'];  ?> </td>
     <td class="table-dark"> <?php echo $res['firstname'];  ?> </td>
     <td class="table-dark"> <?php echo $res['lastname'];  ?> </td>
     <td class="table-dark"> <?php echo $res['email'];  ?> </td>
     <td class="table-dark"> <button  class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"> Edit </button> </td>

     <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
       <div class="modal-dialog">
         <div class="modal-content">
           <div class="modal-header">
             <h5 class="modal-title" id="exampleModalLabel"><code>Alert !!!</code></h5>
             <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
             </button>
           </div>
           <div class="modal-body">
          <strong><small class="form-text text-muted"> Do you really want to update ? </small> </strong>
           </div>
           <div class="modal-footer">
             <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
             <button type="button" class="btn btn-primary"><a href="edit.php?id=<?php echo $res['id']; ?>" class="text-white"> Continue </a></button>
           </div>
         </div>
       </div>
     </div>

     <td class="table-dark"> <button data-toggle="modal" data-target="#exampleModal1" class="btn-danger btn">Delete</button> </td>
     <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
       <div class="modal-dialog">
         <div class="modal-content">
           <div class="modal-header">
             <h5 class="modal-title" id="exampleModalLabel"><code>Alert !!!</code></h5>
             <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
             </button>
           </div>
           <div class="modal-body">
          <strong><small class="form-text text-muted"> Do you really want to <code>delete</code> ? </small> </strong>
           </div>
           <div class="modal-footer">
             <button type="button" class="btn  btn-lg btn-secondary" data-dismiss="modal">No</button>
             <button type="button" class="btn  btn-lg btn-primary"> <a href="delete.php?id=<?php echo $res['id']; ?>"<a href="delete.php?id=<?php echo $res['id']; ?>" class="text-white"> Yes </a></button>
           </div>
         </div>
       </div>
     </div>
     </tr>
     <?php
     }
      ?>

     </table>

     </div>
     </div>

  </body>
</html>
