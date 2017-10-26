<!DOCTYPE html>
<html class="no-js js">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no, width=device-width, minimal-ui">
    <title><?php 
            wp_title( '-', true, 'right');
            bloginfo( 'name' );
        ?></title>
    <meta name="description" content="<?php bloginfo('description'); ?>" />
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/style.min.css">
  </head>
<body <?php body_class(); ?>>
<header class="header">
    <div class="head">
      <div class="logo">
        <a href="<?php echo get_site_url(); ?>" title=""><img width="103" height="15.12" src="<?php bloginfo('template_url'); ?>/assets/img/logo-colored.png" alt="AirMax.ir"></a>
      </div>
      <a href="#" class="nav-menu menu-open"><span class="menu-btn"></span></a>
      <ul class="nav">
        <li>
          <a href="<?php echo get_site_url(); ?>/movies" title="فیلم‌های ایرانی و خارجی">فیلم‌های ایرانی و خارجی</a>
        </li>
        <li>
          <a href="<?php echo get_site_url(); ?>/music" title="موسیقی">موسیقی</a>
        </li>
        <li>
          <a href="<?php echo get_site_url(); ?>/apps" title="برنامه‌های کاربردی">برنامه‌های کاربردی</a>
        </li>
        <li class="Search">
          <form role="search" method="get" action="<?php echo get_site_url(); ?>">
            <div class="input-field">
              <input id="search-box" class="searchfield" type="search" value="" name="s" required>
              <label for="search-box"><span class="icon-search"></span></label>
            </div>
          </form>
        </li>
      </ul>
    </div>
    
  </header>
  <div class="gradiant"></div>
