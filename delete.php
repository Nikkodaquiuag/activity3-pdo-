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
	<h1>Are you sure you want to delete this user?</h1>
	<?php $getlibrarianById = getlibrarianById($pdo, $_GET['lib_id']); ?>
	<form action="core/handleForms.php?lib_id=<?php echo $_GET['lib_id']; ?>" method="POST">

		<div class="studentContainer" style="border-style: solid; 
		font-family: 'Arial';">
		<p><label for="names">Name</label> <input type="text" name="names"></p>
		<p><label for="age">Age</label> <input type="text" name="age"></p>
		<p><label for="fave_book">Favorite Book</label> <input type="text" name="fave_book"></p>
		<p><label for="fave_genre">Favorite Genre</label> <input type="text" name="fave_genre"></p>
		<p><label for="degree">Degree</label> <input type="text" name="degree"></p>
		<p><label for="experience">Experience</label> <input type="text" name="experience"></p>
		<input type="submit" name="deletebtn" value="Delete">
		</div>
	</form>
</body>
</html>