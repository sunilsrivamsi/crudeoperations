<?php 

include "insert.php";
$id = $_GET['updateid'];
$sql = "select * from sample where id=$id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
    $first_name = $row['name'];

    $email = $row['email'];

    $password = $row['password'];

    $mobile = $row['mobile'];

  if (isset($_POST['update'])) 
  {

    $first_name = $_POST['fname'];

    $email = $_POST['email'];

    $password = $_POST['password'];

    $mobile = $_POST['mobile'];

    $sql =   $sql = "UPDATE sample SET name='$first_name',email='$email',password='$password',mobile='$mobile' WHERE `id`='$id'"; 

  //$result = mysqli_query($conn, $sql);
  $result = $conn->query($sql);

    if ($result == TRUE) {

      echo "updated successfully.";

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
        <input type="text" class="form-control" name="fname" value="<?php echo $first_name; ?>">
      </div>
      <div class="mb-3">
        <label class="form-label">Email address</label>
        <input type="text" class="form-control" name="email" value="<?php echo $email; ?>">
      </div>
      <div class="mb-3">
        <label class="form-label">Mobiel Number</label>
        <input type="number" class="form-control" name="mobile" value="<?php echo $mobile; ?>">
      </div>
      <div class="mb-3">
        <label class="form-label">Password</label>
        <input type="password" class="form-control" name="password" value="<?php echo $password; ?>">
      </div>

      <button type="submit" name="update" class="btn btn-primary">update</button>
    </form>
  </div>
</body>

</html>