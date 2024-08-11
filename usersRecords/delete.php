<?php
    echo "file add";
        include("../db.php");

        $id = $_GET['id'];
        echo $id;
        $delete_query = "DELETE FROM student WHERE id = '$id'";

        $delete_query_run = mysqli_query($conn, $delete_query);

        if($delete_query) {
            // echo "<script> confirm('sure to delete data'); </script>";
            header('location: cpanal.php');   
        }




?>