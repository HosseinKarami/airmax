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
<header class="header goldenglobe">
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
  <section class="oscarpage goldenglobe">
  <div class="oscarhead">
    <div class="icon">
      <svg width="417" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 100 100" enable-background="new 0 0 100 100" fill="#bba36c" xml:space="preserve"><g><path d="M66,95.333v-3.736l-2.882-5.764H61v-40h-2.516c-0.078-1.955-0.523-2.453-2.777-4.707l-0.966-0.966   C58.256,39.846,61,38.998,61,36.833v-3.5h-2.965l-4.144-6.215c0.87-0.33,1.702-0.766,2.475-1.315   c1.316-0.935,2.431-2.172,3.223-3.578C60.512,20.588,61,18.723,61,16.833c0-2.916-1.148-5.563-3.006-7.533   c-0.008-0.032-0.01-0.064-0.019-0.096L57.92,9.219C55.918,7.137,53.11,5.833,50,5.833c-0.646,0-1.277,0.067-1.895,0.175   L43.017,3.53l-1.142,5.914C40.096,11.399,39,13.987,39,16.833c0,4.696,2.963,8.702,7.113,10.277l-4.148,6.223H39v3.5   c0,2.165,2.744,3.013,6.259,3.327l-0.966,0.966c-2.254,2.254-2.699,2.752-2.777,4.707H39v40h-2.118L34,91.597v3.736h16H66z    M55.825,23.68l-0.47-0.42l1.562-1.801l0.503,0.453C56.969,22.567,56.432,23.163,55.825,23.68z M57.436,11.771   c0.307,0.45,0.571,0.931,0.794,1.434c-1.247,2.491-6.257,4.688-7.933,5.421c-2.916,1.275-6.776,2.043-8.296,2.314   c-0.271-0.524-0.489-1.078-0.653-1.655c4.799-1.035,10.481-3.05,12.741-4.57C55.441,13.805,56.707,12.836,57.436,11.771z    M45.338,6.884c-0.358,0.168-0.705,0.356-1.041,0.561l0.188-0.975L45.338,6.884z M50,7.833c2.313,0,4.418,0.884,6.014,2.323   c-0.206,0.703-1.216,1.672-3.04,2.899c-2.039,1.371-7.439,3.269-11.949,4.253C41.016,17.15,41,16.994,41,16.833   C41,11.871,45.037,7.833,50,7.833z M43.231,22.746c1.916-0.374,5.203-1.123,7.866-2.289c3.83-1.675,6.347-3.211,7.817-4.793   C58.965,16.047,59,16.436,59,16.833c0,1.118-0.215,2.222-0.615,3.255l-1.644-1.48l-4.187,4.83l1.558,1.394   c-1.265,0.653-2.663,1.001-4.112,1.001C47.301,25.833,44.883,24.633,43.231,22.746z M48.147,27.665   c0.604,0.103,1.22,0.168,1.853,0.168c0.629,0,1.249-0.057,1.857-0.161l3.774,5.661H50h-5.632L48.147,27.665z M41,36.833v-1.5h9h9   v1.5c0,0.061-0.103,1.5-9,1.5S41,36.894,41,36.833z M45.707,42.54l2.232-2.232c0.681,0.018,1.371,0.025,2.061,0.025   s1.38-0.007,2.061-0.025l2.232,2.232c1.776,1.776,2.118,2.138,2.186,3.293H43.521C43.589,44.678,43.931,44.316,45.707,42.54z    M41,47.833h18v38h-9h-9V47.833z M36,93.333v-1.264l2.118-4.236H39h11h11h0.882L64,92.069v1.264H50H36z"/></g></svg>
    </div>
    <div class="detail">
      <h1>لیست کاندیداها و برندگان گلدن گلوب</h1>
      <h2>از سال ۲۰۰۲ تا ۲۰۱۶</h2>
      <h2>اختصاصی کاربران سرویس اینترنت ایرمکس</h2>
    </div>
  </div>
  <div class="years">
    <ul>
      <li><a href="<?php echo get_site_url(); ?>/goldenglobes-2002" title="" <?php if(is_page( 'goldenglobes-2002' ) ) {?> class="active"<?php } ?>>۲۰۰۲</a></li>
      <li><a href="<?php echo get_site_url(); ?>/goldenglobes-2003" title="" <?php if(is_page( 'goldenglobes-2003' ) ) {?> class="active"<?php } ?>>۲۰۰۳</a></li>
      <li><a href="<?php echo get_site_url(); ?>/goldenglobes-2004" title="" <?php if(is_page( 'goldenglobes-2004' ) ) {?> class="active"<?php } ?>>۲۰۰۴</a></li>
      <li><a href="<?php echo get_site_url(); ?>/goldenglobes-2005" title="" <?php if(is_page( 'goldenglobes-2005' ) ) {?> class="active"<?php } ?>>۲۰۰۵</a></li>
      <li><a href="<?php echo get_site_url(); ?>/goldenglobes-2006" title="" <?php if(is_page( 'goldenglobes-2006' ) ) {?> class="active"<?php } ?>>۲۰۰۶</a></li>
      <li><a href="<?php echo get_site_url(); ?>/goldenglobes-2007" title="" <?php if(is_page( 'goldenglobes-2007' ) ) {?> class="active"<?php } ?>>۲۰۰۷</a></li>
      <li><a href="<?php echo get_site_url(); ?>/goldenglobes-2008" title="" <?php if(is_page( 'goldenglobes-2008' ) ) {?> class="active"<?php } ?>>۲۰۰۸</a></li>
      <li><a href="<?php echo get_site_url(); ?>/goldenglobes-2009" title="" <?php if(is_page( 'goldenglobes-2009' ) ) {?> class="active"<?php } ?>>۲۰۰۹</a></li>
      <li><a href="<?php echo get_site_url(); ?>/goldenglobes-2010" title="" <?php if(is_page( 'goldenglobes-2010' ) ) {?> class="active"<?php } ?>>۲۰۱۰</a></li>
      <li><a href="<?php echo get_site_url(); ?>/goldenglobes-2011" title="" <?php if(is_page( 'goldenglobes-2011' ) ) {?> class="active"<?php } ?>>۲۰۱۱</a></li>
      <li><a href="<?php echo get_site_url(); ?>/goldenglobes-2012" title="" <?php if(is_page( 'goldenglobes-2012' ) ) {?> class="active"<?php } ?>>۲۰۱۲</a></li>
      <li><a href="<?php echo get_site_url(); ?>/goldenglobes-2013" title="" <?php if(is_page( 'goldenglobes-2013' ) ) {?> class="active"<?php } ?>>۲۰۱۳</a></li>
      <li><a href="<?php echo get_site_url(); ?>/goldenglobes-2014" title="" <?php if(is_page( 'goldenglobes-2014' ) ) {?> class="active"<?php } ?>>۲۰۱۴</a></li>
      <li><a href="<?php echo get_site_url(); ?>/goldenglobes-2015" title="" <?php if(is_page( 'goldenglobes-2015' ) ) {?> class="active"<?php } ?>>۲۰۱۵</a></li>
      <li><a href="<?php echo get_site_url(); ?>/goldenglobes" title="" <?php if(is_page( 'goldenglobes' ) ) {?> class="active"<?php } ?>>۲۰۱۶</a></li>
    </ul>
  </div>
