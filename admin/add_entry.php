<?php

// check user is logged in...
if (isset($_SESSION['admin'])) {
    
    $author_ID = $_SESSION['Add_Quote'];
    echo "AuthorID: ".$author_ID;

    // Get subjects / topic list from database
    $all_tags_sql = "SELECT * FROM `subject` ORDER BY `Subject` ASC ";
    $all_subjects = autocomplete_list($dbconnect, $all_tags_sql, 'Subject');

    // initialise form variable for quote
    $quote = "Please type your quote here";
    $notes = "";
    $tag_1 = "";
    $tag_2 = "";
    $tag_3 = "";

    // initialise tag ID's
    $tag_1_ID = $tag_2_ID = $tag_3_ID = 0;

    $has_errors = "no";

    // set up error fields / visibility
    $quote_error = $tag_1_error = "no-error";
    $quote_field = "form-ok";
    $tag_1_field = "tag-ok";

} // end user logged in if

else {
    $login_error = 'Please login to access this page';
    header("Location: index.php?page=../admin/login&error");
    
} // end user not logged in else

?>