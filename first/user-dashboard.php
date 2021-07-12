<?php
  $page_title = 'User Dashboard';
  require('includes/connect.php');
  include ("includes/header.php");

?>

    <div class="wrapper">

        <div class="sidebar" data-color="blue" data-image="layout/img/sidebar-1.jpg">
            <div class="logo">
                <a href="#" class="simple-text">
					لوحة تحكم المستخدم
				</a>
            </div>

            <div class="sidebar-wrapper" style="direction: rtl">
                <ul class="nav">
                    <li class="active">
                        <a href="#">
	                        <i class="material-icons">dashboard</i>
	                        <p>لوحة تحكم المستخدم</p>
	                    </a>
                    </li>
                    <li>
                        <a href="profile.php">
	                        <i class="material-icons">person</i>
	                        <p>المعلومات الشخصية</p>
	                    </a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="main-panel">
            <nav class="navbar navbar-transparent navbar-absolute">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
                    </div>
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <a href="logout.php" class="dropdown-toggle" data-toggle="dropdown" title="خروج">
	 							   <i class="material-icons">exit_to_app</i>
	 							   <p class="hidden-lg hidden-md">خروج</p>
		 						</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <div class="content" style="direction: rtl">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-6 pull-right">
                            <div class="card card-stats">
                                <div class="card-header" data-background-color="blue">
                                    <i class="material-icons">public</i>
                                </div>
                                <div class="card-content">
                                    <p class="category">الافكار</p>
                                    <h3 class="title">200</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 pull-right">
                            <div class="card card-stats">
                                <div class="card-header" data-background-color="blue">
                                    <i class="material-icons">remove_red_eye</i>
                                </div>
                                <div class="card-content">
                                    <p class="category">المشاهدات</p>
                                    <h3 class="title">200</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 pull-right">
                            <div class="card card-stats">
                                <div class="card-header" data-background-color="blue">
                                    <i class="material-icons">attach_money</i>
                                </div>
                                <div class="card-content">
                                    <p class="category">رصيدك</p>
                                    <h3 class="title">200</h3>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6 col-md-12 pull-right">
                            <div class="card card-nav-tabs">
                                <div class="card-header" data-background-color="blue">
                                    <div class="nav-tabs-navigation">
                                        <h4 class="title">اخر الأفكار</h4>
                                    </div>
                                </div>

                                <div class="card-content">
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="profile">
                                            <table class="table">
                                                <tbody>
                                                    <tr>
                                                        <td>هذا النص يمكن أن يتم تركيبه على أي تصميم دون مشكلة فلن يبدو وكأنه نص منسوخ، غير منظم، غير منسق، أو حتى غير مفهوم. لأنه مازال نصاً بديلاً ومؤقتاً.</td>
                                                        <td class="td-actions text-right">
                                                            <button type="button" rel="tooltip" title="تعديل" class="btn btn-primary btn-simple btn-xs">
																<i class="material-icons">edit</i>
															</button>
                                                            <button type="button" rel="tooltip" title="حذف" class="btn btn-danger btn-simple btn-xs">
																<i class="material-icons">close</i>
															</button>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-12">
                            <div class="card">
                                <div class="card-header" data-background-color="blue">
                                    <h4 class="title">الأفكار الأكثر مشاهدة</h4>
                                </div>
                                <div class="card-content table-responsive">
                                    <table class="table table-hover">
                                        <thead class="text-warning">
                                            <th>ID</th>
                                            <th>عنوان الفكرة</th>
                                            <th>المشاهدات</th>
                                            <th>رصيدك</th>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>عنوان ما </td>
                                                <td>100000</td>
                                                <td>$36,738</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


<?php include "includes/footer.php"; ?>