

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>Create|PHP</title>
</head>
<body>

<?php 
include "process.php";

// if the form's submit button is clicked, we need to process the form
	if (isset($_POST['submit'])) {
		// get variables from the form
		$first_name = $_POST['firstname'];
		$last_name = $_POST['lastname'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$gender = $_POST['gender'];
    $age = $_POST['age'];

		//write sql query

		$sql = "INSERT INTO `data`(`first name`, `last name`, `email`, `password`, `gender`, `age`) VALUES ('$first_name','$last_name','$email','$password','$gender','age')";

		// execute the query

		$result = $conn->query($sql);

		if ($result == TRUE) {
			echo "New record created .";
		}else{
			echo "Error:". $sql . "<br>". $conn->error;
		}

		$conn->close();

	}

?>

<h2>PN Fill Up Form</h2>

<form action="" method="POST">
  <fieldset>
    <legend>Student information:</legend>
      First name:<br>
    <input type="text" name="firstname">
    <br>
      Last name:<br>
    <input type="text" name="lastname">
    <br>
      Email:<br>
    <input type="email" name="email">
    <br>
      Password:<br>
    <input type="password" name="password">
    <br>
      Gender:<br>    
    <input type="radio" name="gender" value="Female">Female
    <input type="radio" name="gender" value="Male">Male
    <br>
    Age:<br>
    <input type="text" name="age">
    <br>
    <br>
    <input type="submit" name="submit" value="submit">
  </fieldset>
</form>

</body>
</html>