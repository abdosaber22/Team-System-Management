<!doctype html>
<html lang="en">

<head>
    <!-- The below 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Fav Icon-->
    <link rel="apple-touch-icon" sizes="76x76" href="layout/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="layout/img/favicon.png" />

    <!-- View.php Dynmic Title-->
    <?php
    $server_uri = $_SERVER['PHP_SELF'];
    if ($server_uri == '/first/view.php') {
      if (isset($_GET['post_id'])) {
        $getpostid = $conn->prepare("SELECT * FROM posts WHERE id = " . $_GET['post_id']);
        $getpostid->execute();
        $gotData = $getpostid->fetch();
        $page_title = 'بواسطة: ' . $gotData['publisher'];
      }
    }
  ?>
        <!-- Dynmic Titles Function-->
        <?php require('title.php'); ?>
        <title>
            <?php title(); ?>
        </title>

        <!-- Google Fonts and icons: Scheherazade || Roboto || Material Icons -->
        <link href="https://fonts.googleapis.com/css?family=Scheherazade:400,700&amp;subset=arabic" rel="stylesheet">
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>
        
        <!-- Font Awesome  Icons -->
        <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
        
        <!-- Bootstrap core CSS     -->
        <link href="layout/css/bootstrap.min.css" rel="stylesheet" />

        <!--  Material Dashboard CSS    -->
        <link href="layout/css/material-dashboard.css" rel="stylesheet" />
        
        <!--  Custom CSS Styling   -->
        <link href="layout/css/style.css" rel="stylesheet" >

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <?php require('readmore.php'); ?>
