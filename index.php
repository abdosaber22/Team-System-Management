<?php
  session_start();
  require 'connect.php';

  if ($_SERVER['REQUEST_METHOD'] == "POST") {
      $name = $_POST['name'];
      $pass = $_POST['pass'];

      $formErrors = array();

      if (empty($name)) {
        $formErrors[] = "Please, Write Your Username";
      }
      if (empty($pass)) {
        $formErrors[] = "Please, Write Your Password";
      }

      foreach ($formErrors as $error) {
        echo "<div class='error'>";
          echo "<strong>Error: </strong>$error";
        echo "</div>";
      }

    // Check If The Values = Value On Database

    $stmt = $conn->prepare("SELECT * FROM teamcheck WHERE name = ? AND pass = ?");
    $stmt->execute(array($name, $pass));
    $row = $stmt->fetch();

    if ($stmt->rowcount() > 0) {

      $_SESSION['name']       = $row['name'];
      $_SESSION['status']     = $row['status'];
      $_SESSION['pass']       = $row['pass'];
      $_SESSION['idene']      = $row['id'];

      header('Location: user/profile.php');
      exit();

    }
  }

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Authentication</title>
  <link rel="stylesheet" href="layout/css/font-awesome.min.css">
  <link rel="stylesheet" href="layout/css/resets.css">
  <link rel="stylesheet" href="layout/css/style.css">
</head>
<body>

  <!-- Authentication Login Form -->
    <article class="acc-form">
      <section>
        <form class="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" autocomplete="off">
          <h1>Hello, Guest</h1>
          <input type="text" name="name" placeholder="Enter Username">
          <input type="password" name="pass" placeholder="Enter Password"><br>
          <button class="btn btn-success">Go To My Account</button>
        </form>
      </section>
    </article>

  <script src="layout/js/jquery-3.1.1.min.js"></script>
  <script src="layout/js/main.js"></script>
</body>
</html>
