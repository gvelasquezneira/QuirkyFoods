<?php include 'database.php'; ?>

<?php
    // this is the "prepared statement" version of this file

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

    $stmt = mysqli_prepare($conn, $query);

    // next, the values to replace the 6 question marks
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

    // this will return 1 if INSERT INTO was successful
    $result = mysqli_affected_rows($conn);

    // this will be returned to the .ajax success function
    if ($result > 0) {
        echo "You entered: ";
        echo $name . ", ". $style . ", ". $color . ", ". $quantity . ", ". $price;
    }

        mysqli_stmt_close($stmt);
        mysqli_close($conn);
}

// erase any HTML tags and then escape all quotes
function sanitizeMySQL($conn, $var) {
    $var = strip_tags($var);
    $var = mysqli_real_escape_string($conn, $var);
    return $var;
}

?>
