<?php require_once('../../private/initialize.php');?> 

<?php
$id = $_GET['id'] ?? '1';
$page_title = 'Salamander Details';
?>

<?php include(SHARED_PATH . '/salamander-header.php'); ?>

<div id="content">

  <h2>Salamander Details</h2>
  <?php echo h($id); ?>

  <p><a href="<?php echo url_for('salamanders/index.php?id=' . $salamander['id']);?>">&laquo;Back to Salamander List</a></p>
</div>

<?php include(SHARED_PATH . '/salamander-footer.php'); ?>
