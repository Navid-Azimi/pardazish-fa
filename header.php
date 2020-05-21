<!doctype html>
<html>
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0, user-scalable=no">
      <title>   <?php if(is_front_page() || is_home()){
         echo get_bloginfo('name');
         } else{
         echo wp_title('') . ' | '. get_bloginfo('name');
         }?></title>
      <?php
         echo wp_head();
         ?>
   </head>
   <body>
      <?php if(is_front_page()): ?>
      <div id="header-holder" class="main-header">
      <?php endif; ?>
      <?php if(is_home()): ?>
      <div id="header-holder" class="inner-header">
      <?php endif; ?>
      <?php if(is_page_template('page-contact.php')):  ?>
      <div id="header-holder" class="inner-header contact-header">
      <?php  endif; ?>
      <?php if(is_page_template('page-hosting.php')): ?>
      <div id="header-holder" class="inner-header hosting-page">
      <?php endif; ?>
      <?php if(is_page_template('page-domain.php')): ?>
      <div id="header-holder" class="inner-header domainspage-header">
      <?php endif; ?>
      <?php if(is_single()): ?>
      <div id="header-holder" class="inner-header">
      <div class="bg-animation"></div>
      <?php endif; ?>
      <?php if(is_page_template('page-about.php')): ?>
      <div id="header-holder" class="inner-header about-header">
      <div class="bg-custom">
         <div class="obj-gradiant1"></div>
         <div class="obj-gradiant2"></div>
      </div>
      <?php endif; ?>
      <nav id="nav" class="navbar navbar-default navbar-full">
         <div class="container-fluid">
            <div class="container container-nav">
               <div class="row">
                  <div class="col-md-12">
                     <div class="navbar-header">
                        <button aria-expanded="false" type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        </button>
                        <a class="logo-holder" href="<?php echo get_home_url(); ?>">
                           <div class="logo" style="width:62px;height:68px"></div>
                        </a>
                     </div>
                     <ul class="top-nav">
                         <li class="support-button-holder">
                             <a href="https://pardazish.com/fa" class="support-button">انگلیسی</a>
                         </li>
                         <li>
                             <a href="javascript:void(0)" disabled>دری</a>
                         </li>
                        <li class="support-button-holder support-dropdown">
                              <a class="support-button" href="#">پشتیبانی</a>
                              <ul class="dropdown-menu">
                                 <li><a href="tel:+93793725403"><i class="fas fa-phone"></i> تماس بگیرید 0793725403</a></li>
                                 <li><a href="javascript:void(Tawk_API.toggle())"><i class="fas fa-comments"></i>شروع چت زنده</a></li>
                              </ul>
                           </li>
                     </ul>
                  </div>
                  </div>
                  <div class="row">
                  <div class="col-md-12">
                     <div style="height: 1px;" role="main" aria-expanded="false" class="navbar-collapse collapse" id="bs">
                        <?php
                           $defaults = array(
                               'container' => 'ul',
                               'menu_class' => "nav navbar-nav navbar-right",
                               'theme_location' => "primary-menu"
                           );
                           wp_nav_menu($defaults);
                           ?>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </nav>