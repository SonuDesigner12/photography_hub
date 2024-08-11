<?php
    session_start();
    include("db.php");

    $id = $_GET['id'];
    $email = $_GET['email'];
    $password = $_GET['password'];
    $select_query = "SELECT * FROM student WHERE
        email = '$email' AND password = '$password'";
        
        //query run command
    $result = mysqli_query($conn, $select_query);

    //check data aaya ya nahi
    $rows = mysqli_fetch_assoc($result);

    if($rows > 0) {
        $_SESSION['id'] = $rows['id'];
        $_SESSION['userName'] = $rows['fullName'];
        echo '<script>
            alert("Login successfull");
            window.location.href = "usersRecords/cpanal.php";
            </script>'; 
    }else {        
        echo '<script>
            alert("Invalid Email or Password");
            window.location.href = "login.php";
            </script>';

    }


?>