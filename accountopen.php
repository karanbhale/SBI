<?php
    include "connection.php";

    if(isset($_POST['Submit']))
    {
        $firstname = $_POST['firstname'];
        $middlename = $_POST['Middle'];
        $lastname = $_POST['Last'];
        $Address1 = $_POST['Address1'];
        $Address2 = $_POST['Address2'];
        $city = $_POST['City'];
        $state = $_POST['State'];
        $pincode = $_POST['Pincode'];
        $personalno = $_POST['Contact1'];
        $officeno = $_POST['Contact2'];
        $DOB = $_POST['DOB'];
        $email = $_POST['Email'];
        $aadhar = $_POST['AAdhar'];
        $pan = $_POST['Pan'];
        $image = $_FILES['Image']['name'];
        $Accountno = rand(123456789,987654321);

        $fullname = $lastname. " ". $firstname. " ". $middlename;

        $image_array = explode('.', $image);
        $image_array[0] = md5($image_array[0]);
        $path = "Upload/Images/". $image_array[0].".".$image_array[1];

        move_uploaded_file ($_FILES["Image"]["tmp_name"],$path);

        $query = "insert into customer_details (Customer_Name,Address1,Address2,City,State_,Pincode,PersonalNo,OfficeNo,DOB,Email,AAdhar,Pan,Photo_Id,Account_No) values ('$fullname','$Address1','$Address2','$city','$state',$pincode,$personalno,$officeno,'$DOB','$email',$aadhar,'$pan','$path',$Accountno)";
        mysqli_query($conn,$query) or die (mysqli_error($conn));
        $path = "../".$path;
        $imagequery = "insert into customer_copy (PersonalNo,Photo_Id,Account_No,email) values ($personalno,'$path',$Accountno,'$email')";

       
        mysqli_query($conn,$imagequery) or die (mysqli_error($conn));
        echo "<script> alert('Your Account Is under review...')</script>";
        echo "<script> window.location.href = 'index.html' </script>";
    }

?>