<!-- Define sopme constants -->

<?php

    $date = getdate();

    define('SITE_NAME', 'Regex Example');
    const COPYRIGHT_NOTICE = 'Randall Volkmar';
    define('CURR_YEAR', $date['year']);

    // a variable to hold the pattern for the phone input that we want to match against
    const PHONE_PATTERN = "/[0-9]{3}[-.]?[0-9]{3}[-.]?[0-9]{4}/";

    // a variable to hold the email pattern
    const EMAIL_PATTERN = "/[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+/";

    // a variable to hold the name pattern
    const NAME_PATTERN = "/^[a-zA-Z ]+$/";

?>