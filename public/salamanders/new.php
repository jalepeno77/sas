<?php

require_once('../../private/initialize.php');
include(SHARED_PATH . '/salamander-header.php');
?>

<?php $page_title = 'Create Salamander'; ?>
  <a href="<?php echo url_for('salamanders/index.php'); ?>">&laquo Back to Salamanders</a>
    <h1>Create Salamander</h1>

    <form action="<?php echo url_for('/salamanders/create.php'); ?>" method="post">

    <label for="name">
      <p>Name: <br><input type="text" name="name" value=""></p>
    </label>

    <label for="Habitat">
      <p>Habitat: <br>
        <textarea rows="4" cols="50" name="habitat" value=""></textarea>
      </p>
    </label>

    <label for="Description">
      <p>Description: <br>
        <textarea rows="4" cols="50" name="description" value=""></textarea>
      </p>
    </label>

    <label for="submit">
      <p><input type="submit" value="Create Salamander"></p>
    </label>

</form>
