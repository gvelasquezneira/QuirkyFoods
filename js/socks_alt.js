$(document).ready(function() {

$("#response").hide();

$("#sockform").on("submit", function(e) {
    e.preventDefault();

	$.ajax({
		url:  "socks2.php",
		type: "POST",
		data: $(this).serialize(),
		success: function(html) {
            $("#socks").hide();
            $("#response").show();
        },
        error: function (jqXHR, status, err) {
            alert("Error!");
        }
        // --- data: $(this).serialize(), ---
        // takes the form data and puts all of it into a single string
        // that the PHP script can read - requires a unique
        // name attribute for every form input element
    });

});

}); // close document ready
