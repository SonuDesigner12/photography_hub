<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>resistration</title>
    <!--font awsome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/resistration.css">
</head>

<body>
    <!--header-->
    <?php
        include("components/header.php");
    ?>

        <!-- absolute div */-->
    <!-- <div class="validation_error">
        <p></p>
    </div> -->

    <!--resistration form-->
    <form action="submitData.php" method="post">
        <!-- Text input -->
        <label for="text">Full Name:</label>
        <input type="text" id="name" name="fullName" onkeyup="validateName()">
        <span id ="name-error" style="color: red;"></span><br><br>


        <!-- Email input -->
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" onkeyup="validateEmail()">
        <span id ="email-error" style="color: red;"></span><br><br>

        <!-- Telephone input -->
        <label for="phone">Phone Number:</label>
        <input type="number" id="phone" name="Phone" onkeyup="validatePhone()">
        <span id ="phone-error" style="color: red;"></span><br><br>

        <!-- Date input -->
        <label for="dob">Date of birth:</label>
            <input type="date" id="dob" name="dob">
        <span id ="dob-error" style="color: red;"></span><br><br>

             <!-- Password input -->
        <label for="password">Password:</label>
            <input type="password" id="password" name="password" onkeyup="validatePassword()">
        <span id ="password-error" style="color: red;"></span><br><br>


        <!-- Checkbox input -->
        <!-- <label for="checkbox" id="sport">which game you like to play:</label>
         <div style="display: flex;gap: 5px;">
            Football<input type="checkbox" id="checkbox1" name="checkbox" value="Football">
            cricket<input type="checkbox" id="checkbo2" name="checkbox" value="cricket">
            hockey<input type="checkbox" id="checkbox3" name="checkbox" value="hockey">
            Swimming<input type="checkbox" id="checkbox4" name="checkbox" value="Swimming">
            Basketball<input type="checkbox" id="checkbox5" name="checkbox" value="Basketball">
        </div>
        <br><br> -->

        <!-- Radio input -->
        <!-- <label for="gender">Gender:</label>
        <div class="radio-group" style="display: flex;gap: 5px;">
            <input type="radio" id="male" name="gender" value="male">
            <label for="male">Male</label>
            <input type="radio" id="female" name="gender" value="female">
            <label for="female">Female</label>
        </div><br><br> -->

        <!-- Textarea -->
        <label for="textarea">Comments:</label>
            <textarea id="message" name="textarea" onkeyup="validateMessage()"></textarea>
        <span id ="message-error" style="color: red;"></span><br><br>

        <!-- Submit button -->
        <div class="btn">
            <input type="submit" value="Submit" name="submit_data" id="submit_data" onclick=" return validateForm()">
            <input type="reset" value="Reset">
            <span id ="submit-error" style="color: red;"></span>
        </div>
        <p class="signin">Have an account? <a href="login.php">Sign In</a> </p>
    </form>

    <!--footer section -->
    <?php include("components/footer.php");?>
    <script src="js/resister.js"></script>
</body>

</html>