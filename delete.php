<?php

include "insert.php";

if (isset($_GET['deleteid'])) {

    $user_id = $_GET['deleteid'];

    $sql = "DELETE FROM sample WHERE id='$user_id'";

    $result = $conn->query($sql);

    if ($result == TRUE) {

        header ('location:view.php');

    } else {

        echo "Error:" . $sql . "<br>" . $conn->error;

    }

}

?>