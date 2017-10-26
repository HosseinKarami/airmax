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
      <svg version="1.1" width="48" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
         viewBox="0 0 55 55" xml:space="preserve">
        <path fill="#44B8E9" d="M12.9,1.5c-8.1,5.1-7.9,47.6,0,51c4.8,2,37.4-15.3,37.4-24.6C50.2,18.1,16.8-0.9,12.9,1.5z"/>
      </svg>
      دسته بندی‌ها
      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns" viewBox="0 0 100 100" width="24" version="1.1" x="0px" y="0px"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" sketch:type="MSPage"><path d="M59.310926,8.39744231 C60.2864012,5.71734609 63.2573368,4.33821093 65.9345041,5.31262014 L65.9345041,5.31262014 C68.61713,6.28901612 70.0038355,9.245533 69.0255738,11.9332849 L40.0283299,91.6025577 C39.0528547,94.2826539 36.0819191,95.6617891 33.4047518,94.6873799 L33.4047518,94.6873799 C30.7221259,93.7109839 29.3354204,90.754467 30.3136821,88.0667151 L59.310926,8.39744231 L59.310926,8.39744231 Z" fill="#44B8E9" sketch:type="MSShapeGroup"/></g></svg>
    </div>
    <ul class="navitem">
      <li<?php if(is_page( 'animation' ) ) {?> class="selected"<?php } ?>><a href="<?php echo get_site_url(); ?>/movies/animation" title="">انیمیشن</a></li>
      <li<?php if(is_page( 'action' ) ) {?> class="selected"<?php } ?>><a href="<?php echo get_site_url(); ?>/movies/action" title="">اکشن</a></li>
      <li<?php if(is_page( 'sci-fi' ) ) {?> class="selected"<?php } ?>><a href="<?php echo get_site_url(); ?>/movies/sci-fi" title="">علمی-تخیلی</a></li>
      <li<?php if(is_page( 'horror' ) ) {?> class="selected"<?php } ?>><a href="<?php echo get_site_url(); ?>/movies/horror" title="">ترسناک</a></li>
      <li<?php if(is_page( 'thriller' ) ) {?> class="selected"<?php } ?>><a href="<?php echo get_site_url(); ?>/movies/thriller" title="">هیجانی</a></li>
      <li<?php if(is_page( 'drama' ) ) {?> class="selected"<?php } ?>><a href="<?php echo get_site_url(); ?>/movies/drama" title="">درام</a></li>
      <li<?php if(is_page( 'documentary' ) ) {?> class="selected"<?php } ?>><a href="<?php echo get_site_url(); ?>/movies/documentary" title="">مستند</a></li>
      <li<?php if(is_page( 'comedy' ) ) {?> class="selected"<?php } ?>><a href="<?php echo get_site_url(); ?>/movies/comedy" title="">کمدی</a></li>
      <li<?php if(is_page( 'persian' ) ) {?> class="selected"<?php } ?>><a href="<?php echo get_site_url(); ?>/movies/persian" title="">ایرانی</a></li>
      <li<?php if(is_page( 'movies' ) ) {?> class="selected"<?php } ?>><a href="<?php echo get_site_url(); ?>/movies/" title="">همه فیلم‌ها</a></li>
    </ul>
  </div>
</section>