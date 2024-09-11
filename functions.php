<?php

    // validates the inputted phone number and return true of valid, false if not
    function validatePhone(string $phoneNumber): bool {
        return preg_match(PHONE_PATTERN, $phoneNumber);
    }

    // validate the inputted email
    function validateEmail(string $email): bool {
        return preg_match(EMAIL_PATTERN, $email);
    }

    // validate the inputted name
    function validateName(string $name): bool {
        return preg_match(NAME_PATTERN, $name);
    }

    // display validation error
    function displayNameError($error_name) {
        echo("<div class='error' style='display: inline-block;'><h4>Not a valid $error_name</h4></div>");
    }

?>