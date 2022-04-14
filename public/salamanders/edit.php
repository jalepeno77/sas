<?php

require_once('../../private/initialize.php');
include(SHARED_PATH . '/salamander-header.php');

if(!isset($_GET['id'])) {
  redirect_to(url_for('/salamanders/index.php'));
}

$id = $_GET['id'];
$menu_name = '';
$position = '';
$visible = '';

if(is_post_request()) {

// Handle form values sent by new.php

$menu_name = $_POST['name'] ?? '';
$habitat = $_POST['habitat'] ?? '';
$description = $_POST['description'] ?? '';

echo "Form parameters<br />";
echo "Salamander name: " . $name . "<br />";
echo "Habitat: " . $habitat . "<br />";
echo "Description: " . $description . "<br />";
}

?>

<?php $page_title = 'Edit Salamander'; ?>
<?php include(SHARED_PATH . '/salamander-header.php'); ?>

<div id="content">

  <a class="back-link" href="<?php echo url_for('/salamanders/index.php'); ?>">&laquo; Back to List</a>

  <div id="content">

  <a class="back-link" href="<?php echo url_for('/salamanders/index.php'); ?>">&laquo; Back to List</a>

  <div class="salamanders new">
    <h1>Create Salamander</h1>

    <form action="<?php echo url_for('/salamanders/create.php'); ?>" method="post">

    <label for="name">Name</label><input type="text" name="name" id="name">

    <h2>Choose a Habitat</h2>
				<select id="habitat">
					<option value="river">River</option>
					<option value="creek">Creek</option>
					<option value="forrest">Forrest</option>
				</select>

    <h2>Description</h2>
				<textarea name="description" rows="3" placeholder="Please let us know what special features your salamander might have"></textarea>
				<br>
        <input type="submit" value="Edit Salamander">
      </div>
    </form>

  </div>

</div>

<?php include(SHARED_PATH . '/salamander-footer.php'); ?>

