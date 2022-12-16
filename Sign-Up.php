<?php
session_start();
include "db_conn.php";

if (isset($_POST['username']) && isset($_POST['password'])
    && isset($_POST['email'])) {

		/* validate all of the post data from register*/
	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['username']);
	$pass = validate($_POST['password']);
	$email = validate($_POST['email']);

	$user_data = 'username='. $uname. '&email='. $email;


	if (empty($uname)) { 
		header("Location: Register.php?error=User Name is required&$user_data");
	    exit();
	}else if(empty($pass)){
        header("Location: Register.php?error=Password is required&$user_data");
	    exit();
	}
	else if(strlen($pass) < 4){
		header("Location: Register.php?error=The password must be more than 4 characters&$user_data");
			exit();
	  }

	else if(empty($email)){
        header("Location: Register.php?error=email is required&$user_data");
	    exit();
	}



	else{



	    $sql = "SELECT * FROM register WHERE email='$email' ";
       $result = mysqli_query($conn, $sql);
      $sqlUser = "SELECT * FROM register WHERE username='$uname' ";
	  $resultUser = mysqli_query($conn, $sqlUser);
	  



		if (mysqli_num_rows($result) > 0) {
			header("Location: Register.php?error=The email is taken try another&$user_data");
	        exit();

		} else 	if (mysqli_num_rows($resultUser) > 0) {

      header("Location: Register.php?error=The username is taken try another&$user_data");
	        exit();
    }
  
    else {
           $sql2 = "INSERT INTO register(username, user_pass, email) VALUES('$uname', '$pass', '$email')";
           $result2 = mysqli_query($conn, $sql2);
           if ($result2) {
           	 header("Location: Sucessful.php?success=Your account has been created successfully&$user_data");
	         exit();
           }else {
	           	header("Location: Register.php?error=unknown error occurred&$user_data");
		        exit();
           }
		}
	}

}
else{
	header("Location: Home.php");
	exit();
}
