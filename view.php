<?php

include "insert.php";



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
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script> 
    <title>Hello, world!</title>
</head>

<body>
    <div class="container">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">First</th>
                    <th scope="col">email</th>
                    <th scope="col">passord</th>
                    <th scope="col">mobile</th>
                    <th scope="col">operations</th>
                </tr>
            </thead>
            <tbody>
            <div class="container my-5">

                <?php
                 $sql = "SELECT * FROM sample";

                 $result = $conn->query($sql);
                 if ($result) 
                 {

                    while ($row = $result->fetch_assoc()) {
                        $id = $row['id'];
                        $name = $row['name'];
                        $email = $row['email'];
                        $mobile = $row['mobile'];
                        $password = $row['password'];
                        echo '<tr>
                         <th scope="row">' . $id . '</th>
                         <td>' . $name . '</td>
                         <td>' . $email . '</td>
                         <td>' . $mobile . '</td>
                         <td>' . $password . '</td>
                         <td>
                         <button class="btn btn-secondary"><a href="update.php? updateid='.$id.'" class="text-light" >Update</a></button>
                         <button class="btn btn-danger"><a href="delete.php? deleteid='.$id.'" class="text-light">Delete</a></button>
                         </td>

                       </tr>';
                    }
                 }
                ?>
            </div>
            
            </tbody>
        </table>
    </div>
</body>

</html>