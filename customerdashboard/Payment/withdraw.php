<?php 
    $conn = mysqli_connect("sql106.unaux.com", "unaux_29751219", "q2j7b", "Sbi_banking_system") or die ("error".mysqli_error($conn));

    if (isset($_POST['submit'])) {
        $amount = $_POST['amount'];
    }

    $account = $_GET['accountno'];
    $email = $_GET['email'];

    $query = "select Balance from balance_info where AccountNo = $account ";
    $runquery = mysqli_query($conn,$query) or die (mysqli_error($conn));

    if(mysqli_num_rows($runquery)>0){
        while ($row = mysqli_fetch_array($runquery)) {
            $balance = $row['Balance'];
            $actualbalance = $balance-2000;
            if($actualbalance <=0 && $actualbalance <$amount)
            {
                echo "<script> alert('Insufficient Balance...')</script>";
                echo "<script> window.location.href= '../customerpay.php?accountno=$account&email=$email'</script>";
            }
            else {
                $balance -=$amount;
                $date = date("Y/m/d");
    
            }
            
            $query = "insert into balance_info (Balance,AccountNo,WD,Date) values ($balance,$account,'-Withdraw','$date')";
            mysqli_query($conn,$query) or die (mysqli_error($conn));
            echo "<script> alert('Payment Successful...')</script>";
            echo "<script> window.location.href= '../customerpay.php?accountno=$account&email=$email'</script>";
        }
    }
?>
           