<!DOCTYPE html>
<html lang="en">
<head>
	<!--Meta tags
	-->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--Bootstrap CDN-->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	<!--Font Awesome
	-->
	<script src="https://kit.fontawesome.com/e69831aecf.js" crossorigin="anonymous"></script>

	<title></title>
	<!--Stylesheets
	-->
	<link rel="stylesheet" type="text/css" href="hero.css">
	<link rel="stylesheet" type="text/css" href="list.css">
	<link rel="stylesheet" type="text/css" href="fgiglink.css">
	<link rel="stylesheet" type="text/css" href="responsive.css">
	<link rel="stylesheet" type="text/css" href="certificates.css">
	<!--font:Poppins-->
	<style type="text/css">
		@import url('https://fonts.googleapis.com/css?family=Poppins:100,200,300,400&display=swap');

		*{
			font-family: "Poppins";
			margin: 0;
			padding: 0;
		}

		hr{
			width: 25%;
			border: 4px solid black;
			box-shadow: 1px solid grey;
			border-radius: 25px;
		}
	</style>
</head>
<body>
	<div class="container mt-5">
	<form action="conn.php" method="POST">
		<label for="title" class="mb-2">Please Enter your page title:</label>
		<input type="name" name="title" maxlength="1000" class="form-control mb-2">
		<label for="title" class="mb-2">Please Enter your name:</label>
		<input type="name" name="author" maxlength="50" class="form-control mb-4">
		<textarea type="textarea" name="blog" maxlength="1000" class="form-control mt-4" placeholder="Try typing something" rows="10" cols="" spellcheck="spellcheck">
			</textarea>
			<label for="date" class="mt-4 mb-2">Date Posted-</label>
		<input type="date" name="date" class="form-control ">
		<label for="category" class="mb-2 mt-3">Choose a category</label>
		<input type="name" name="category" class="form-control mb-4">
		<div class="container-fluid text-center">
		<button role="submit" type="submit" class="form-control mt-4 btn btn-dark" style="width: 50%">Post</button>
	</div>
		
	</form>
</div>
</body>
