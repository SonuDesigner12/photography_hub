<?php
          echo "file add";
          include("db.php");
      
          // get data from form...
      
          $fullName = $_POST['fullName'];
          $password = $_POST['password'];
          $email = $_POST['email'];
          $Phone = $_POST['Phone'];
          $dob = $_POST['dob'];
          $textarea = $_POST['textarea'];

          // same email not allow
        $getData = "SELECT * FROM student WHERE email = '$email'";
        $getdataQueryStart = mysqli_query($conn, $getData);
        $getDataR = mysqli_num_rows($getdataQueryStart);

        if($getDataR > 0) {
          echo '<script>
                  alert("Email already exist.");
                  window.location.href = "resistration.php";
                </script>'; 
        }
        else {
              $insert_data = "INSERT INTO student (`fullName`, `password`, `email`, `phone`, `dob`, `msg`) VALUES ('$fullName','$password','$email','$Phone','$dob','$textarea')";
          
              $run_sql = mysqli_query($conn, $insert_data);
          
              if($run_sql) {
                echo '<script>
                        alert("Thanks for resistration.");
                        window.location.href = "login.php";
                      </script>'; 
              }else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
              }

        }
          mysqli_close($conn);

          
    
?>