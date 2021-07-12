<?php
  $page_title = 'Login';
  require('includes/connect.php');
  include ("includes/header.php");

?>

    <!-- Login Form -->
    <div class="header">
        <?php include "includes/nav-bar.php";?>
        <h2 class="form-h1">تسجيل الدخول</h2>

        <div class="main-form">
            <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
          $username = filter_var($_POST['username'], FILTER_SANITIZE_STRING);
          $password = filter_var($_POST['password'], FILTER_SANITIZE_STRING);
          $sha1Password = sha1($password);
          $errors = array();
          if (empty($username)) { $errors[] = "من فضلك ادخل اسم المستخدم <br>"; }
          if (empty($password)) { $errors[] = "من فضلك ادخل كلمة المرور<br>"; }
          foreach ($errors as $error) {
            echo "<strong style='color: black;'>$error</strong>";
          }
          if (empty($errors)) {
            $getUser = $conn->prepare("SELECT username, password FROM users WHERE username = ? AND password = ?");
            $getUser->execute(array(
              $username, // Username Value
              $sha1Password, // Password Value
            ));
            $returnedUserData = $getUser->fetch();
            if ($getUser->rowCount() > 0) {
              header("Location: user-dashboard.php?username=" . $returnedUserData['username']);
            } else {
              echo "Username or password is invalid";
            }
          }
        }
      ?>

                <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post" autocomplete="off">
                    <input type='text' name='username' placeholder="اسم المستخدم" value="<?php if (isset($username)) { echo $username; } ?>">
                    <input type='password' name='password' placeholder="كلمة المرور" autocomplete="new-password">
                    <button>دخول</button>
                </form>
                
                <p>انضم إلينا !
                    <a href="register.php">تسجيل الدخول</a>
                </p>
        </div>
    </div>


    <?php include "includes/footer.php"; ?>
