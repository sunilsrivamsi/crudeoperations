<?php 

include "insert.php";

  if (isset($_POST['submit'])) 
  {

    $first_name = $_POST['fname'];

    $email = $_POST['email'];

    $password = $_POST['password'];

    $mobile = $_POST['mobile'];

    $sql = "INSERT INTO sample(name,email,mobile,password) VALUES ('$first_name','$email','$mobile','$password')";

  //$result = mysqli_query($conn, $sql);
  $result = $conn->query($sql);

    if ($result == TRUE) {

      echo "New record created successfully.";

    }else{

      echo "Error:". $sql . "<br>". $conn->error;

    } 

    $conn->close(); 

  }

?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <title>crude operations</title>
</head>

<body>
  <div class="container my-5">
    <form action="" method="POST">
      <div class="mb-3">
        <label class="form-label">Full Name</label>
        <input type="text" class="form-control" name="fname">
      </div>
      <div class="mb-3">
        <label class="form-label">Email address</label>
        <input type="text" class="form-control" name="email">
      </div>
      <div class="mb-3">
        <label class="form-label">Mobiel Number</label>
        <input type="number" class="form-control" name="mobile">
      </div>
      <div class="mb-3">
        <label class="form-label">Password</label>
        <input type="password" class="form-control" name="password">
      </div>

      <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
</body>

</html>