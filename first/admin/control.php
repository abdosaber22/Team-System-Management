<?php
  session_start();
  $page_title = 'Dashboard';
  require('includes/connect.php');
  include ("includes/header.php");
  if (!isset($_SESSION['idaaa'])) {
    echo "<script>window.location.href = '../'; </script>";
  }

  $admin = $conn->prepare("SELECT * FROM users WHERE status = 1 AND id = " . $_SESSION['idaaa']);
  $admin->execute();
  $admin_data = $admin->fetch();
?>
<!--
    <div class="confirm">
        <h4>هل تريد حذف : <h4 class="confirm-msg"></h4></h4>
    </div>
-->

    <div class="container rtl">
        <h1 style='font-size: 2.5em'>بيانات المشرف (المسؤل)</h1>
        <h2 style='font-size: 2em'>اسم المشرف:
            <?php echo $admin_data['username']; ?>
        </h2>
        <p>الاسم الكامل:
            <?php echo $admin_data['fullname']; ?>
        </p>
        <p>البريد الإلكتروني:
            <?php echo $admin_data['email']; ?>
        </p>
    </div>


    <?php
  $gUsers = $conn->prepare('SELECT * FROM users WHERE STATUS = 0 And id != ' . $_SESSION['idaaa']);
  $gUsers->execute();
  $users = $gUsers->fetchAll();

  $gPosts = $conn->prepare('SELECT * FROM posts');
  $gPosts->execute();
  $posts = $gPosts->fetchAll();
?>
        <h1 class="text-center">Mange Users</h1>
        <div class="container">
            <div class="table-responsive">
                <table class="main-table text-center table table-bordered">
                    <tr>
                        <!--                    <th>ID</th>-->
                        <th>الاسم</th>
                        <th>لسم المستخدم</th>
                        <th>البريد الإلكتروني</th>
                        <th>حذف</th>
                    </tr>
                    <?php
      foreach ($users as $user) {
    ?>
                        <tr>
                            <!--
                        <td>
                            <?php echo $user['id'] ?>
                        </td>
-->
                            <td>
                                <?php echo $user['fullname'] ?>
                            </td>
                            <td>
                                <?php echo $user['username'] ?>
                            </td>
                            <td>
                                <?php echo $user['email'] ?>
                            </td>
                            <td>
                                <a id="user-delete" class="btn-delete" href='delete.php?delete=user&user_id=<?php echo $user["id"] ?>'>حذف</a>
                            </td>
                        </tr>
                        <?php } ?>
                </table>

            </div>
        </div>



        <h1 class="text-center">Mange Users Posts</h1>
        <div class="container">
            <div class="table-responsive">
                <table class="main-table text-center table table-bordered">
                    <tr>
                        <!--                    <th>ID</th>-->
                        <th>الناشر</th>
                        <th>تاريخ النشر</th>
                        <th>البريد الإلكتروني</th>
                        <th>نوع البوست</th>
                        <th>حذف</th>
                    </tr>
                    <?php
      foreach ($posts as $post) {
    ?>
                        <tr>
                            <!--
                        <td>
                            <?php echo $post['id'] ?>
                        </td>
-->
                            <td>
                                <?php echo $post['publisher'] ?>
                            </td>
                            <td>
                                <?php echo $post['dates'] ?>
                            </td>
                            <td>
                                <?php echo $post['email'] ?>
                            </td>
                            <td>
                                <?php echo $post['type'] ?>
                            </td>
                            <td>
                                <a id="post-delete" class="btn-delete" href='delete.php?delete=post&post_id=<?php echo $post["id"] ?>'>حذف</a>
                            </td>
                        </tr>
                        <?php } ?>
                </table>
            </div>
        </div>




        <?php include "../includes/footer.php"; ?>
