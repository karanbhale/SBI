<?php
    include "connection.php";
    
    if (isset($_POST['signup'])) {
        $Accountno = $_POST['acnumber'];
        $email = $_POST['email'];
        $pass = $_POST['pass'];
        $confirmpass = $_POST['re_pass'];

        
        if ($pass == $confirmpass) {
            $enc_pass = sha1($pass);
           
            $query = "select CustomerName from admin_accepted_customer where CustomerAccountNo = $Accountno";
            $run_query = mysqli_query($conn, $query) or die(mysqli_error($conn));
            if (mysqli_num_rows($run_query) > 0 ) {
                $query = "insert into login_details (email,password,Account_No) values ('$email','$enc_pass',$Accountno)";
                mysqli_query($conn, $query) or die(mysqli_error($conn));
              
                echo "<script> window.location.href ='login.html'</script>";
            } 
            else
            {
                echo "<script> alert('Enter Correct Account Number') </script>";
                echo "<script> window.location.href = 'ragistration1.html'";
            }
        }
        else
        {
            echo "<script> alert('Your password does not match with Confirm Password') </script>";
            echo "<script> window.location.href = 'ragistration1.html'";
        }
    }
?>