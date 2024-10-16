<!-- Functions for interacting with the database -->

<?php 

require_once 'dbConfig.php';

function insertlib($pdo, $names, $age, $fave_book, $fave_genre, $degree, $experience) {

	$sql = "INSERT INTO librarian (names,age,fave_book,fave_genre,degree,experience) VALUES (?,?,?,?,?,?)";

	$stmt = $pdo->prepare($sql);

	$executeQuery = $stmt->execute([$names, $age, $fave_book, $fave_genre, $degree, $experience]);

	if ($executeQuery) {
		return true;	
	}
}

function seeAlllibrarian($pdo) {
	$sql = "SELECT * FROM librarian";
	$stmt = $pdo->prepare($sql);
	$executeQuery = $stmt->execute();
	if ($executeQuery) {
		return $stmt->fetchAll();
	}
}

function getlibrarianByID($pdo, $lib_id) {
	$sql = "SELECT * FROM librarian WHERE lib_id = ?";
	$stmt = $pdo->prepare($sql);
	if ($stmt->execute([$lib_id])) {
		return $stmt->fetch();
	}
}

function updateAlibrarian($pdo, $lib_id, $names, $age, $fave_book, $fave_genre, $degree, $experience) {

	$sql = "UPDATE librarian 
				SET names = ?, 
					age = ?, 
					fave_book = ?, 
					fave_genre = ?, 
					degree = ?, 
					experience = ? 
			WHERE lib_id = ?";
	$stmt = $pdo->prepare($sql);
	
	$executeQuery = $stmt->execute([$names, $age, $fave_book, $fave_genre, $degree, $experience, $lib_id]);

	if ($executeQuery) {
		return true;
	}
}



function deletelibrarian($pdo, $lib_id) {

	$sql = "DELETE FROM librarian WHERE lib_id = ?";
	$stmt = $pdo->prepare($sql);

	$executeQuery = $stmt->execute([$lib_id]);

	if ($executeQuery) {
		return true;
	}

}




?>