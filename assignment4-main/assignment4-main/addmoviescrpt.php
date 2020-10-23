<?php 
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "movies_database";
$conn = mysqli_connect($servername, $username, $password, $dbname);
    $target_dir = "images/";
    $target_file = $target_dir . basename($_FILES["imageUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
    if (move_uploaded_file($_FILES["imageUpload"]["tmp_name"], $target_file)) {
         $image = basename( $_FILES["imageUpload"]["name"],".jpg"); 

         $tittle = $_POST['tittle'];
         $releasedate = $_POST['releasedate'];
         $moviedate = $_POST['moviedate'];
         $movieratting = $_POST['movieratting'];
         
		$sql = "INSERT INTO `movies` (`id`, `movie_tittle`, `movie_ratting`, `movie_date`, `release_date`, `movie_image`) VALUES (NULL, '$tittle', '$movieratting', '$moviedate', '$releasedate', '$image');";
		if (mysqli_query($conn, $sql)) {
			  echo "New record created successfully";
			} else {
			  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
			}
    } 

   


?>