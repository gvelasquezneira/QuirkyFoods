$(document).ready(function() {

  $("#response").hide();

  $("#sockform").on("submit", function(e) {
    e.preventDefault();

    $.ajax({
      url: "enter.php",
      type: "POST",
      data: $(this).serialize(),
      success: function(response) {
        $("#socks").hide();
        $("#response").show();
      },
      error: function(xhr, status, err) {
        alert("Error! Message from server: " + xhr.status + " " + err);
      }
      // --- data: $(this).serialize(), ---
      // takes the form data and puts all of it into a single string
      // that the PHP script can read - NOTE - requires
      // a unique NAME attribute for every form element or it
      // WILL NOT WORK
    });

  });

}); // close document ready
