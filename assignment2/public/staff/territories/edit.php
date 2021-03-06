<?php
require_once('../../../private/initialize.php');

if(!isset($_GET['id'])) {
  redirect_to('index.php');
}
$territories_result = find_territory_by_id($_GET['id']);
// No loop, only one result
$territory = db_fetch_assoc($territories_result);
$errors = array();

if(is_post_request()){
  if(isset($_POST['name']){$territory['name'] = $_POST['name'];}
  if(isset($_POST['state_id'])){$territory['state_id'] = $_POST['state_id'];}
  if(isset($_POST['position'])) {$territory['position'] = $_POST['position'];}
}
$result = $update_territory($territory);
if($result === true)
  redirect_to('show.php?id=' . $territory['id']);
else
  $errors = $result;
?>

<?php $page_title = 'Staff: Edit Territory ' . $territory['name']; ?>
<?php include(SHARED_PATH . '/header.php'); ?>

<div id="main-content">
  <a href="../states/show.php?id=<?php echo $territory['id'];?>">Back to State Details</a><br />

  <h1>Edit Territory: <?php echo $territory['name']; ?></h1>

  <form action= "edit.php?id= <? php echo $territory['id'];?>" /> <br />
    Name:<br />
    <input type= "text" name="name" value="<?php echo $territory['id'];?>" /><br />
    State ID<br/>
    <input type= "text" name ="state_id" value="<?php echo $territory['id'];?>" /><br />
    Position<br />
    <input type="text" name = "position" value="<? php echo $territory['id'];?>" /><br />
    <input type="submit" name = "submit" value= "Update" />
  </form>
  <!-- TODO add form -->
</div>

<?php include(SHARED_PATH . '/footer.php'); ?>
