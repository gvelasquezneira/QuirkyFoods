<?php include 'database.php'; ?>
<?php
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

<h1>Sock Market Simple Inventory</h1>

<p class="middle">This page has only a table. There is no form.</p>

<table>
    <tr>
        <th>Name</th>
        <th>Style</th>
        <th>Color</th>
        <th>Quantity</th>
        <th>Price</th>
        <th>Updated</th>
    </tr>
<!-- begin PHP while-loop to display database query results
     with each row enclosed in LI tags -->
<?php while($row = mysqli_fetch_assoc($socks)) :  ?>

<tr>
    <td><?php echo $row['name']; ?></td>
    <td><?php echo $row['style']; ?></td>
    <td><?php echo $row['color']; ?></td>
    <td><?php echo $row['quantity']; ?></td>
    <td><?php echo $row['price']; ?></td>
    <td><?php echo $row['updated']; ?></td>
</tr>

<?php endwhile;  ?>
<!-- end the PHP while-loop
     everything else on this page is normal HTML -->

</table>

<p class="middle"><a href="enter_new_record.php">Add socks</a>: Open the sock entry form.</p>

</div> <!-- close container -->
</body>
</html>
