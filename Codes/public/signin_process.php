<?php require_once("../resources/config.php"); 
      include_once('header.php');

      $username = "";
	  $email = "";
	  $errors = array();

	//if the register button is clicked
	if(isset($_POST['register'])){
		$full_name = mysqli_real_escape_string($connection,$_POST['full_name']);
		$username = mysqli_real_escape_string($connection,$_POST['username']);
		$email = mysqli_real_escape_string($connection,$_POST['email']);
		$password_1 = mysqli_real_escape_string($connection,$_POST['password_1']);
		$password_2 = mysqli_real_escape_string($connection,$_POST['password_2']);
		$city = mysqli_real_escape_string($connection,$_POST['city']);
		$address = mysqli_real_escape_string($connection,$_POST['address']);
		$number = mysqli_real_escape_string($connection,$_POST['number']);
		$profile_image = addslashes(file_get_contents($_FILES['profile_image']['tmp_name']));

		//ensure that form fields are filled properly
		if(empty($username)){
			array_push($errors, "Username is required"); //add errors to errors array
		}
		if(empty($email)){
			array_push($errors, "Email is required"); //add errors to errors array
		}
		if(empty($password_1)){
			array_push($errors, "Password is required"); //add errors to errors array
		}
		if($password_1 != $password_2){
			array_push($errors, "The two passwords do not match"); //add errors to errors array
		}

		 $query1 = "SELECT * FROM user WHERE username = '$username'";
		 $result1 = mysqli_query($connection, $query1);
		 if ($result1->num_rows > 0) {
		    echo"<h2>Username already exists, Please try again with different username</h2>";
		    array_push($errors, "Username already exists, Please try again with different username");
		   } 

		//if there are no errors, save user to database
		if(count($errors) == 0){
			$password = md5($password_1); // encrypt password before storing in database (security) 
			$sql = "INSERT INTO user (full_name, username, email, password, address, number, profile_image)
					VALUES ('$full_name', '$username', '$email', '$password', '$address', '$number', '{$profile_image}')";
			mysqli_query($connection, $sql);
			$_SESSION['loggedin'] = true;
			$_SESSION['username'] = $username;
			$_SESSION['success'] = "You are now logged in";
			header('location: index.php'); // redirect to home page
        }
	}
 // log user in from login page
 if(isset($_POST['login'])){
    $username = mysqli_real_escape_string($connection,$_POST['username']);
    $password = mysqli_real_escape_string($connection,$_POST['password']);

    //ensure that form fields are filled properly
    if(empty($username)){
        array_push($errors, "Username is required"); //add errors to errors array
    }
    if(empty($password)){
        array_push($errors, "Password is required"); //add errors to errors array
    }

    if(count($errors) == 0){
        $password = md5($password); //encrypt password before comparing with that from database
        $query = "SELECT * FROM  user WHERE username='$username' AND password='$password'";
        $result = mysqli_query($connection, $query);
        if (mysqli_num_rows($result) == 1){
            // log user in
            $_SESSION['loggedin'] = true;
            $_SESSION['username'] = $username;
            $_SESSION['success'] = "You are now logged in";
            $_SESSION['email'] = $email;
            $_SESSION['address'] = $address;
            header('location: index.php'); // redirect to home page
        }else{
            array_push($errors, "wrong username/password combination");
        }
    }

}

	// logout
	if (isset($_GET['logout'])){
        session_destroy();
		unset($_SESSION['username']);
		header('location: login.php');
	}



?>