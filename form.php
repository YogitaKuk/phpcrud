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

<body>
 <div class="container"  style="padding: 1rem;">
  <div class="alert alert-success" role="alert">
  <h2 class="alert-heading text-center">Add User's Data!!</h2>
  </div>
</div>
<div class="container">
  <form action="view.php" method="POST">
        <div class="form-group">
          <label for="formGroupExampleInput">First Name</label>
          <input type="text" name="fname" class="form-control"  placeholder="Enter First Name">
        </div>
        <div class="form-group">
          <label for="formGroupExampleInput2">Last Name</label>
          <input type="text" name="lname" class="form-control"  placeholder="Enter Last Name">
        </div>
        <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" name="email" placeholder="name@example.com" aria-describedby="emailHelp">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <button class="btn btn-primary" name="entered" type="submit"> Submit </button>
      </form>
  </div>
</body>
</html>
