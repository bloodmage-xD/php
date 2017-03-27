<?php
  require_once('../private/initialize.php');

  // Set default values for all variables the page needs.
	$firstname = $lastname = $email = $username = " ";
  // if this is a POST request, process the form
  // Hint: private/functions.php can help

    // Confirm that POST values are present before accessing them.
	if (is_post_request()){
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$email = $_POST['email'];
		$username = $_POST['username'];
	}
    // Perform Validations
    // Hint: Write these in private/validation_functions.php

    // if there were no errors, submit data to database
	$errors = array();
      // Write SQL INSERT statement
      // $sql = "";
	$sql = "";
      // For INSERT statments, $result is just true/false
      // $result = db_query($db, $sql);
	$result = db_query($db, $sql);


      // if($result) {
      //   db_close($db);
	if ($result){
		db_close($db);
		header("Location: registration_success.php");
	}
	else{
		echo db_error($db);
		db_close($db);
		exit;
	}
      //   TODO redirect user to success page

      // } else {
      //   // The SQL INSERT statement failed.
      //   // Just show the error, not the form
      //   echo db_error($db);
      //   db_close($db);
      //   exit;
      // }

?>

<?php $page_title = 'Register'; ?>
<?php include(SHARED_PATH . '/header.php'); ?>

<div id="main-content">
  <h1>Register</h1>
  <p>Register to become a Globitek Partner.</p>

  <?php
    // TODO: display any form errors here
    // Hint: private/functions.php can help
	echo display_error($error);
  ?>

  <!-- TODO: HTML form goes here -->
<form method = "post" action="">
	<p> First name: </p>
	<input type = "input" name = "first_name" value = "<?php echo h($first_name);?>">
	<p> Lastname : </p>
	<input type = "input" name = "last_name" value = "<?php echo h($last_name);?>">
	<p> email : </p>
	<input type = "input" name = "email" value = "<?php echo h($email);?>">
	<p> username : </p>
	<input type = "input" name = "username" value = "<?php echo h($username);?>">


</div>

<?php include(SHARED_PATH . '/footer.php'); ?>
