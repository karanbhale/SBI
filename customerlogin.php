<?php
    include "connection.php";
    
    if(isset($_POST['signin']))
    {
        $email = $_POST['email'];
       $password = $_POST['your_pass'];

      
       $password = sha1($password); 
      
        $check_login_details = "select email,password from login_details where email = '$email'";
         $run_query = mysqli_query($conn, $check_login_details) or die(mysqli_error($conn));
        
        if (mysqli_num_rows($run_query)>0) {
            while ($row = mysqli_fetch_array($run_query)) {
                $getemail = $row['email'];
                $getpassword = $row['password'];
            }
            if($getemail == $email && $getpassword == $password)
            {
                echo "<script> window.location.href = 'customerdashboard/index.php?email=$getemail'</script>";
            }
        }
        else
        {
            echo "<script> alert('Login unSuccessful... ') </script>";
                echo "<script> window.location.href = 'login.html'</script>";
        }

    }
    
?>