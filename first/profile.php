<?php
  $page_title = 'Personal Information';
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
                    <li>
                        <a href="user-dashboard.php">
	                        <i class="material-icons">dashboard</i>
	                        <p>لوحة تحكم المستخدم</p>
	                    </a>
                    </li>
                    <li class="active">
                        <a href="#">
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

            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="card" style="direction: rtl;">
                                <div class="card-header" data-background-color="blue">
                                    <h4 class="title">تعديل الملف الشخصي</h4>
                                </div>
                                <div class="card-content">
                                    <form>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">البريد الإلكتروني</label>
                                                    <input type="email" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">اسم المستخدم</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">رقم الهاتف</label>
                                                    <input type="tel" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">الاسم كاملا</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">كلمة المرور</label>
                                                    <input type="password" class="form-control">
                                                </div>
                                            </div>
                                        </div>

                                        <button type="submit" class="btn btn-primary pull-right">تحديث البيانات</button>
                                        <div class="clearfix"></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card card-profile">
                                <div class="card-avatar">
                                    <a href="#pablo">
    									<img class="img" src="layout/img/faces/marc.jpg" />
    								</a>
                                </div>
                                <div class="content">
                                    <h4 class="card-title">عمرو شعلان</h4>
                                </div>
                                <button class="btn btn-primary">تحديث الصورة الشخصية</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
   <?php include "includes/footer.php"; ?>