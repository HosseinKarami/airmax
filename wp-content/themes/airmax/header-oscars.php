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
<header class="header oscar">
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
  <section class="oscarpage">
  <div class="oscarhead">
    <div class="icon">
      <svg width="417" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 100 100" enable-background="new 0 0 100 100" fill="#BBA36C" xml:space="preserve"><g><path d="M39,83.5h22v-7H39V83.5z M41,78.5h18v3H41V78.5z"/><path d="M71,86.5h-5v-15h-2.5v-5h-9.931L55.936,31H58.5V16.877l-6.008-2.955l1.008-1.008V4h-7v8.914l1.008,1.008L41.5,16.877v14.51   l2.533-0.845L46.431,66.5H36.5v5H34v15h-5v7h42V86.5z M51.564,66.5H51V31h2.931L51.564,66.5z M48.5,6h3v6.086l-1.5,1.5l-1.5-1.5V6z    M43.5,28.613v-10.49l5.502-2.706L50,16.414l0.998-0.998l5.502,2.706V29H51v-0.779v-0.103l4.447-2.224l-0.895-1.789L51,25.882V24   h-6v2h4v0.779L43.5,28.613z M45.998,29.934l-0.171,0.011L49,28.887V30v1v35.5h-0.564L45.998,29.934z M38.5,68.5h23v3h-23V68.5z    M36,73.5h0.5h27H64v13H36V73.5z M69,91.5H31v-3h3h32h3V91.5z"/></g></svg>
    </div>
    <div class="detail">
      <h1>لیست کاندیداها و برندگان اسکار</h1>
      <h2>از سال ۲۰۰۲ تا ۲۰۱۶</h2>
      <h2>اختصاصی کاربران سرویس اینترنت ایرمکس</h2>
    </div>
  </div>
  <div class="years">
    <ul>
      <li><a href="<?php echo get_site_url(); ?>/oscars-2002" title="" <?php if(is_page( 'oscars-2002' ) ) {?> class="active"<?php } ?>>۲۰۰۲</a></li>
      <li><a href="<?php echo get_site_url(); ?>/oscars-2003" title="" <?php if(is_page( 'oscars-2003' ) ) {?> class="active"<?php } ?>>۲۰۰۳</a></li>
      <li><a href="<?php echo get_site_url(); ?>/oscars-2004" title="" <?php if(is_page( 'oscars-2004' ) ) {?> class="active"<?php } ?>>۲۰۰۴</a></li>
      <li><a href="<?php echo get_site_url(); ?>/oscars-2005" title="" <?php if(is_page( 'oscars-2005' ) ) {?> class="active"<?php } ?>>۲۰۰۵</a></li>
      <li><a href="<?php echo get_site_url(); ?>/oscars-2006" title="" <?php if(is_page( 'oscars-2006' ) ) {?> class="active"<?php } ?>>۲۰۰۶</a></li>
      <li><a href="<?php echo get_site_url(); ?>/oscars-2007" title="" <?php if(is_page( 'oscars-2007' ) ) {?> class="active"<?php } ?>>۲۰۰۷</a></li>
      <li><a href="<?php echo get_site_url(); ?>/oscars-2008" title="" <?php if(is_page( 'oscars-2008' ) ) {?> class="active"<?php } ?>>۲۰۰۸</a></li>
      <li><a href="<?php echo get_site_url(); ?>/oscars-2009" title="" <?php if(is_page( 'oscars-2009' ) ) {?> class="active"<?php } ?>>۲۰۰۹</a></li>
      <li><a href="<?php echo get_site_url(); ?>/oscars-2010" title="" <?php if(is_page( 'oscars-2010' ) ) {?> class="active"<?php } ?>>۲۰۱۰</a></li>
      <li><a href="<?php echo get_site_url(); ?>/oscars-2011" title="" <?php if(is_page( 'oscars-2011' ) ) {?> class="active"<?php } ?>>۲۰۱۱</a></li>
      <li><a href="<?php echo get_site_url(); ?>/oscars-2012" title="" <?php if(is_page( 'oscars-2012' ) ) {?> class="active"<?php } ?>>۲۰۱۲</a></li>
      <li><a href="<?php echo get_site_url(); ?>/oscars-2013" title="" <?php if(is_page( 'oscars-2013' ) ) {?> class="active"<?php } ?>>۲۰۱۳</a></li>
      <li><a href="<?php echo get_site_url(); ?>/oscars-2014" title="" <?php if(is_page( 'oscars-2014' ) ) {?> class="active"<?php } ?>>۲۰۱۴</a></li>
      <li><a href="<?php echo get_site_url(); ?>/oscars-2015" title="" <?php if(is_page( 'oscars-2015' ) ) {?> class="active"<?php } ?>>۲۰۱۵</a></li>
      <li><a href="<?php echo get_site_url(); ?>/oscars" title="" <?php if(is_page( 'oscars' ) ) {?> class="active"<?php } ?>>۲۰۱۶</a></li>
    </ul>
  </div>
