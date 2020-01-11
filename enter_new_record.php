<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name=viewport content="width=device-width, initial-scale=1">
    <title> Sock Market - Enter </title>
    <link rel="stylesheet" href="css/main.css">
</head>

<body>
<div id="container">

<h1>Sock Market: Enter New Socks</h1>

<p class="middle"><a href="inventory_update.php">View full inventory</a></p>

<div id="socks">

<!-- this form is handled by the JavaScript file linked at bottom -->
<form id="sockform" method="post" autocomplete="off">

  <label for="name">Name </label>
	<input type="text" name="name" id="name" maxlength="20" required>

    <label for="style">Style </label>
    <select name="style" id="style" required>
        <option value=""></option>
        <option value="ankle">ankle</option>
        <option value="knee-high">knee-high</option>
        <option value="mini">mini</option>
        <option value="other">other</option>
    </select>

  <label for="color">Color </label>
	<input type="text" name="color" id="color" maxlength="50" required>

  <label for="quantity">Quantity </label>
	<input type="number" name="quantity" id="quantity" max="999" required>

  <label for="price">Unit Price </label>
	<input type="number" name="price" id="price" max="99.99" step="0.01" required>
    <!-- step="0.01" (above) allows decimal to be entered -->

	<input type="submit" id="submit" value="Submit">
</form>
<!-- close the form -->

</div> <!-- close #socks -->

<div id="response">
    <p class="announce">Thanks for submitting the form!</p>
    <p class="middle"><a href="enter_new_record.php">Return to the form</a></p>
</div>

</div> <!-- close container -->

<script src="js/enter.js"></script>

</body>
</html>
