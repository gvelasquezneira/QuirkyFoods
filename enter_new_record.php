<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name=viewport content="width=device-width, initial-scale=1">
    <title> quirkyfoods - Enter </title>
    <link rel="stylesheet" href="css/main.css">
</head>

<body>
<div id="container">

<h1>Quirky Foods: Enter New Recipes</h1>

<p class="middle"><a href="inventory_update.php">View full inventory</a></p>

<div id="socks">

<!-- this form is handled by the JavaScript file linked at bottom -->
<form id="sockform" method="post" action="" autocomplete="off">

  <label for="food_combo">Food Combination </label>
	<input type="text" name="food_combo" id="name" maxlength="500" required>

    
  <label for="flavor">Food Combination Explanation </label>
	<input type="text" name="flavor" id="color" maxlength="500" required>

  <label for="time">When do you eat it? </label>
    <select name="time" id="style" required>
        <option value=""></option>
        <option value="Breakfast">Breakfast</option>
        <option value="Lunch">Lunch</option>
        <option value="Dinner">Dinner</option>
        <option value="Linner">Linner</option>
        <option value="Snack">Snack</option>
        <option value="Midnight Snack">Midnight Snack</option>
    </select>


	<input type="submit" id="submit" value="Submit">
</form>
<!-- close the form -->

</div> <!-- close #socks -->

<!-- empty div -->
<div id="response"></div>

</div> <!-- close container -->

<script src="js/enter.js"></script>

</body>
</html>
