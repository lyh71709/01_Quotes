<?php

if(!isset($_REQUEST['authorID']))
{
    header('Location: index.php');
}

$find_sql = "SELECT * FROM `quotes`
JOIN author ON (`author`.`AuthorID` = `quotes`.`AuthorID`)
";
$find_query = mysqli_query($dbconnect, $find_sql);
$find_rs = mysqli_fetch_assoc($find_query);



<h2>All Results</h2>

<?php



// Loop through results and display them
do {

    $quote = preg_replace('/[^A-Za-z0-9.,\s\'\-]/', ' ', $find_rs['Quote']);

    include("get_author.php");

    ?>

<div class="results">
    <p>
        <?php echo $quote; ?><br />
        <!-- display author name -->
        <a href="index.php?page=author&authorID=<?php echo $find_rs['AuthorID']; ?>">
        <?php echo $full_name; ?>
        </a>
    </p>

    <?php include("show_subjects.php"); ?>

</div>

<br />

<?php
} // end of display results 'do'

while($find_rs = mysqli_fetch_assoc($find_query))

?>