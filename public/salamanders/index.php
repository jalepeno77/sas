<?php require_once('../../private/initialize.php'); ?>

<?php
  $salamanders = [
  ['id' => '1', 'salamanderName' => 'Red-Legged Salamander'], 
  ['id' => '2', 'salamanderName' => 'Pigeon Mountain Salamander'],
  ['id' => '3', 'salamanderName' => 'ZigZag Salamander'], 
  ['id' => '4', 'salamanderName' => 'Slimy Salamander']
  ];
?>

<?php $page_title = 'Salamanders'; ?>
<?php require_once(SHARED_PATH . '/salamander-header.php');
?>


<div id="content">
  <div class="salamanders listing">
    <h1>Salamanders</h1>

    <div class="actions">
      <a href="<?php echo url_for('/salamanders/new.php') ?>">Create Salamander</a>
    </div>

<table>
  <tr>
    <th>ID</th>
    <th>Name</th>
    <th>&nbsp;</th>
    <th>&nbsp;</th>
    <th>&nbsp;</th>
  </tr>

      <?php foreach($salamanders as $salamander) { ?>
        <tr>
          <td><?php echo h($salamander['id']); ?></td>
    	    <td><?php echo h($salamander['salamanderName']); ?></td>
          <td><a class="action" href="<?= url_for('salamanders/show.php?id=' . h(u($salamander['id']))); ?>">View</a></td>
          <td><a class="action" href="<?php echo url_for('/salamanders/edit.php?id=' . h(u($salamander['id'])));
          ?>">Edit</a></td>
          <td><a class="action" href="">Delete</a></td>
    	  </tr>
      <?php } ?>
  	</table>

  </div>

</div>

<?php include(SHARED_PATH . '/salamander-footer.php'); ?>
