<?php
include("db.php");
        // Collect form data
        $name = $_POST['fullname'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $msg = $_POST['msg'];


            // Prepare
            $insert_query = "INSERT INTO applications (name, phone, email, password, msg) VALUES ('$name', '$phone', '$email', '$password', '$msg')";
        
            // Execute the statement
            $result = mysqli_query($conn, $insert_query);
            if ($result) {
                echo  "Application send";
                header('location: index.php');
              } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
              }
              
          mysqli_close($conn);
    
?>