$(document).ready(function() {

// this file contains 2 event listeners for socks_update.php
// socks_update.php writes one of 2 forms into the HTML
// one form lets us EDIT an existing sock record
// the other lets us DELETE an existing sock record
// depending on which form was submitted, one of the
// 2 following scripts will run

// if delete
$("#socksdelete").on("submit", function(e) {
  e.preventDefault();

  // get the value of the radio button: yes or no
  var destroy = $('input[name=destroy]:checked', '#socksdelete').val();
  // uncheck both radio buttons
  yes.checked = false;
  no.checked = false;
  // get the value of the id from hidden field
  var id = $('#id').val();
  // empty the id value
  $('#id').val('');

  if (destroy !== "yes") {
    // replace form in socks_update.php with this paragraph
    $( "#inner_content" ).html("<p class='announce'>The record was not deleted.</p>");
  } else {
    // create dataString variable for Ajax
    var dataString = 'id=' + id;

  	$.ajax({
  		url:  "delete.php",
  		type: "POST",
  		data: dataString,
  		success: function(response) {
        $( "#inner_content" ).html("<p class='announce'>The record has been deleted.</p>");
        // response comes from the PHP script (echo)
        console.log(response);
      }, // end success
      error: function(xhr, status, err) {
        alert("Error! Message from server: " + xhr.status + " " + err);
      } // end error
    }); // end ajax
  }     // end if-else
});     // end $("#socksdelete").on("submit", function(e) {

// if update
$("#sockupdate").on("submit", function(e) {
  // here we do NOT .preventDefault() because we ARE submitting the form
	$.ajax({
		url:  "update.php",
		type: "POST",
		data: $(this).serialize(),
		success: function(response) {
      // response comes from the PHP script (echo)
      console.log(response);
    }, // end success
    error: function(xhr, status, err) {
      alert("Error! Message from server: " + xhr.status + " " + err);
    } // end error
  }); // end ajax
});   // end $("#sockupdate").on("submit", function(e) {

  // --- data: $(this).serialize(), ---
  // takes the form data and puts all of it into a single string
  // that the PHP script can read - NOTE - requires
  // a unique NAME attribute for every form element or it
  // WILL NOT WORK


}); // close document ready
