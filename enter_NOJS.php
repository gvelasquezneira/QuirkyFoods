<?php

include 'database.php';

// use of prepared statements - SQL

// erase any HTML tags and then escape all quotes
// this is used on each value that came from the HTML form
function sanitizeMySQL($conn, $var) {
    $var = strip_tags($var);
    $var = mysqli_real_escape_string($conn, $var);
    return $var;
}

?>

<!-- start HTML -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name=viewport content="width=device-width, initial-scale=1">
    <title> Sock Market - New Record Result Message </title>
    <link rel="stylesheet" href="css/main.css">
</head>

<body>
<div id="container">

<h1>New Record Result</h1>

<p class="middle"><a href="inventory_update.php">View full inventory</a></p>


<!-- empty DIV and P to be filled by the server response -->
<div id="response">
  <p class="announce">
    <!-- HTML will continue after the large block of PHP code -->


<?php
// ensure that form values were received
if (isset($_POST['name']) && isset($_POST['style'])) {

    // sanitizeMySQL() is a custom function, written below
    $name = sanitizeMySQL($conn, $_POST['name']);
    $style = sanitizeMySQL($conn, $_POST['style']);
    $color = sanitizeMySQL($conn, $_POST['color']);
    $quantity = sanitizeMySQL($conn, $_POST['quantity']);
    $price = sanitizeMySQL($conn, $_POST['price']);

    // create a PHP timestamp
    date_default_timezone_set('America/New_York');
    $date = date('m-d-Y', time());

    // the prepared statement - note: 6 question marks represent
    // 6 variables we will send to database separately
    $query = "INSERT INTO socks (name, style, color, quantity, price, updated)
    VALUES (?, ?, ?, ?, ?, ?)";

    // prepare the statement in db
    if ( $stmt = mysqli_prepare($conn, $query) ) {

        // bind the values to replace the 6 question marks
        // note that 6 letters in 'sssids' MUST MATCH data types in table
        // Type specification chars:
        // i - integer, s - string , d - double (decimal), b - blob
        mysqli_stmt_bind_param($stmt, 'sssids',
        $name,
        $style,
        $color,
        $quantity,
        $price,
        $date
        );

        // executes the prepared statement with the values already set, above
        mysqli_stmt_execute($stmt);
        // close the prepared statement
        mysqli_stmt_close($stmt);
        // close db connection
        mysqli_close($conn);
    } // end of prepare if-statement

    // the following will be written into the HTML if new record successful
    echo "New record for " . $name . " entered successfully.";
} else {
    // the following will be written into the HTML if writing to db failed
    echo "Failed to enter new record!";
} // end of isset if-statement

?>
<!-- PHP ends and HTML continues -->

</p><!-- close #response P -->
</div><!-- close #response DIV -->
</div> <!-- close container -->

</body>
</html>
