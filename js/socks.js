$(document).ready(function() {

$("#sockform").on("submit", function(e) {

	$.ajax({
		url:  "socks.php",
		type: "POST",
		data: $(this).serialize(),
		success: function(html) {
			alert(html);
        },
        error: function (jqXHR, status, err) {
            alert("Error!");
        }
        // --- data: $(this).serialize(), ---
        // takes the form data and puts all of it into a single string
        // that the PHP script can read - requires a unique
        // name attribute for every form input element
    });
    return true;
});

}); // close document ready
