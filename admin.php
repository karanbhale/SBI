<?php
    include "connection.php";

    if (isset($_POST['signin'])) {
        $email = "admin@gmail.com";
        $password="admin1234";

        if ($email == $_POST['Email'] && $password == $_POST['your_pass']) {
            echo "<script> window.location.href = 'template/index.html'</script>";
        }
        else
        {
            echo "<script> alert('login Unsuccessful...')</script>";
            echo "<script> window.location.href = 'adminlogin.html'</script>";
        }
    }
?>