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
      <svg version="1.1" style="padding-left: .5rem;" width="48" height="48" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
   viewBox="0 0 55 55" style="enable-background:new 0 0 55 55;" xml:space="preserve">
      <style type="text/css">
        .st0{fill:#44B8E9;}
        .st1{fill:none;stroke:#44B8E9;stroke-width:4.86;stroke-linecap:round;}
        .st2{fill:none;stroke:#44B8E9;stroke-width:4.05;stroke-linecap:round;}
      </style>
      <g>
        <g transform="translate(-237.000000, -336.000000)">
          <g transform="translate(237.000000, 339.000000)">
            <g>
              <path class="st0" d="M4.3,25.5h23.6c1.3,0,2.3-1,2.3-2.3v0c0-1.3-1-2.3-2.3-2.3H4.3C3,21,2,22,2,23.3v0C2,24.5,3,25.5,4.3,25.5z
                "/>
              <path class="st0" d="M4.3,15.5h23.6c1.3,0,2.3-1,2.3-2.3l0,0c0-1.3-1-2.3-2.3-2.3H4.3C3,11,2,12,2,13.3l0,0
                C2,14.5,3,15.5,4.3,15.5z"/>
              <path class="st0" d="M27.9,5.5H4.3C3,5.5,2,4.5,2,3.3l0,0C2,2,3,1,4.3,1h23.6c1.3,0,2.3,1,2.3,2.3l0,0
                C30.2,4.5,29.2,5.5,27.9,5.5z"/>
            </g>
            <g transform="translate(15.454545, 0.000000)">
              <ellipse class="st0" cx="14.3" cy="40.3" rx="12.3" ry="10.7"/>
              <path class="st1" d="M24.2,39.1v-38"/>
              <path class="st2" d="M25.9,2.6C34,9,36.4,6.8,36.4,21.6"/>
            </g>
          </g>
        </g>
      </g>
      </svg>
      پلی لیست‌ها
      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns" viewBox="0 0 100 100" width="24" version="1.1" x="0px" y="0px"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" sketch:type="MSPage"><path d="M59.310926,8.39744231 C60.2864012,5.71734609 63.2573368,4.33821093 65.9345041,5.31262014 L65.9345041,5.31262014 C68.61713,6.28901612 70.0038355,9.245533 69.0255738,11.9332849 L40.0283299,91.6025577 C39.0528547,94.2826539 36.0819191,95.6617891 33.4047518,94.6873799 L33.4047518,94.6873799 C30.7221259,93.7109839 29.3354204,90.754467 30.3136821,88.0667151 L59.310926,8.39744231 L59.310926,8.39744231 Z" fill="#44B8E9" sketch:type="MSShapeGroup"/></g></svg>
    </div>
    <ul class="navitem">
      <li<?php if(is_page( 'party' ) ) {?> class="selected"<?php } ?>><a href="<?php echo get_site_url(); ?>/music/party" title="">پارتی</a></li>
      <li<?php if(is_page( 'pop' ) ) {?> class="selected"<?php } ?>><a href="<?php echo get_site_url(); ?>/music/pop" title="">پاپ</a></li>
      <li<?php if(is_page( 'hiphop' ) ) {?> class="selected"<?php } ?>><a href="<?php echo get_site_url(); ?>/music/hiphop" title="">هیپ‌هاپ</a></li>
      <li<?php if(is_page( 'love' ) ) {?> class="selected"<?php } ?>><a href="<?php echo get_site_url(); ?>/music/love" title="">عاشقانه</a></li>
      <li<?php if(is_page( 'folk' ) ) {?> class="selected"<?php } ?>><a href="<?php echo get_site_url(); ?>/music/folk" title="">سنتی</a></li>
      <li<?php if(is_page( 'bnd' ) ) {?> class="selected"<?php } ?>><a href="<?php echo get_site_url(); ?>/music/bnd" title="">بندری</a></li>
      <li<?php if(is_page( 'music' ) ) {?> class="selected"<?php } ?>><a href="<?php echo get_site_url(); ?>/music/" title="">همه آهنگ‌ها</a></li>
    </ul>
  </div>
</section>