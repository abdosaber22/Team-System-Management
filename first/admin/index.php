<?php
  session_start();
  $page_title = 'Admin Login';
  require('includes/connect.php');
  include ("includes/header.php");

?>

    <!-- Admin Login Form -->
    <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
          $username = filter_var($_POST['username'], FILTER_SANITIZE_STRING);
          $password = filter_var($_POST['password'], FILTER_SANITIZE_STRING);
          $sha1Password = sha1($password);
          $errors = array();
          if (empty($username)) { $errors[] = "Please Enter Your Username<br>"; }
          if (empty($password)) { $errors[] = "Please Enter Your Password<br>"; }
          foreach ($errors as $error) {
            echo "<strong class='error'>$error</strong>";
          }
          if (empty($errors)) {
            $getAdmin = $conn->prepare("SELECT username, password, id FROM users WHERE username = ? AND password = ? AND status = 1");
            $getAdmin->execute(array(
              $username, // Username Value
              $sha1Password, // Password Value
            ));
            if ($getAdmin->rowCount() > 0) {
              $returnedAdminData = $getAdmin->fetch();
              $_SESSION['idaaa'] = $returnedAdminData['id'];
              echo "Redirecting";
              header('REFRESH: 2;URL=control.php');
            } else {
              echo "Username or password is invalid";
            }
          }
        }
      ?>
        <div>
           
            <form class="login" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post" autocomplete="off">
                <h4 class="text-center">Admin Login</h4>
                <input class="form-control" type='text' name='username' placeholder="Your Username" value="<?php if (isset($username)) { echo $username; } ?>">
                <input class="form-control" type='password' name='password' placeholder="Your Password" autocomplete="new-password">
                <button class="btn btn-primary btn-block">Sign in</button>
            </form>
        </div>
        <?php include ("includes/footer.php"); ?>
