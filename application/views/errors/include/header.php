<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Cherrypie_Schedule</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <meta name="description" content="cherryPie homepage">
    <meta name="author" content="cherrypie">

    <!-- Bootstrap v4.0.0-beta CSS via CDN -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css">

    <!-- Theme style -->
    <link href="<?php echo asset_url();?>css/theme-style.min.css" rel="stylesheet">

    <!-- Optional: ICON SETS -->
    <!-- Iconset: Font Awesome 4.7.0 via CDN -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo asset_url();?>css/colour-blue-dark.css" rel="stylesheet">

    <!-- Google fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Rambla:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Calligraffitti' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/earlyaccess/jejugothic.css' rel='stylesheet' type='text/css'>

    <!--Plugin: Retina.js (high def image replacement) - @see: http://retinajs.com/-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/retina.js/1.3.0/retina.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <style>
    body {
        font-family: 'Jeju Gothic', serif;
    }
    </style>

  </head>

  <!-- ======== @Region: body ======== -->
  <body class="page page-features navbar-layout-default header-compact blue-dark">

    <!-- @plugin: page loading indicator, delete to remove loader -->
    <div class="page-loader" data-toggle="page-loader"></div>

    <a href="#content" id="top" class="sr-only">Skip to content</a>

    <!-- ======== @Region: #header ======== -->
    <div id="header" class="border border-op-2 bg-fade border-grey-dark">

      <div data-toggle="sticky">

        <div class="header">
          <div class="header-inner container">
            <div class="header-brand">
              <a class="header-brand-text" href="main" title="Home">
                <h1>
                  <!-- <strong>EU</strong><span>Lover Schedule</span>&nbsp;<i class="fa fa-magic" aria-hidden="true"></i> -->
                  <strong>EU Lover</strong>&nbsp;<span>Schedule</span>&nbsp;<i class="fa fa-magic" aria-hidden="true"></i>
                </h1>
              </a>
            </div>

            <ul class="nav nav-pills nav-pills-border-bottom-inside nav-justified flex-row justify-md-content-center" role="tablist" data-toggle="scrollbar">
              <li class="nav-item"> <a class="nav-link text-center text-uppercase font-weight-bold px-3 px-lg-4 py-3 <?php if($menu == 'main'){ echo 'active'; }?>" href="<?php echo site_url('main'); ?>" role="tab" ><i class="fa fa-home"></i></a> </li>
              <li class="nav-item"> <a class="nav-link text-center text-uppercase font-weight-bold px-3 px-lg-4 py-3 <?php if($menu == 'personal'){ echo 'active'; }?>" href="<?php echo site_url('personal_blog'); ?>" role="tab"><i class="fa fa-pencil"></i></a> </li>
              <li class="nav-item"> <a class="nav-link text-center text-uppercase font-weight-bold px-3 px-lg-4 py-3 <?php if($menu == 'common'){ echo 'active'; }?>" href="<?php echo site_url('common_blog'); ?>" role="tab"><i class="fa fa-suitcase"></i></a> </li>
              <li class="nav-item"> <a class="nav-link text-center text-uppercase font-weight-bold px-3 px-lg-4 py-3 <?php if($menu == 'schedule'){ echo 'active'; }?>" href="<?php echo site_url('schedule'); ?>" role="tab"><i class="fa fa-calendar"></i></a></li>
              <li class="nav-item"> <a class="nav-link text-center text-uppercase font-weight-bold px-3 px-lg-4 py-3 <?php if($menu == 'timeline'){ echo 'active'; }?>" href="<?php echo site_url('timeline'); ?>" role="tab"><i class="fa fa-clock-o"></i></a> </li>
              <li class="nav-item"> <a class="nav-link text-center text-uppercase font-weight-bold px-3 px-lg-4 py-3" href=<?php echo site_url('auth/logout'); ?>" role="tab"><i class="fa fa-unlock-alt"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
