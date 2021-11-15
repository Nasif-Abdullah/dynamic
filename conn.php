<?php


$postName = $_POST['title'];
$author = $_POST['author'];
$post = $_POST['blog'];
$date = $_POST['date'];
$category = $_POST['category'];

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "dynamic";

//create connection

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

//check con

if (!$conn) {
	die("connection failed: ".mysqli_connect_error());
}
else{
$SELECT = "SELECT postName From blog Where postName = ? Limit 1";
		$INSERT = "INSERT into blog (postName, post, author, date, category) values(?, ?, ?, ?, ?)";

		//prepare statement
		$stmt = $conn -> prepare($SELECT);
		$stmt -> bind_param("s", $postName);
		$stmt -> execute();
		$stmt -> bind_result($postName);
		$stmt -> store_result();
		$rnum = $stmt -> num_rows;

		if ($rnum == 0){
			$stmt -> close();

			$stmt = $conn->prepare($INSERT);
			$stmt -> bind_param("sssss", $postName, $post, $author, $date, $category);
			$stmt -> execute();
			header('index.php');
		}
		else{
				echo "More than 1 names found";
		}
	}

$stmt -> close();
$conn -> close();

//closing conn
?>

