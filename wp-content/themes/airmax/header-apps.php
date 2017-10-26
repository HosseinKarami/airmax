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
<header class="header movies">
    <div class="head">
      <div class="logo">
        <a href="<?php echo get_site_url(); ?>" title=""><img width="103" height="15.12" src="<?php bloginfo('template_url'); ?>/assets/img/logo-white.png" alt="AirMax.ir"></a>
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
<section class="moviespages">
  <div class="navigation">
    <div class="title">   
      <svg xmlns="http://www.w3.org/2000/svg" style="padding-left: .5rem;" width="48" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 24 30" style="enable-background:new 0 0 24 24;" xml:space="preserve"><g><g><path fill="#44B8E9" d="M17.5,18c0.276,0,0.5-0.224,0.5-0.5S17.776,17,17.5,17h-16C1.224,17,1,16.776,1,16.5v-12C1,4.224,1.224,4,1.5,4h16    C17.776,4,18,3.776,18,3.5S17.776,3,17.5,3h-16C0.673,3,0,3.673,0,4.5v12C0,17.327,0.673,18,1.5,18H9v1.077l-5.582,0.93    c-0.272,0.045-0.456,0.303-0.411,0.575C3.048,20.827,3.26,21,3.5,21c0.027,0,0.054-0.002,0.082-0.007L9.54,20h1.919l5.958,0.993    C17.445,20.998,17.473,21,17.5,21c0.241,0,0.453-0.173,0.492-0.418c0.046-0.272-0.139-0.53-0.411-0.575L12,19.077V18H17.5z M11,19    h-1v-1h1V19z M23.829,4.123c-0.108-0.095-0.252-0.138-0.396-0.119l-11,1.5C12.185,5.539,12,5.75,12,6v9    c0,0.25,0.185,0.461,0.433,0.496l11,1.5C23.455,16.999,23.478,17,23.5,17c0.12,0,0.237-0.043,0.329-0.125    C23.937,16.781,24,16.644,24,16.499v-12C24,4.355,23.938,4.218,23.829,4.123z M17,15.109l-4-0.546V11h4V15.109z M17,10h-4V6.437    l4-0.546V10z M23,15.927l-5-0.682V11h5V15.927z M23,10h-5V5.755l5-0.682V10z"/></g></g></svg>
      دسته‌بندی‌ها
      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns" viewBox="0 0 100 100" width="24" version="1.1" x="0px" y="0px"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" sketch:type="MSPage"><path d="M59.310926,8.39744231 C60.2864012,5.71734609 63.2573368,4.33821093 65.9345041,5.31262014 L65.9345041,5.31262014 C68.61713,6.28901612 70.0038355,9.245533 69.0255738,11.9332849 L40.0283299,91.6025577 C39.0528547,94.2826539 36.0819191,95.6617891 33.4047518,94.6873799 L33.4047518,94.6873799 C30.7221259,93.7109839 29.3354204,90.754467 30.3136821,88.0667151 L59.310926,8.39744231 L59.310926,8.39744231 Z" fill="#44B8E9" sketch:type="MSShapeGroup"/></g></svg>
    </div>
    <ul class="navitem">
      <li<?php if(is_page( 'multimedia' ) ) {?> class="selected"<?php } ?>><a href="<?php echo get_site_url(); ?>/apps/multimedia" title="">مالتی‌مدیا</a></li>
      <li<?php if(is_page( 'security' ) ) {?> class="selected"<?php } ?>><a href="<?php echo get_site_url(); ?>/apps/security" title="">امنیت</a></li>
      <li<?php if(is_page( 'graphic' ) ) {?> class="selected"<?php } ?>><a href="<?php echo get_site_url(); ?>/apps/graphic" title="">گرافیک</a></li>
      <li<?php if(is_page( 'cddvd' ) ) {?> class="selected"<?php } ?>><a href="<?php echo get_site_url(); ?>/apps/cddvd" title="">دیسک</a></li>
      <li<?php if(is_page( 'internet' ) ) {?> class="selected"<?php } ?>><a href="<?php echo get_site_url(); ?>/apps/internet" title="">اینترنت</a></li>
      <li<?php if(is_page( 'business' ) ) {?> class="selected"<?php } ?>><a href="<?php echo get_site_url(); ?>/apps/business" title="">اداری</a></li>
      <li<?php if(is_page( 'utilities' ) ) {?> class="selected"<?php } ?>><a href="<?php echo get_site_url(); ?>/apps/utilities" title="">کاربردی</a></li>
      <li<?php if(is_page( 'os' ) ) {?> class="selected"<?php } ?>><a href="<?php echo get_site_url(); ?>/apps/os" title="">سیستم عامل</a></li>
      <li<?php if(is_page( 'apps' ) ) {?> class="selected"<?php } ?>><a href="<?php echo get_site_url(); ?>/apps/" title="">همه برنامه‌ها</a></li>
    </ul>
  </div>
</section>