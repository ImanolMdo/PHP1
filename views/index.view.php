
<?php require('partials/head.php'); ?>

<h1>Hola este es el home</h1>
<header>
  <ul>
  <?php foreach ($tasks as $task): ?>
    <li>
        <?php if($task->completed): ?>
          <strike><?php echo $task->description; ?></strike>
        <?php else: ?>
          <?php echo $task->description; ?>

        <?php endif; ?>
    </li>

  <?php endforeach;?>

  </ul>

</header>

<?php require('partials/footer.php'); ?>

