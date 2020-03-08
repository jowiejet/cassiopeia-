<?php
    include('dbcon.php');

    if(isset($_POST['signup-submit'])){
        $fullname = htmlspecialchars($_POST['fullname']);
        $email =  htmlspecialchars($_POST['email']);
        $address =  htmlspecialchars($_POST['address']);
        $contactnumber =  htmlspecialchars($_POST['contactnumber']);
        $password =  htmlspecialchars($_POST['password']);
        $confirmpassword =  htmlspecialchars($_POST['confirmpassword']);
        
        if($password != $confirmpassword){
            header("location: ../pages/signup.php?error=differentpassword");
            exit();
        }
        else{
            $email_check_query = "SELECT * FROM platformtech_users WHERE platformtech_users_email='$email' LIMIT 1";
            $result = mysqli_query($conn, $email_check_query);
            $email_result = mysqli_fetch_assoc($result);

            if($email_result){
                header("location: ../pages/signup.php?error=email");
                exit();
            }else{
                $sql = "INSERT INTO `platformtech_users`(`platformtech_users_name`, `platformtech_users_address`, `platformtech_users_email`, `platformtech_users_password`, `platformtech_users_contact_number`) VALUES (?,?,?,?,?)";
                $stmt = mysqli_stmt_init($conn);
                
                if(!mysqli_stmt_prepare($stmt, $sql)){
                    header("location: ../pages/signup.php?error=sqlerror");
					exit();
                }
                else{
					$hash_password = password_hash($password, PASSWORD_DEFAULT);
					mysqli_stmt_bind_param($stmt, "sssss", $fullname, $address, $email, $hash_password, $contactnumber);
                    mysqli_stmt_execute($stmt);
                    
					header("location: ../pages/login.php?signup=success");
					exit();	
                }
            }
        }

    }
    else{
        echo '<script>alert("ERROR")</script>';
        header("location: ../pages/signup.php");
        exit();
    }