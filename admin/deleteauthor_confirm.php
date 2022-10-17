<?php

// check user is logged in...
if (isset($_SESSION['admin'])) {
    echo "you are logged in";

    // get authors from database

    // initialise author form

} // end user logged in if

else {
    $login_error = 'Please login to access this page';
    header("Location: index.php?page=../admin/login&error");
    
} // end user not logged in else

?>