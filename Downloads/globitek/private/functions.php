<?php

  function h($string="") {
    return htmlspecialchars($string);
  }

  function u($string="") {
    return urlencode($string);
  }

  function raw_u($string="") {
    return rawurlencode($string);
  }

  function redirect_to($location) {
    header("Location: " . $location);
    exit;
  }

  function is_post_request() {
    return $_SERVER['REQUEST_METHOD'] == 'POST';
  }
  
  function display_errors($errors=array()) {
    $output = '';
    if (!empty($errors)) {
      $output .= "<div class=\"errors\">";
      $output .= "Please fix the following errors:";
      $output .= "<ul>";
      foreach ($errors as $error) {
        $output .= "<li>{$error}</li>";
      }
      $output .= "</ul>";
      $output .= "</div>";
    }
    return $output;
  }

if (is_blank($firstname))
	array_push($error, "firstname cannot be blank ");
else if (!has_length($POST_[firstname], ['min' => 2,'max' => 20 ]))
	array_push($error, "first name must be between 2 and 20 chars");

if (is_blank($lastname))
	array_push($error, "last name cannot be blank");
else if (!has_length($POST_[lastname], ['min'] =>2 , 'max' => 20]))
	array_push($error, "last name must be between 2 and 20 chars");

if (is_blank($username))
	array_push($error, "username cannot be blank");
else if (!has_length($_POST[username], ['min' => 2, 'max' => 20]))
	array_push($error, "username must be between 2 and 20 chars");

if (is_blank($email))
	array_push($error, "email address cannot be blank");
else if (!has_length($_POST['email'], 'min' => 2, 'max' => 20 ))
	array_push($error, "email adress must be between 2 and 20 chars");)
	
?>
