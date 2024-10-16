<?php 

require_once 'dbConfig.php'; 
require_once 'models.php';

if (isset($_POST['insertbtn'])) {
	$names = trim($_POST['names']);
	$age = trim($_POST['age']);
	$fave_book = trim($_POST['fave_book']);
	$fave_genre = trim($_POST['fave_genre']);
	$degree = trim($_POST['degree']);
	$experience = trim($_POST['experience']);

	if (!empty($names) && !empty($age) && !empty($fave_book) && !empty($fave_genre) && !empty($degree)  && !empty($experience)  ) {
			$query = insertlib($pdo, $names, $age, $fave_book, $fave_genre, $degree, $experience);

		if ($query) {
			header("Location: ../index.php");
		}

		else {
			echo "Insertion failed";
		}
	}

	else {
		echo "Make sure that no fields are empty";
	}
	
}


if (isset($_POST['editbtn'])) {
	$lib_id = $_GET['lib_id'];
	$names = trim($_POST['Names']);
	$age = trim($_POST['Age']);
	$fave_book = trim($_POST['Fave_Book']);
	$fave_genre = trim($_POST['Fave_Genre']);
	$degree = trim($_POST['Degree']);
	$experience = trim($_POST['Experience']);

	if (!empty($names) && !empty($age) && !empty($fave_book) && !empty($fave_genre) && !empty($degree)  && !empty($experience)) {

		$query = updateAlibrarian($pdo, $lib_id, $names, $age, $fave_book, $fave_genre, $degree, $experience);

		if ($query) {
			header("Location: ../index.php");
		}
		else {
			echo "Update failed";
		}

	}

	else {
		echo "Make sure that no fields are empty";
	}

}





if (isset($_POST['deletebtn'])) {

	$query = deletelibrarian($pdo, $_GET['lib_id']);

	if ($query) {
		header("Location: ../index.php");
	}
	else {
		echo "Deletion failed";
	}
}




?>