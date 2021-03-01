<html>

<head>
  <title>Registeration</title>
</head>

<body>
  <h1>Registeration</h1>
  <?php
  echo "To register an account please fill out the info below.";
  ?>
  <br/>
  <br/>
  <form action="process.php" method="post">
    <label for="username">Enter Username</label>
    <input type="text" name="username">
    <label for="password">Password</label>
    <input type="password" name="password">
    <input type="submit" value = 'Register'>
  </form>
</body>

</html>