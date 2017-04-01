<?php
require_once('../../../private/initialize.php');


$errors = array();
$saleperson= array(
  'first_name' => '',
  'last_name' => '',
  'phone' => '',
  'email' => ''
);

if (is_post_request()){
  if(isset($salesperson['name'])) {$salesperson['name'] = $_POST['name'];}
  if(isset($salesperson['last_name'])) {$salesperson['name'] = $_POST['name'];}
  if(isset($salesperson['phone'])) {$salesperson['phone'] = $_POST['phone'];}
  if(isset($salesperson['email'])) {$salesperson['email'] = $_POST['email'];}
}
$result = insert_salesperson($salesperson);
if ($result == true){
  $new_id = db_insert_id($id);
  redirect_to("show.php?id=" . $salesperson['new_id']);
}
else
  $errors = $result;
?>

<?php $page_title = 'Staff: New Salesperson'; ?>
<?php include(SHARED_PATH . '/header.php'); ?>

<div id="main-content">
  <a href="index.php">Back to Salespeople List</a><br />

  <h1>New Salesperson</h1>
<form action= "new.php" method = "post">
  First Name: <br />
  <input type= "text" name = "fist_name" value = "<?php echo $salesperson['first_name'];?>" /><br />
  Last Name:
  <input type = "text" name = "last_name" value = "<?php echo $salesperson['last_name'];?>" /><br />
  Phone:
  <input type= "text" name = "phone" value= "<?php echo $salesperson['phone'];?>" /><br />
  Email:
  <input type= "text" name = "phone" value = "<?php echo $salesperson['email'];?>" /><br />
  <input type = "submit" name = "submit" value="Update" />
</form>
  <!-- TODO add form -->

</div>

<?php include(SHARED_PATH . '/footer.php'); ?>
