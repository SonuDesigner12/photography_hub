<?php
    session_start();

    include("../db.php");
    $id = $_SESSION['id'];
    echo $id;
    $view_query = "SELECT * FROM student WHERE id = $id" ;
    $run_view_query = mysqli_query($conn, $view_query) or die("Query unsuccessfull.");

    $row = mysqli_num_rows($run_view_query);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Table</title>
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f9;
        margin: 0;
        padding: 0;
        /* display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh; */
    }
    .container {
        /* width: 80%; */
        margin: 0 auto;
    }

    .student-table {
        width: 100%;
        border-collapse: collapse;
        background-color: #ffffff;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .student-table th,
    .student-table td {
        padding: 12px;
        text-align: left;
    }

    .student-table thead {
        background-color: #007bff;
        color: white;
    }

    .student-table tbody tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    .student-table tbody tr:hover {
        background-color: #ddd;
    }

    .student-table th {
        border-bottom: 2px solid #dddddd;
    }

    .student-table td {
        border-bottom: 1px solid #dddddd;
    }

    h1 {
        text-align: center;
        text-transform: uppercase;
    }

    .btn a {
        background: red;
        padding: 5px 8px;
        border: none;
        border-radius: 5px;
        padding: 5px 8px;
        border: none;
        border-radius: 5px;
        margin-bottom: 7px;
        display: flex;
        cursor: pointer;
        text-decoration: none;
    }

    .btn .edit_btn {
        color: black;
        background: yellow;
    }

    .btn .delete_btn {
        color: white;
        background: #ff3e3e;
    }

    .header {
        background-color: #f0f0f0;
        background-color: #f0f0f0;
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 0 100px;

    }

    .header .logo {
        font-size: 30px;
        text-transform: uppercase;

    }

    .header .Logout_btn {
        padding: 10px 20px;
        color: white;
        border: none;
        background: #e00000;
        border-radius: 5px;
        font-weight: 800;
        cursor: pointer;

    }

    .hero {
        width: 100%;
        /* height: 90vh; */
        text-align: center;
        margin: 50px auto;

    }

    .hero h1 {
        font-size: 40px;
        text-transform: uppercase;


    }

    .hero span {
        color: blue;
    }
</style>
</head>

<body>
    <div class="header">
        <div class="logo">
            <h1>logo</h1>
        </div>
        <div class="logout">
            <a href="logout.php" class="Logout_btn" name="logout" type="submit">Logout</a>
        </div>
    </div>
    <div class="hero">
        <h1>welcome <span> <?php echo $_SESSION['userName']; echo $_SESSION['id']; ?></span></h1>
    </div>

    <hr style="margin-bottom: 20px;">
    <div class="container">
        <table class="student-table">
            <h1 style="margin-bottom: 20px;"> All student records </h1>
            <thead>
                <tr>
                    <th>Student ID</th>
                    <th>Full Name</th>
                    <th>Password</th>
                    <th>Email</th>
                    <th>phone Number</th>
                    <th>Data of Birth</th>
                    <th>Your Comment</th>
                    <th>Action</th>

                </tr>
            </thead>
            <tbody>
                <?php
                if($row > 0) {
                    $rows = mysqli_fetch_assoc($run_view_query); { ?>
                <tr>
                    <td><?php echo $rows['id'] ?></td>
                    <td><?php echo $rows['fullName'] ?></td>
                    <td><?php echo $rows['password'] ?></td>
                    <td><?php echo $rows['email'] ?></td>
                    <td><?php echo $rows['phone'] ?></td>
                    <td><?php echo $rows['dob'] ?></td>                 
                    <td><?php echo $rows['msg'] ?></td>
                    <td class="btn">
                        <a class="edit_btn" href="edit.php?id=<?php echo $rows['id'] ?>">Edit</a>
                        <!-- <a class="delete_btn" href="delete.php?id=<?php echo $rows['id'] ?>">Delete</a> -->
                    </td>
                </tr>
                <?php   
                }
                }
               

                ?>
            </tbody>
        </table>
    </div>
</body>

</html>