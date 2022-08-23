<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

     <title><?php echo the_title(); ?></title>
<!-- 
Hydro Template 
http://www.templatemo.com/tm-509-hydro
-->
     <meta charset="<?php bloginfo('charset')?>">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
     
     <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/style.css">
     <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/bootstrap.min.css">
     <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/magnific-popup.css">
     <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/font-awesome.min.css">

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/templatemo-style.css">
     
</head>
<body>

     <!-- MENU -->
     <section class="navbar custom-navbar navbar-fixed-top" role="navigation">
          <div class="container">

               <div class="navbar-header">
                    <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                    </button>

                    <!-- lOGO TEXT HERE -->
                    <a href="<?php echo home_url(); ?>" class="navbar-brand"><?php echo get_bloginfo( 'name' ); ?></a>
               </div>

               <!-- MENU LINKS -->
               <div class="collapse navbar-collapse">
               <?php wp_nav_menu(array('theme_location' => 'header', 'menu_class' => 'nav'));?>

                    <ul class="nav navbar-nav navbar-right">
                         <li><a href="tel:#"><i class="fa fa-phone"></i></a></li>
                         <li><a href="mailto:#"><i class="fa fa-envelope"></i></a></li>
                         <li><a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook-square"></i></a></li>
                    </ul>
               </div>

          </div>
     </section>