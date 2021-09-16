<?php
    $conn = mysqli_connect("sql106.unaux.com", "unaux_29751219", "q2j7b", "Sbi_banking_system") or die ("error".mysqli_error($conn));

  

       $phoneno = $_GET['phoneno'];

       $query = "SELECT Customer_Name, City, State_, Email, PersonalNo,Account_No FROM customer_details where PersonalNo=$phoneno";
       $run_query = mysqli_query($conn,$query) or die (mysqli_error($conn));

       if (mysqli_num_rows($run_query)>0)
        {
            while($row=mysqli_fetch_array($run_query))
            {
                $name = $row['Customer_Name'];
                $address = $row['City']." ".$row['State_'];
                $contactno = $row['PersonalNo'];
                $accountno= $row['Account_No'];
                $email = $row['Email'];
                $balance = 2000.00;
                $date = date("Y/m/d");
               

                $insert_to_admin_accept_table = "INSERT INTO admin_accepted_customer (CustomerName,CustomerAccountNo,CustomerAddress,CustomerBalance,CustomerContact,Email_ID) values ('$name',$accountno,'$address',$balance,$contactno,'$email')";
                mysqli_query($conn,$insert_to_admin_accept_table) or die (mysqli_error($conn));
                $insert_balance = "INSERT INTO balance_info (Balance,AccountNo,Date) values (2000,$accountno,'$date')";
                mysqli_query($conn,$insert_balance) or die (mysqli_error($conn));

               
                echo "<script> window.location.href = 'basic-table2.php'</script>";
            }
        }
    
   
?>   