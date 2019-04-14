<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>PHP Practitioner</title>
  <style>
  body{
    background-color: darkgray;
  }
  </style>
</head>


<body>
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

</body>
</html>