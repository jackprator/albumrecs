<?php
	include 'database.php';
	$query = "SELECT * FROM albums ORDER BY artist";
	$album = mysqli_query($conn, $query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name=viewport content="width=device-width, initial-scale=1">
	<title> Album Recommendations </title>
  <link rel="stylesheet" href="css/bootstrap.min (2).css">
</head>

<body>
  <div class ="container">
    <div class="row">
      <div class="col">
<div id="container">

<h1 class="text-center">What're you listening to?</h1>

<p><a href="enter_new_album.php">Add a new album recommendation</a></p>

<table class="table table-dark table-striped table-hover">
	<!-- table column headings -->
  <thead>
	<tr>
	  <th>Album</th>
	  <th>Artist</th>
	  <th>Genre</th>
	  <th>Favorite track</th>
	</tr>
</thead>
<tbody>
<!-- Begin PHP while-loop to display database query results
     with each row enclosed in TD tags.
     Each time it loops, it writes ONE ROW.
	 This code depends on the first 5 lines at the start of this file.
	 $socks comes from that code.
	 NOTE all form controls must have a name= attribute.
     -->
<?php while ($row = mysqli_fetch_assoc($album)) :  ?>

<tr>

  <td><?php echo stripslashes($row['album']); ?></td>
  <td><?php echo stripslashes($row['artist']); ?></td>
  <td><?php echo stripslashes($row['genre']); ?></td>
  <td><?php echo stripslashes($row['favsong']); ?></td>
</tr><!-- end of HTML table row -->

<?php endwhile;  ?>
<!-- end the PHP while-loop
     everything else on this page is normal HTML -->
</tbody>
</table>

</div> <!-- close container -->
</div>
</div>
</div>
</body>
</html>
