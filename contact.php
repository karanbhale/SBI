<?php
    include "connection.php";

    if (isset ($_POST['submit'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];

        $query = "insert into contact_infor (Name, Email,Subject,Message) values ('$name','$email','$subject','$message')";

        mysqli_query($conn,$query) or die (mysqli_error($conn));

        echo "<script> alert('Message Delivered...') </script>";
        echo "<script> window.location.href ='index.html'";
    }
?>