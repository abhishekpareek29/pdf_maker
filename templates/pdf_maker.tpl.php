<?php
  // Dummy HTML Template
?>

<!DOCTYPE html>
<html>
  <head>
    <title></title>
  </head>
  <body>
    <img src="<?php print DRUPAL_ROOT; ?>/path/to/specific/image_file.png">
    <?php $xyz_field = field_get_items('node', $node, 'xyz_field_val'); ?>
  </body>
</html>
