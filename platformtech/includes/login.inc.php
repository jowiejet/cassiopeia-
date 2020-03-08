<?php
    if(isset($_POST['login-submit'])){

        include('dbcon.php');

        $email = $_POST['email'];
        $password = $_POST['password'];

        if(empty($email) || empty($password)){
            header("location: ../pages/login.php");
            exit();
        }
        else{
            $sql = "SELECT * FROM platformtech_users WHERE platformtech_users_email=?";
            $stmt = mysqli_stmt_init($conn);

            if(!mysqli_stmt_prepare($stmt, $sql)){
                header("location: ../pages/login.php");
                exit();		
            }
            else{
                mysqli_stmt_bind_param($stmt, "s", $email);
                mysqli_stmt_execute($stmt);
                $result = mysqli_stmt_get_result($stmt);

                if($row = mysqli_fetch_assoc($result)){

                    $passwordCheck = password_verify($password, $row['platformtech_users_password']);

                    if($passwordCheck == false){
                        header("location: ../pages/login.php");
                        exit();	
                    }
                    else if($passwordCheck == true){

                        session_start();
                        
                        $_SESSION['platformtech_users_id'] = $row['platformtech_users_id'];
                        $_SESSION['platformtech_users_name'] = $row['platformtech_users_name'];
                        $_SESSION['platformtech_users_email'] = $row['platformtech_users_email'];
                        
                        header("location: ../pages/index.php");
                        exit();
                    }
                    else{
                        header("location: ../pages/login.php");
                        exit();	
                    }
                }
                else{
                    header("location: ../pages/login.php");
                    exit();	
                }
            }
        }
    }
    else{
        header("location: ../login.php");
        exit();
    }