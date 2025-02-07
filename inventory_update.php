<?php
	include 'database.php';
	$query = "SELECT * FROM quirkyfoodcombos ORDER BY flavor";
	$food_combo = mysqli_query($conn, $query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name=viewport content="width=device-width, initial-scale=1">
	<title> Quirky Food Recipes </title>
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/table.css">
</head>

<body>
<div id="container">

<h1>Quirky Food Recipes</h1>

<!--
     the form below is handled by the PHP file named in the action= attribute
-->
<form class="smallform" method="post" action="socks_edit.php" autocomplete="off">
	
<table>
	<!-- table column headings -->
	<tr>
      <th>Food Combination</th>
      <th>Flavors</th>
      <th>Time of Day</th>
	  <th>Date entered</th>
	</tr>

<!-- Begin PHP while-loop to display database query results
     with each row enclosed in TD tags.
     Each time it loops, it writes ONE ROW.
	 This code depends on the first 5 lines at the start of this file.
	 $socks comes from that code.
	 NOTE all form controls must have a name= attribute.
     -->
<?php while ($row = mysqli_fetch_assoc($food_combo)) :  ?>

<tr>
		<!-- notice how, above, the database record id becomes
			the id and value of the radio button -->
		<td><?php echo stripslashes($row['food_combo']); ?></td>
		<td><?php echo $row['flavor']; ?></td>
		<td><?php echo $row['time']; ?></td>
		<td><?php echo $row['date']; ?></td>
		</tr><!-- end of HTML table row -->

<?php endwhile;  ?>
<!-- end the PHP while-loop
     everything else on this page is normal HTML -->

</table>

<p class="middle"><a href="enter_new_record.php">Add a new, weird food combo</a></p>

<p class="middle"><a href="index.html">Return to front page.</a></p>

<!-- close the form -->
</form>

</div> <!-- close container -->
</body>
</html>
