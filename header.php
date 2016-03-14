<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package BaoRu
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
     <!-- Bootstrap -->
    <link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/css/normalize.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/css/main.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/css/media.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/css/fonts.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/animate.css" />
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.viewportchecker.min.js"></script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <?php wp_head(); ?>

<?php wp_head(); ?>
</head>
 <body>
    <header class="main_head">
      <div class="menu-line">
      </div>
      <div class="container">
        <div class="row line-1">
          <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 logo"> 
              <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="logo">
          </div>
          <div class="col-lg-8 visible-lg"> 
            <div class="menu">
              <ul id="smooth">
                <li><a href="#advantages" data-hover="Преимущества">Преимущества</a></li>
                <li><a href="#services" data-hover="Услуги">Услуги</a></li>
                <li><a href="#works" data-hover="Работы">Работы</a></li>
                <li><a href="#contact" data-hover="Контакты">Контакты</a></li>
              </ul>  
                <a href="http://baodigital.com" class="ru"></a>
                <a href="http://baodigital.com/en" class="en"></a>
            </div>
          </div>
          <div class="col-lg-2 contact_header visible-lg">
            <div class="mobile_header">
              +380689844688
            </div>
            <div class="email_header">
              hello@baodigital.com
            </div>
          </div>
          <div class="col-md-offset-2 col-md-4 col-sm-offset-2 col-sm-4 contact_header hidden-lg hidden-xs">
            <div class="mobile_header">
              +380689844688
            </div>
            <div class="email_header">
              hello@baodigital.com
            </div>
          </div>
          <div class="col-md-offset-2 col-md-2 col-sm-offset-2 col-sm-2 col-xs-offset-8 col-xs-2 hidden-lg text-right">
            <i class="menu-btn"></i>
          </div>
        </div> 
        <div class="row">
          <div class="col-lg-6 col-md-12 cold-sm-12 col-xs-12 tagline" id="smoothForm">
            <h1>We make business talk</h1>  
            <p>Агенство цифрового маркетинга</p>  
            <a class="read_more" href="#send-form" >Подробнее</a>             
          </div>
          <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 tagline-img">
            <i class="img-header center-block"></i>
          </div>
        </div>
      </div>
    </header>
    <section class="menu-visible">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="menu-mobile text-center">
              <ul id="smooth-mobile">
                <li><a href="#advantages">Преимущества</a></li>
                <li><a href="#services">Услуги</a></li>
                <li><a href="#contact">Контакты</a></li>
                <li><a href="#works">Работы</a></li>
              </ul>  
                <a href="http://baodigital.com" class="ru"></a>
                <a href="http://baodigital.com/en" class="en"></a>
            </div>
          </div>
        </div>
      </div>
    </section>

