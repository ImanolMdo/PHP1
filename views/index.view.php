
<?php require('partials/head.php'); ?>

<h2>Usuarios</h2>

<?php foreach($users as $user) : ?>
  <li><?php echo $user->name; ?></li>
<?php endforeach; ?>

<h1>Submit Your Name</h1>



<form method="POST" action="/names">

  <input type="text" name="name">

  <button type="submit">Submit</button>

</form>




<?php require('partials/footer.php'); ?>

