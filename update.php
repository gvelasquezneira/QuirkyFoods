<?php include 'database.php'; ?>

<?php
// this scripts updates an exisiting record based on the id
// it is called by an Ajax command in update.js

if ( isset($_POST['id']) && isset($_POST['food_combo']) ) {

  // sanitizeMySQL() is a custom function, written below
  // these values came from the form
  $id = sanitizeMySQL($conn, $_POST['id']);
  $food_combo = sanitizeMySQL($conn, $_POST['food_combo']);
  $flavor = sanitizeMySQL($conn, $_POST['flavor']);
  $time = sanitizeMySQL($conn, $_POST['time']);

  // create a new PHP timestamp
  date_default_timezone_set('America/New_York');
  $date = date('m-d-Y', time());

  // the prepared statement - note: question marks represent
  // variables we will send to database separately
  // we don't check which fields the user changed - we just update all
  $query = "UPDATE food_combos SET food_combo = ?,
    flavor = ?,
    time = ?,
    updated = ?
  WHERE id = ?";

  // prepare the statement in db
  if ( $stmt = mysqli_prepare($conn, $query) ) {

    // bind the values to replace the question marks
    // the order matters! so id is at end!
    // note that 5 letters in 'ssssi' MUST MATCH data types in table
    // Type specification chars:
    // i - integer, s - string , d - double (decimal), b - blob
    mysqli_stmt_bind_param($stmt, 'sssdi',
    $food_combo,
    $flavor,
    $time,
    $date,
    $id
    );

    // executes the prepared statement with the values already set, above
    mysqli_stmt_execute($stmt);
    // close the prepared statement
    mysqli_stmt_close($stmt);
    // close db connection
    mysqli_close($conn);
    echo "Update to " . $food_combo . " succeeded.";
  }
} else {
  echo "Failed to update!";
}

// erase any HTML tags and then escape all quotes
function sanitizeMySQL($conn, $var) {
    $var = strip_tags($var);
    $var = mysqli_real_escape_string($conn, $var);
    return $var;
}

?>
