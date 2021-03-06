<?php
	require_once('phpscripts/config.php');

	if(isset($_POST['submit'])){
		$cover = $_FILES['cover'];
		$title = $_POST['title'];
		$trailer = $_POST['trailer'];
		$genre = $_POST['genre'];
		$rating = $_POST['rating'];
		$desc = $_POST['desc'];
		$grade = $_POST['grade'];
		$result = addMovie($cover, $title, $trailer, $genre, $rating, $desc, $grade);
		$message = $result;
	}
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Add Movie</title>
<link rel="stylesheet" href="../css/reset.css">
<link rel="stylesheet" href="../css/admin.css">
<link href="https://fonts.googleapis.com/css?family=Lato:400,700|Merriweather:300,400,700" rel="stylesheet">
</head>
<body>
	<?php if(!empty($message)){ echo $message;} ?>
	<form action="admin_addmovie.php" method="post" enctype="multipart/form-data" class="addMovieForm">
		<label>Cover Image:</label>
		<input type="file" name="cover" value="">
		<br><br>
		<label>Movie Title:</label>
		<input type="text" name="title" value="">
		<br><br>
		<label>Movie Trailer:</label>
		<input type="text" name="trailer" value="">
		<br><br>
		<label>Movie Genre:</label>
		<input type="text" name="genre" value="">
		<br><br>
		<label>Movie Rating:</label>
		<input type="text" name="rating" value="">
		<br><br>
		<label>Movie Description:</label>
		<input type="text" name="desc" value="">
		<br><br>
		<label>Movie Grade:</label>
		<input type="text" name="grade" value="">
		<br><br>
		<input type="submit" name="submit" value="Add Movie" class="submitBtn">
	</form>
	<a href="admin_index.php">Back</a>
</body>
</html>