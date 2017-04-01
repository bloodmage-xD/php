<?php
require_once('../../../private/initialize.php');

if(!isset($_GET['id'])) {
  redirect_to('index.php');
}
$id = $_GET['id'];
$salespeople_result = find_salesperson_by_id($id);
// No loop, only one result
$row = db_num_rows($salesperson_result);
if ($row > 0){
  $salesperson = db_fetch_assoc($salespeople_result);
  $db_free_result($salespeople_result);
}
else{
  redirect_to('territories.php');
}
?>

<?php $page_title = 'Staff: Salesperson ' . $salesperson['first_name'] . " " . $salesperson['last_name']; ?>
<?php include(SHARED_PATH . '/header.php'); ?>

<div id="main-content">
  <a href="../">Back to Salespeople List</a><br />

  <h1>Salesperson: <?php echo $salesperson['first_name'] . " " . $salesperson['last_name']; ?></h1>

  <?php
    echo "<table id=\"salesperson\">";
    echo "<tr>";
    echo "<td>Name: </td>";
    echo "<td>" . $salesperson['first_name'] . " " . $salesperson['last_name'] . "</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>Phone: </td>";
    echo "<td>" . $salesperson['phone'] . "</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>Email: </td>";
    echo "<td>" . $salesperson['email'] . "</td>";
    echo "</tr>";
    echo "</table>";

    db_free_result($salespeople_result);
  ?>
  <br />
  <a href="#add_a_url">Edit</a><br />
</div>

<?php include(SHARED_PATH . '/footer.php'); ?>
