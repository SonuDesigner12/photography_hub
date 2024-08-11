<?php
// Include database connection
include('../db.php');

// Check if an ID is provided
if (!isset($_GET['id'])) {
    die("No ID provided.");
}

$id = $_GET['id']; // Ensure ID is an integer

// Fetch data for the given ID
$dataGet_query = "SELECT * FROM student WHERE id = $id";
$result = $conn->query($dataGet_query);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
} else {
    die("No record found.");
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieve and sanitize form data
    $fullName = ($_POST['fullName']);
    $password = ($_POST['password']);
    $email = ($_POST['email']);
    $Phone = ($_POST['Phone']);
    $dob = ($_POST['dob']);
    $textarea = ($_POST['textarea']);


    // Update query
    $update_query = "UPDATE student SET
        fullName = '$fullName',
        password = '$password',
        email = '$email',
        phone = '$Phone',
        dob = '$dob',
        msg = '$textarea'
        WHERE id = '$id' ";

    if ($conn->query($update_query) === TRUE) {
        echo "Record updated successfully.";
        header('location: cpanal.php');
    } else {
        echo "Error updating record: " . $conn->error;
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Student Record Update Form</title>
    <link rel="stylesheet" href="../css/editStyle.css">
</head>
<body>
    <h2>Student Record Update Form</h2>

    <form action="" method="post">
        <!-- Text input -->
        <label for="text">Full Name:</label>
        <input type="text" id="name" name="fullName" onkeyup="validateName()" value="<?php echo ($row['fullName']); ?>">
        <span id ="name-error" style="color: red;"></span><br><br>


        <!-- Email input -->
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" onkeyup="validateEmail()" value="<?php echo ($row['email']); ?>">
        <span id ="email-error" style="color: red;"></span><br><br>

        <!-- Telephone input -->
        <label for="phone">Phone Number:</label>
        <input type="number" id="phone" name="Phone" onkeyup="validatePhone()" value="<?php echo ($row['phone']); ?>">
        <span id ="phone-error" style="color: red;"></span><br><br>

        <!-- Date input -->
        <label for="dob">Date of birth:</label>
            <input type="date" id="dob" name="dob" value="<?php echo ($row['dob']); ?>">
        <span id ="dob-error" style="color: red;"></span><br><br>

             <!-- Password input -->
        <label for="password">Password:</label>
            <input type="password" id="password" name="password" onkeyup="validatePassword()" value="<?php echo ($row['password']); ?>">
        <span id ="password-error" style="color: red;"></span><br><br>

        <!-- Textarea -->
        <label for="textarea">Comments:</label>
            <textarea id="message" name="textarea" onkeyup="validateMessage()">
                <?php echo ($row['msg']); ?>
            </textarea>
        <span id ="message-error" style="color: red;"></span><br><br>

        <!-- Submit button -->
        <div class="btn">
            <input type="submit" value="Submit" name="submit_data" id="submit_data" onclick=" return validateForm()">
            <input type="reset" value="Reset">
            <span id ="submit-error" style="color: red;"></span>
        </div>
        <p class="signin">Have an account? <a href="login.php">Sign In</a> </p>
    </form>



    <script src="../js/resister.js"></script>
</body>
</html>
