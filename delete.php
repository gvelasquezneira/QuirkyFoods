<?php

include 'database.php';

// this script deletes an exisiting record based on the id
// it is called by a fetch command in update.js

// erase any HTML tags and then escape all quotes
function sanitizeMySQL($conn, $var) {
    $var = strip_tags($var);
    $var = mysqli_real_escape_string($conn, $var);
    return $var;
}

// check whether the key 'id' was received via POST
if ( isset($_POST['id']) ) {

  // this id value came from the form
  $id = sanitizeMySQL($conn, $_POST['id']);

  // the prepared statement - note: a question mark represents
  // a variable we will send to database separately
  // BE VERY CAREFUL with the DELETE STATEMENT!!!
  $query = "DELETE FROM quirkyfoodcombos WHERE id = ?";

  // another if-statement inside the first one ensures that
  // code runs only if the statement was prepared
  if ($stmt = mysqli_prepare($conn, $query)) {
    // bind the value to replace the question mark
    // i - integer
    mysqli_stmt_bind_param($stmt, 'i', $id);
    // execute the prepared statement
    mysqli_stmt_execute($stmt);
    // close the prepared statement
    mysqli_stmt_close($stmt);
    // close db connection
    mysqli_close($conn);
    // return a message to Ajax
    echo "Deletion was successful.";
  }
} else {
  echo "Failed to delete!";
}

?>
