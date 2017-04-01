<?php
require_once('../../../private/initialize.php');


if(!isset($_GET['id']))
  redirect_to('index.php');
$state_id = $_GET['id'];

$errors = array();
$territory= array(
  "name" = => "",
  "state_id" => "",
  "position" =>
);
$territory['state_id'] = $state_id;

if(is_post_request()){
  if(isset($territory['name'])){$territory['name'] = $_POST['name'];}
  if(isset($territory['state_id'])) {$territory['state_id'] = $_POST['state_id'];}
  if(isset($territory['position'])){$territory['position'] = $_POST['position'];}
}
$result = insert_territory($territory);
if($result ===true){
  $new_id = db_insert_id($db);
  redirect_to("show.php?id=" . $territory['id']);
}
else{
  $errors = $result;
  echo display_errors($errors);
}


?>
<?php $page_title = 'Staff: New Territory'; ?>
<?php include(SHARED_PATH . '/header.php'); ?>

<div id="main-content">
  <a href="../states/show.php?id=<?php echo $territory['id'] ?>">Back to State Details</a><br />

  <h1>New Territory</h1>
<form action= "new.php" method = "post">
  Name: <br />
  <input type = "text" name = "name" value = "<?php echo $territory['name']?>" /> <br />
  Position<br />
  <input type = "text" name = "name" value = "<?php echo $territory['position']?>" /><br />
  <input type "submit" name = "name" value = "Update" />
</form>

  <!-- TODO add form -->

</div>

<?php include(SHARED_PATH . '/footer.php'); ?>
