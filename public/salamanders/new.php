<?php

require_once('../../private/initialize.php');
include(SHARED_PATH . '/salamander-header.php');

$test = $_GET['test'] ?? '';

if($test == '404') {
  error_404();
}
elseif($test =='500') {
  error_500();
}
elseif($test == 'redirect') {
  redirect_to(url_for('/salamanders/index.php'));
}
?>

<?php $page_title = 'Create Salamander'; ?>
<?php include(SHARED_PATH . '/salamander-header.php'); ?>

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
        <input type="submit" value="Create Salamander">
  </div>

</div>

<?php include(SHARED_PATH . '/salamander-footer.php'); ?>


