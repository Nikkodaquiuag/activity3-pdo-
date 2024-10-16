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
	<?php $getlibrarianByID = getlibrarianByID($pdo, $_GET['lib_id']); ?>
	<form action="core/handleForms.php" method="POST">
        <p><label for="names">Name</label> <input type="text" name="Names"value="<?php echo $getlibrarianByID['names']; ?>"></p>
		<p><label for="age">Age</label> <input type="text" name="Age"value="<?php echo $getlibrarianByID['age']; ?>"></p>
		<p><label for="fave_book">Favorite Book</label> <input type="text" name="Fave_Book"value="<?php echo $getlibrarianByID['fave_book']; ?>"></p>
		<p><label for="fave_genre">Favorite Genre</label> <input type="text" name="Fave_Genre"value="<?php echo $getlibrarianByID['fave_genre']; ?>"></p>
		<p><label for="degree">Degree</label> <input type="text" name="Degree"value="<?php echo $getlibrarianByID['degree']; ?>"></p>
		<p><label for="experience">Experience</label> <input type="text" name="Experience"value="<?php echo $getlibrarianByID['experience']; ?>"></p>
			<input type="submit" name="editbtn">
		</p>
	</form>
</body>
</html>