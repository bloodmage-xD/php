<html>
<body>
	<?php
	if ($_POST['num'] > 0 && $_POST['tips'] > 0 && $_POST['tax'] > 0 ){
	$num = $_POST['num'];
	$tips = $_POST['tips'];
	$tax = $_POST['tax'];
	if (is_numeric($num) && is_numeric($tips)){
		if (($num < 0) && ($tips < 0)){
			$num = 1;
			$tips = 100;
			$tax = .1;
		}
		else{
			echo "please enter a valid number";
	}}
	}?>
	<form action="" method="post">
	Number of People: <input type="text" name="num" /><br /><br />
	Bill subtotal: <input type= "text" name = "tips" /><br />
	<?php
	for ($i = 0 ; $i < 1; $i++)
	{
		?>
		<form name = "tax" method = "post"/>
		10% <input type = "radio"  name = "tax" value = ".1">
		15% <input type = "radio"  name = "tax" value = ".15">
		20% <input type = "radio"  name = "tax" value = ".2">
		<input type = "submit"  value = "submit">
	<?php
	} 		
		$amount =  ( $tips * $tax + ($tips) ) / $num;
	?>	
	<?php
	if (isset($amount)){
		echo "the amount each person owe is " . $amount;
	}
	else
	{
		echo "enter a valid amount ";
	
	}?>
	</form>
	</body>
	</html>
