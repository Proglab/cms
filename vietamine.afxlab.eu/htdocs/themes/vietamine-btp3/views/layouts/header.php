<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">

<title><?php echo isset($this->pageTitle) ? $this->pageTitle : Yii::app()->name; ?></title>

<!-- Bootstrap core CSS -->
<link href="/themes/vietamine-btp3/css/bootstrap.css" rel="stylesheet">

<!-- jQuery load -->
<script src="/themes/vietamine-btp3/js/jquery.min.js"></script>

<!-- Custom styles for this template -->
<link href="/themes/vietamine-btp3/css/style.css" rel="stylesheet">
<link href="/themes/vietamine-btp3/css/plugin.css" rel="stylesheet">
<link href="/themes/vietamine-btp3/css/font-awesome.min.css" rel="stylesheet">
<link href="/themes/vietamine-btp3/css/animate.min.css" rel="stylesheet">
<link href="/themes/vietamine-btp3/css/responsive.css" rel="stylesheet">
<link href="/themes/vietamine-btp3/css/color/orange.css" rel="stylesheet">
<!-- Revolutions slider -->
<link href="/themes/vietamine-btp3/rs-plugin/css/settings.css" rel="stylesheet">
<link href="/themes/vietamine-btp3/rs-plugin/css/captions.css" rel="stylesheet">

<!-- Google -->
<link href='http://fonts.googleapis.com/css?family=Gloria+Hallelujah' rel='stylesheet' type='text/css'>

<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
  <![endif]-->

</head>

<body>
<header id="header">
  <div class="top-header">
    <div class="container">
      <div class="row">
        
        <!-- _MENU-TOP START -->
        <?php $this->renderFile(Yii::getPathOfAlias('webroot.themes.vietamine-btp3.views.layouts') . DIRECTORY_SEPARATOR . '_menu-top.php') ?>
        <!-- _MENU-TOP START -->

      </div><!-- // .row -->
    </div><!-- // .container -->
  </div><!-- // .top-header -->

  <div class="main-header">
    <div class="container logo-area">

      <h1 class="logo">
        <a href="index.html">
          <img src="/themes/vietamine-btp3/images/logo.png" alt="Vie tamine">
        </a>

        <span class="site-title">Vie tamine, école de tennis</span>

      </h1><!-- // #logo -->

      <div id="mainmenu" class="site-menu visible-lg visible-md style2 right-menu">

        <div class="left-menu hide">
          <div class="left-menu-info">
            <form action="post">
              <input type="text" placeholder="Type to search" name="s">
              <button><i class="fa fa-search"></i></button>
            </form>
          </div><!-- // .left-menu-info -->
        </div><!-- // .left-menu.hide -->
        
        <!-- _MENU-MAIN START -->
        <?php $this->renderFile(Yii::getPathOfAlias('webroot.themes.vietamine-btp3.views.layouts') . DIRECTORY_SEPARATOR . '_menu-main.php') ?>
        <!-- _MENU-MAIN START -->

      </div><!-- // .site-menu.right-menu -->

      <!-- Repsonsive Menu Trigger -->
      <a class="pull-right responsive-menu visible-sm visible-xs" href="#panel-menu" id="responsive-menu"><i class="fa fa-bars"></i></a>
      <!-- End Reposnvie Menu Trigger -->

    </div><!-- // .container -->
  </div><!-- // .main-header -->
</header><!-- // header -->
