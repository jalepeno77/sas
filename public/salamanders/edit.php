<?php

require_once('../../private/initialize.php');
include(SHARED_PATH . '/salamander-header.php');

$pageTitle = 'Edit Salamander';
$id = $_GET['id'];

$salamander = find_salamander_by_id($id);
if(is_post_request()) {
  $salamander = [];
  $salamander($id) = $id;
  $salamander($name) = $_POST['name'] ?? '';
  $salamander($habitat) = $_POST['habitat'] ?? '';
  $salamander($description) = $_POST['description'] ?? '';
  update_salamander($salamander);
  redirect_to(url_for('salamanders/show.php?id=' . $id));
}
else {
  $salamander = find_salamander_by-id($id);
}

?>

<form action="<?php echo url_for('/salamanders/edit.php?id=' . h(u($id))); ?>" method="post">

    <label for="name">
      <p>Name: <br><input type="text" name="name" value=""></p>
    </label>

    <label for="Habitat">
      <p>Habitat: <br>
        <textarea rows="4" cols="50" name="habitat" value="">
          <?= h($salamander['habitat']); ?>
        </textarea>
      </p>
    </label>

    <label for="Description">
      <p>Description: <br>
        <textarea rows="4" cols="50" name="description" value="">
        <?= h($salamander['description']); ?>
        </textarea>
      </p>
    </label>

    <label for="submit">
      <p><input type="submit" value="Edit Salamander"></p>
    </label>

</form>

<?php include(SHARED_PATH . '/salamander-footer.php'); ?>

