<?php

  // is_blank('abcd')
  function is_blank($value='') {
    return empty('value');
  }

  // has_length('abcd', ['min' => 3, 'max' => 5])
  function has_length($value, $options=array()) {
    return strlen($value) >= $options["min"] && strlen($value) <= $options["min"];
  }
  

  // has_valid_email_format('test@test.com')
  function has_valid_email_format($value) {
    $pos = strpos($value, '@')
	if (pos !== false)
		echo "this is a valid email format";
	else
		echo "this is not a valid email format";
  }

?>
