<?php require_once 'core/dbConfig.php'; ?>
<?php require_once 'core/models.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<style>
		body {
			font-family: "Arial";
		}
		input {
			font-size: 1.5em;
			height: 50px;
			width: 200px;
		}
		table, th, td {
		  border:1px solid black;
		}
	</style>
</head>
<body>
	<h3>Welcome to the Student Management System. Input your details here to register</h3>
	<form action="core/handleForms.php" method="POST">
		<p><label for="names">names</label> <input type="text" name="names"></p>
		<p><label for="age">age </label> <input type="text" name="age"></p>
		<p><label for="fave_book">fave book</label> <input type="text" name="fave_book"></p>
		<p><label for="fave_genre">fave genree</label> <input type="text" name="fave_genre"></p>
		<p><label for="degree">degree</label> <input type="text" name="degree"></p>
		<p><label for="experience">experience</label> <input type="text" name="experience"></p>
			<input type="submit" name="insertbtn">
		</p>
	</form>

	<table style="width:50%; margin-top: 50px;">
	  <tr>
	    <th>lib_id</th>
	    <th>names</th>
	    <th>age</th>
	    <th>fave_book</th>
	    <th>fave_genre</th>
	    <th>degree</th>
	    <th>experience</th>
	    <th>Action</th>
	  </tr>

	  <?php $seeAlllibrarian = seeAlllibrarian($pdo); ?>
	  <?php foreach ($seeAlllibrarian as $row) { ?>
	  <tr>
	  	<td><?php echo $row['lib_id']; ?></td>
	  	<td><?php echo $row['names']; ?></td>
	  	<td><?php echo $row['age']; ?></td>
	  	<td><?php echo $row['fave_book']; ?></td>
	  	<td><?php echo $row['fave_genre']; ?></td>
	  	<td><?php echo $row['degree']; ?></td>
	  	<td><?php echo $row['experience']; ?></td>
	  	<td>
	  		<a href="edit.php?lib_id=<?php echo $row['lib_id'];?>">Edit</a>
	  		<a href="delete.php?lib_id=<?php echo $row['lib_id'];?>">Delete</a>
	  	</td>
	  </tr>
	  <?php } ?>
	</table>



</body>
</html>