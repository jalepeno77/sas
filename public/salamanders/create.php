<?php

require_once('../../private/initialize.php');
include(SHARED_PATH . '/salamander-header.php');

$pageTitle = 'Create Salamander';

if(is_post_request()) {
  $salamander = [];
  $salamander['name'] = $_POST['name'] ?? '';
  $salamander['habitat'] = $_POST['habitat'] ?? '';
  $salamander['description'] = $_POST['description'] ?? '';
  
  insert_salamander($salamander);
  $newID = mysqli_insert_id($db);
  redirect_to(url_for('salamanders/show.php?id=' . $newID ));
}

// if(is_post_request()) {

// $menu_name = $_POST['menu_name'] ?? '';
// $position = $_POST['position'] ?? '';
// $visible = $_POST['visible'] ?? '';

// echo "Form parameters<br />";
// echo "Menu name: " . $menu_name . "<br />";
// echo "Position: " . $position . "<br />";
// echo "Visible: " . $visible . "<br />";
// }
// else {
//   redirect_to(url_for('/new.php'));
}

include(SHARED_PATH . '/salamander-footer.php');

?>