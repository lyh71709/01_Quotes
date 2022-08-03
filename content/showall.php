<h2>All Results</h2>

<?php

$find_sql = "SELECT * FROM `quotes`
JOIN author ON (`author`.`AuthorID` = `quotes`.`AuthorID`)
";
$find_query = mysqli_query($dbconnect, $find_sql);
$find_rs = mysqli_fetch_assoc($find_query);

?>