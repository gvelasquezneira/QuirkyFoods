<?php
	include 'database.php';
	$query = "SELECT * FROM socks ORDER BY name";
	$socks = mysqli_query($conn, $query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name=viewport content="width=device-width, initial-scale=1">
	<title> Sock Market Inventory </title>
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/table.css">
</head>

<body>
<div id="container">

<h1>Sock Market Inventory</h1>

<p class="middle"><a href="enter_new_record.php">Add a new sock record</a></p>

<p class="middle">To update or delete a row, select it below.</p>

<p class="middle">Then click the Submit button at the bottom of the table.</p>

<!--
     the form below is handled by the PHP file named in the action= attribute
-->
<form class="smallform" method="post" action="socks_edit.php" autocomplete="off">
	
<table>
	<!-- table column headings -->
	<tr>
	  <th>Select</th>
	  <th>Name</th>
	  <th>Style</th>
	  <th>Color</th>
	  <th>Quantity</th>
	  <th>Price</th>
	  <th>Updated</th>
	</tr>

<!-- Begin PHP while-loop to display database query results
     with each row enclosed in TD tags.
     Each time it loops, it writes ONE ROW.
	 This code depends on the first 5 lines at the start of this file.
	 $socks comes from that code.
	 NOTE all form controls must have a name= attribute.
     -->
<?php while ($row = mysqli_fetch_assoc($socks)) :  ?>

<tr>
  <td><input type="radio" name="id" id="<?php echo $row['id']; ?>"
	   value="<?php echo $row['id']; ?>"></td>
  <!-- notice how, above, the database record id becomes
       the id and value of the radio button -->
  <td><?php echo stripslashes($row['name']); ?></td>
  <td><?php echo $row['style']; ?></td>
  <td><?php echo $row['color']; ?></td>
  <td><?php echo $row['quantity']; ?></td>
  <td><?php echo $row['price']; ?></td>
  <td><?php echo $row['updated']; ?></td>
</tr><!-- end of HTML table row -->

<?php endwhile;  ?>
<!-- end the PHP while-loop
     everything else on this page is normal HTML -->

</table>

<input type="submit" id="submit" value="Submit One Row for Editing">

<!-- close the form -->
</form>

<p class="middle"><a href="enter_new_record.php">Add a new sock record</a></p>

</div> <!-- close container -->
</body>
</html>
