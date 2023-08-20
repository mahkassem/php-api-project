<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Profile</title>
</head>

<body>
  <h1>Profile</h1>
  <strong><?php echo $user->name ?></strong>
  <p><?php echo $user->description ?></p>
  <p><?php echo $user->email ?></p>
  <h2>My Friends</h2>
  <ul>
    <?php
    foreach ($friends as $friend) {
      echo "<li>{$friend['name']}</li>";
    }
    ?>
  </ul>
</body>

</html>