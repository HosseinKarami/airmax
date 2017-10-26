<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
 ?>
<!DOCTYPE html>
<html class="no-js js">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no, width=device-width, minimal-ui">
    <title>404 Errs!! ☹</title>
    <meta name="description" content="<?php bloginfo('description'); ?>" />
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/style.min.css">
  </head>
<body class="tv">


<section class="notfound">
    
<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 50 40" enable-background="new 0 0 50 50" xml:space="preserve"><g><path d="M24.533,21.12c-1.811,0-3.276,1.386-3.276,3.098v5.507c0,1.709,1.469,3.094,3.276,3.094   s3.274-1.385,3.274-3.094v-5.507C27.812,22.506,26.345,21.12,24.533,21.12z M25.566,29.725c0,0.459-0.475,0.848-1.033,0.848   c-0.556,0-1.026-0.389-1.026-0.848v-5.507c0-0.469,0.459-0.852,1.026-0.852c0.567,0,1.033,0.383,1.033,0.852V29.725z"/><path d="M19.327,26.08h-2.513l1.439-3.401c0.245-0.57-0.023-1.229-0.594-1.472   c-0.564-0.241-1.229,0.023-1.474,0.594l-2.106,4.961l0,0c-0.015,0.034-0.013,0.079-0.026,0.116   c-0.075,0.256-0.073,0.518,0.023,0.748c0.027,0.066,0.077,0.119,0.116,0.176c0.039,0.062,0.071,0.131,0.123,0.184   c0.094,0.096,0.212,0.176,0.337,0.232c0.009,0.006,0.013,0.012,0.022,0.014l0,0c0.135,0.057,0.283,0.092,0.438,0.092H18.2v3.463   c0,0.619,0.503,1.123,1.125,1.123c0.619,0,1.123-0.504,1.123-1.123v-4.586C20.449,26.583,19.945,26.08,19.327,26.08z"/><path d="M33.833,26.08h-2.517l1.444-3.401c0.243-0.57-0.023-1.229-0.596-1.472   c-0.564-0.241-1.229,0.023-1.474,0.594l-2.105,4.961l0,0c-0.016,0.034-0.013,0.079-0.024,0.116   c-0.076,0.256-0.074,0.518,0.022,0.748c0.026,0.066,0.076,0.119,0.113,0.176c0.04,0.062,0.072,0.131,0.123,0.184   c0.098,0.096,0.216,0.176,0.341,0.232c0.009,0.006,0.013,0.012,0.021,0.014l0,0c0.136,0.057,0.28,0.092,0.439,0.092h3.089v3.463   c0,0.619,0.501,1.123,1.122,1.123c0.622,0,1.123-0.504,1.123-1.123v-4.586C34.956,26.583,34.455,26.08,33.833,26.08z"/></g></svg>
  <h1>هیچ معلوم هست اینجا چه می‌کنید؟</h1>
  <h1>گم شده‌‌اید؟ </h1>
  <a href="<?php echo get_site_url(); ?>" title="بازگشت به خانه">بازگشت به خانه</a>
</section>
    <script src="<?php bloginfo('template_url'); ?>/assets/js/scripts.min.js"></script>
    <script>
      $(document).ready(function(){
        $("body").addClass("loaded");
    });
      setTimeout(function () {
        if(document.getElementsByTagName("body")[0].className.indexOf("loaded") === -1) document.getElementsByTagName("body")[0].className += " loaded";
     } , 2000);    
    </script>
  </body>
</html>
