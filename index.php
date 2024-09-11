<?php
    include "functions.php";
    include "settings.php";
?>

<!DOCTYPE html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link href="css/styles.css" rel="stylesheet">
</head>
<html>
    <body class="d-flex flex-column min-vh-100">
        <nav><?php include "navbar.php" ?></nav>
        
        <div class="content-container text-center container-shadow">
            <h2>Regex Form Example</h2>
            <form action="" method="get">

                <!-- Name field -->
                <input type="text" name="fName" placeholder="Enter your name">
                <?php if (!empty($_GET['fName'])) {
                    if (validateName($_GET['fName'])) {
                        echo('<div style="display: inline-block;"><h4>Valid!</h4></div>');
                    } else {
                        displayNameError('name');
                    }
                } ?><br />

                <!-- Email field -->
                <input type="text" name="email" placeholder="Enter your email">
                <?php if (!empty($_GET['email'])) {
                    if (validateEmail($_GET['email'])) {
                        echo('<div style="display: inline-block;"><h4>Valid!</h4></div>');
                    } else {
                        displayNameError('email');
                    }
                } ?><br />

                <!-- Phone field -->
                <input type="text" name="phoneNumber" placeholder="Enter your phone number">
                <?php if (!empty($_GET['phoneNumber'])) {
                    if (validatePhone($_GET['phoneNumber'])) {
                        echo('<div style="display: inline-block;"><h4>Valid!</h4></div>');
                    } else {
                        displayNameError('phone number');
                    }
                } ?><br />

                <button type="Submit" class="btn mb-1 mt-1 sub">Submit</button>
            </form>
        </div>

        <?php include "footer.php" ?>
    </body>
</html>