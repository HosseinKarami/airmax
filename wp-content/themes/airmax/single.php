<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
if (in_category('3')):
  get_header('movies');
elseif (in_category('4')) :
  get_header('music');
elseif (in_category('5')) :
  get_header('apps');
endif;
 ?>
<?php if (in_category('3')) : ?>
<article class="posts">
  <div class="back">
      <div class="postcontent">
      <div class="postimage"><img width="300" height="444.58" src="<?php the_field('img'); ?>" alt="<?php the_title(); ?>"></div>
      <div class="postinfo">
        <h4><?php the_title(); ?></h4>
        <h5><?php the_field('engtitle'); ?></h5>
        <ul>
          <li><p>محصول کشور:</p><p><?php the_field('country'); ?></p></li>
          <li><p>ستارگان:</p><p><?php the_field('stars'); ?></p></li>
          <li><p>کارگردان:</p><p><?php the_field('director'); ?></p></li>
          <li><p>ژانر:</p><p><?php the_field('genre'); ?></p></li>
          <li><p>امتیاز IMDb:</p><p><?php the_field('rate'); ?></p></li>
          <li><p>اطلاعات بیشتر:</p><p><a href="<?php the_field('moreinfo'); ?>" title="<?php the_field('engtitle'); ?>" target="_blank" class="imdbicons">
            <svg version="1.1" width="34" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                 viewBox="0 0 100 60" xml:space="preserve">
              <path fill="#BBA36C" d="M58.3,18H52v24h6.3c1,0,1.8-0.8,1.8-1.8V19.8C60,18.8,59.2,18,58.3,18z"/>
              <path fill="#BBA36C" d="M78.3,26H72v16h6.3c1,0,1.8-0.8,1.8-1.8V27.7C80,26.8,79.2,26,78.3,26z"/>
              <path fill="#BBA36C" d="M90,2H10C6.7,2,4,4.7,4,8v44c0,3.3,2.7,6,6,6h80c3.3,0,6-2.7,6-6V8C96,4.7,93.3,2,90,2z M20,44.3
                c0,1.1-0.9,2-2,2s-2-0.9-2-2V16.2c0-1.1,0.9-2,2-2s2,0.9,2,2V44.3z M44,44c0,1.1-0.9,2-2,2s-2-0.9-2-2V30.7l-3.9,14
                c-0.2,0.9-1,1.3-1.9,1.3c0,0,0,0,0,0c-0.9,0-1.7-0.5-1.9-1.3L28,30.2L29,44c0,1.1-1,2-1,2l-4,0c0,0-1-0.9-1-2l0.4-27.8
                c0-1,1-1.8,2-2c1-0.1,2.1,0.5,2.3,1.4L34,37l6-21.4c0.3-1,1.2-1.6,2.2-1.4c1,0.1,1.7,1,1.7,2C44,16.2,44,44,44,44z M64,40.3
                c0,3.2-2.6,5.8-5.8,5.8H50c-1.1,0-2-0.9-2-2V16c0-1.1,0.9-2,2-2h8.3c3.2,0,5.8,2.6,5.8,5.8V40.3z M84,40.3c0,3.2-2.6,5.8-5.8,5.8H70
                c-1.1,0-2-0.9-2-2V16.2c0-1.1,0.9-2,2-2s2,0.9,2,2V22h6.3c3.2,0,5.8,2.6,5.8,5.8V40.3z"/>
            </svg>
          </a></p></li>  
          <?php if( get_field('topmov')) : ?>
          <li><p>جزو ۲۵۰ فیلم برتر IMDb با رتبه: </p><p><?php the_field('topnum') ?></p></li><?php endif; ?>
          <?php if( get_field('subtitle')) : ?>
          <li><p>زیرنویس: </p><p><a href="<?php the_field('subtitle'); ?>" title="دانلود زیرنویس <?php the_title(); ?>" target="_blank" class="zirnevis">
            دریافت زیرنویس
          </a></p></li><?php endif; ?>
          <li><p>فایل:</p><p><a href="<?php the_field('download'); ?>" title="دانلود <?php the_field('title'); ?>" class="moviesdl">
          دریافت فیلم
          <svg fill="#f9f9f9" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
              <path d="M19 9h-4V3H9v6H5l7 7 7-7zM5 18v2h14v-2H5z"/>
              <path d="M0 0h24v24H0z" fill="none"/>
          </svg>
        </a></p></li>
        </ul>
      </div>
    </div>
    <div class="mainpost">
      <p><?php the_field('movietext'); ?></p>
    </div>
  </div>
</article>
<section class="moviespage relatedpost">
  <div class="moviesItems">
    <h2>
<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve"><g><g><g><path fill="#44b8e9" d="M19.441,47.09c8.594,0.938,17.341,0.615,25.967,0.302c7.524-0.273,14.286-4.433,21.72-5.297     c-0.414-0.125-0.827-0.25-1.241-0.375c1.603,8.023,0.728,16.215,1,24.333c0.552-0.384,1.104-0.768,1.657-1.152     c-5.719,0.638-11.442-0.091-17.146,0.433c-6.662,0.613-13.163,2.229-19.797,3.041c-2.608,0.319-8.048,1.041-10.214-0.896     c-1.114-0.996-0.304-3.742-0.153-4.97c0.674-5.489,0.261-11.056,0.218-16.566c-0.006-0.848-2.906-0.308-2.897,0.776     c0.05,6.429-0.445,12.809-0.524,19.199c-0.044,3.542,2.743,3.953,5.734,4.2c7.302,0.604,14.645-1.417,21.786-2.602     c7.488-1.243,15.055-0.25,22.579-1.089c0.582-0.065,1.682-0.413,1.657-1.152c-0.271-8.118,0.603-16.31-1-24.333     c-0.093-0.467-0.923-0.412-1.241-0.375c-6.835,0.795-12.994,3.978-19.749,5.105c-3.845,0.641-8.077,0.28-11.972,0.368     c-4.88,0.11-9.736,0.063-14.593-0.468C20.368,45.478,17.829,46.914,19.441,47.09L19.441,47.09z"/></g></g><g><g><path fill="#44b8e9" d="M19.604,52.723c-3.558-0.486-7.896,0.401-7.854,4.705c0.016,1.68,0.455,3.885,2.021,4.804     c1.481,0.869,3.668,0.5,5.276,0.369c0.638-0.052,1.459-0.237,1.937-0.7c0.479-0.464-0.419-0.528-0.693-0.506     c-2.594,0.211-4.548,0.297-5.326-2.566c-0.327-1.203-0.465-2.562-0.141-3.776c0.412-1.547,1.6-1.292,2.91-1.113     C18.377,54.027,21.078,52.924,19.604,52.723L19.604,52.723z"/></g></g><g><g><path fill="#44b8e9" d="M68.093,49.104c6.135,0.045,11.62,0.32,15.252-5.438c-0.93,0.128-1.86,0.257-2.791,0.386     c-0.025,5.226-0.278,10.444,0,15.667c0.675-0.387,1.35-0.774,2.025-1.162c-2.52-0.163-4.327-2.685-6.337-3.961     c-1.938-1.23-4.358-0.956-6.419-0.268c-1.675,0.56-1.354,1.91,0.358,1.338c4.356-1.455,6.934,4.16,11.244,4.438     c0.619,0.04,2.069-0.339,2.025-1.162c-0.278-5.223-0.024-10.441,0-15.667c0.004-0.943-2.508-0.062-2.791,0.386     c-2.861,4.537-6.668,3.931-11.415,3.896C68.224,47.55,66.137,49.09,68.093,49.104L68.093,49.104z"/></g></g><g><g><path fill="#44b8e9" d="M37.967,43.004c5.776-4.716,7.19-12.098,1.192-17.396c-5.598-4.944-13.667-5.8-19.931-1.622     c-7.067,4.714-6.675,13.082-0.786,18.422c5.532,5.017,14.301,5.614,19.776,0.36c1.31-1.257-1.494-1.773-2.431-0.874     c-9.751,9.357-27.791-8.998-13.585-17.219c4.866-2.816,11.236-0.778,15.016,2.904c4.546,4.429,3.49,10.267-1.179,14.079     C34.514,42.904,36.836,43.928,37.967,43.004L37.967,43.004z"/></g></g><g><g><path fill="#44b8e9" d="M60.745,18.383c-6.167,0.219-14.999-0.48-17.214,7.05c-2.211,7.514-1.31,15.012,6.87,17.802     c6.946,2.37,15.445-0.893,19.295-6.917c4.885-7.643-0.178-15.997-8.25-17.881c-1.102-0.257-3.436,1.387-1.717,1.788     c5.976,1.395,9.672,5.953,8.668,12.162c-1.35,8.343-11.341,11.437-18.302,8.268c-5.015-2.283-5.194-8.233-4.347-12.865     c1.48-8.086,8.237-7.283,14.681-7.511C61.988,20.224,62.731,18.312,60.745,18.383L60.745,18.383z"/></g></g><line fill="#44b8e9" stroke="#44b8e9" stroke-miterlimit="10" x1="35.379" y1="68.587" x2="24.003" y2="86.332"/><line fill="#44b8e9" stroke="#44b8e9" stroke-miterlimit="10" x1="43.9" y1="67.062" x2="45.571" y2="86.332"/><line fill="#44b8e9" stroke="#44b8e9" stroke-miterlimit="10" x1="53.003" y1="65.998" x2="63.67" y2="82.666"/></g></svg>فیلم‌های پیشنهادی</h2>
    <ul class="allmovies">
    <?php
//for use in the loop, list 5 post titles related to first tag on current post
$tags = wp_get_post_tags($post->ID);
if ($tags) {
$first_tag = $tags[0]->term_id;
$args=array(
'tag__in' => array($first_tag),
'post__not_in' => array($post->ID),
'posts_per_page'=>6,
'caller_get_posts'=>1
);
$my_query = new WP_Query($args);
if( $my_query->have_posts() ) {
while ($my_query->have_posts()) : $my_query->the_post(); ?>
      <li><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
        <img src="<?php the_field('img'); ?>" width="153.22" height="227" alt="<?php the_title(); ?>">
        <h4><?php the_title(); ?></h4>
        <h5><?php the_field('engtitle'); ?></h5>
      </a></li>
      <?php
endwhile;
}
wp_reset_query();
}
?>
    </ul>
  </div>
</section>
<?php elseif(in_category('4')): ?>
  <article class="posts">
  <div class="back">
      <div class="postcontent">
      <div class="postimage"><img width="355" height="355" src="<?php the_field('musicpic'); ?>" alt="<?php the_title(); ?>"></div>
      <div class="postinfo">
        <h4><?php the_field('musicname'); ?> - <?php the_field('singername'); ?></h4>
        <h5></h5>
        <ul>
        <?php if( get_field('lyrics')) : ?>
        <li><p>متن ترانه:</p><p><?php the_field('lyrics'); ?></p></li>
        <?php endif; ?>
        <?php if( get_field('mozikfrom')) : ?>
        <li><p>موسیقی:</p><p><?php the_field('mozikfrom'); ?></p></li>
        <?php endif; ?>
        <?php if( get_field('tanzimahang')) : ?>
        <li><p>تنظیم:</p><p><?php the_field('tanzimahang'); ?></p></li>
        <?php endif; ?>
        <?php if( get_field('musicmix')) : ?>
        <li><p>میکس و مسترینگ:</p><p><?php the_field('musicmix'); ?></p></li>
        <?php endif; ?>
        <li><p>فایل:</p><p><a href="<?php the_field('download'); ?>" title="دانلود <?php the_field('title'); ?>" class="moviesdl">
          دریافت آهنگ
          <svg fill="#f9f9f9" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
              <path d="M19 9h-4V3H9v6H5l7 7 7-7zM5 18v2h14v-2H5z"/>
              <path d="M0 0h24v24H0z" fill="none"/>
          </svg>
        </a></p></li>
        </ul>
      </div>
    </div>
    <div class="mainpost">

    </div>
  </div>
</article>
<section class="moviespage relatedpost">
  <div class="moviesItems">
    <h2>
<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" baseProfile="tiny" x="0px" y="0px" viewBox="0 0 184.281 208.64125" xml:space="preserve"><path fill="#44b8e9" d="M184.281,115.903c0,25.051-13.48,49.732-41.172,49.732c-10.02,0-31.879-4.734-31.879-23.135  c0-22.041,16.576-30.242,26.597-32.975c10.02-2.732,27.873-3.826,29.876-6.012c2.002-2.186-6.193-56.292-10.019-58.296  c-3.826-2.005-26.598,0.363-44.633,3.28C95.016,51.412,71.15,57.242,69.51,60.521s9.109,38.803,9.109,61.393  s-25.868,44.998-44.996,44.998c-14.939,0-34.189-8.461-33.611-25.412C1.198,106.795,58.9,105.762,58.9,105.762  s-1.729-13.691-4.509-30.605c-2.654-16.147-10.929-45.061-9.472-48.702c1.457-3.646,27.326-21.134,62.122-24.596  c34.794-3.462,50.098-1.459,53.012,0.91s15.484,42.083,19.491,66.133C183.553,92.95,184.281,106.249,184.281,115.903z"/></svg>آهنگ‌های پیشنهادی</h2>
    <ul class="allmovies">
    <?php
//for use in the loop, list 5 post titles related to first tag on current post
$tags = wp_get_post_tags($post->ID);
if ($tags) {
$first_tag = $tags[0]->term_id;
$args=array(
'tag__in' => array($first_tag),
'post__not_in' => array($post->ID),
'posts_per_page'=>6,
'caller_get_posts'=>1
);
$my_query = new WP_Query($args);
if( $my_query->have_posts() ) {
while ($my_query->have_posts()) : $my_query->the_post(); ?>
      <li><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
        <img src="<?php the_field('musicpic'); ?>" width="160" height="160" alt="<?php the_title(); ?>">
        <h4><?php the_title(); ?></h4>
      </a></li>
      <?php
endwhile;
}
wp_reset_query();
}
?>
    </ul>
  </div>
</section>
<?php elseif(in_category('5')): ?>
  <article class="posts appssingle">
  <div class="back">
      <div class="postcontent">
        <div class="appimage"><img width="355" height="355" src="<?php the_field('appicon'); ?>" alt="<?php the_field('appname'); ?>"></div>
        <div class="postinfo">
          <h4><?php the_field('appengname'); ?> - <?php the_field('appname'); ?></h4>
        </div>
      </div>
    <div class="mainpost">
    <?php if( get_field('appdetails')) : ?>
      <div class="appdetail">
        <h4>توضیحات:</h4>
        <?php the_field('appdetails'); ?>
      </div>
      <?php endif; ?>
      <?php if( get_field('appinstall')) : ?>
      <div class="apphelp">
        <h4>راهنمای نصب:</h4>
        <?php the_field('appinstall'); ?>
      </div>
    <?php endif; ?>
      <div class="appdownload">
      <h4>لینک‌های دانلود:</h4>
        <a href="<?php the_field('appdl'); ?>" title="دانلود <?php the_field('appname'); ?>">
          دریافت نسخه ۳۲ بیتی
          <svg fill="#f9f9f9" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
              <path d="M19 9h-4V3H9v6H5l7 7 7-7zM5 18v2h14v-2H5z"/>
              <path d="M0 0h24v24H0z" fill="none"/>
          </svg>
        </a>
        <a href="<?php the_field('appdls'); ?>" title="دانلود <?php the_field('appname'); ?>">
          دریافت نسخه ۶۴ بیتی
          <svg fill="#f9f9f9" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
              <path d="M19 9h-4V3H9v6H5l7 7 7-7zM5 18v2h14v-2H5z"/>
              <path d="M0 0h24v24H0z" fill="none"/>
          </svg>
        </a>
      </div>
    </div>
  </div>
</article>
<section class="moviespage relatedpost">
  <div class="moviesItems">
    <h2>

<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve"><g><g><path fill="#44b8e9" d="M50,94.9c-12,0-23.3-4.7-31.8-13.2S5.1,62,5.1,50s4.7-23.3,13.2-31.8C26.7,9.7,38,5.1,50,5.1    s23.3,4.7,31.8,13.2c17.5,17.5,17.5,46,0,63.5C73.3,90.2,62,94.9,50,94.9z M50,8c-11.2,0-21.8,4.4-29.7,12.3    C12.4,28.2,8,38.8,8,50c0,11.2,4.4,21.8,12.3,29.7C28.3,87.6,38.8,92,50,92s21.8-4.4,29.7-12.3c16.4-16.4,16.4-43,0-59.4    C71.8,12.4,61.2,8,50,8z"/></g><g><path fill="#44b8e9" d="M50,59c-2.4,0-4.7-0.9-6.4-2.6c-3.5-3.5-3.5-9.2,0-12.7c1.7-1.7,4-2.6,6.4-2.6c2.4,0,4.7,0.9,6.4,2.6    c1.7,1.7,2.6,4,2.6,6.4c0,2.4-0.9,4.7-2.6,6.4C54.7,58.1,52.4,59,50,59z M50,43c-1.9,0-3.7,0.7-5,2.1c-2.7,2.7-2.7,7.2,0,10    c1.3,1.3,3.1,2.1,5,2.1c1.9,0,3.7-0.7,5-2.1c1.3-1.3,2.1-3.1,2.1-5c0-1.9-0.7-3.7-2.1-5C53.7,43.7,51.9,43,50,43z"/></g><g><path fill="#44b8e9" d="M50,63.2c-3.5,0-6.9-1.4-9.4-3.9c-5.2-5.2-5.2-13.5,0-18.7c2.5-2.5,5.8-3.9,9.4-3.9s6.9,1.4,9.4,3.9    c5.2,5.2,5.2,13.5,0,18.7C56.9,61.8,53.5,63.2,50,63.2z M50,38.7c-3,0-5.8,1.2-8,3.3c-4.4,4.4-4.4,11.5,0,15.9    c2.1,2.1,5,3.3,8,3.3c3,0,5.8-1.2,8-3.3c4.4-4.4,4.4-11.5,0-15.9C55.8,39.9,53,38.7,50,38.7z"/></g><g><path fill="#44b8e9" d="M63.3,22.1L62.9,23c3,1.4,5.8,3.4,8.3,5.8c1.5,1.5,2.7,3,3.8,4.7l0.9-0.6c-1.1-1.7-2.4-3.3-4-4.9    C69.3,25.7,66.4,23.6,63.3,22.1z"/><path fill="#44b8e9" d="M72.6,27.4c1.6,1.6,2.9,3.2,4.1,5l9.6-6.3c0,0-1.3-2.5-7.9-9c-4.9-4.8-9.7-6.4-9.7-6.4l-4.9,10.4    C67,22.7,70,24.8,72.6,27.4z"/><path fill="#44b8e9" d="M59.6,29.8l-4.4,9.2l2.3,1.5c0.3,0.2,0.5,0.4,0.8,0.7l1.9,2.1l8.5-5.6c-0.8-1.2-1.8-2.4-2.9-3.5    C64,32.3,61.9,30.9,59.6,29.8z"/><path fill="#44b8e9" d="M62.4,24L60,29.1c2.3,1.1,4.5,2.6,6.4,4.5c1.1,1.1,2.1,2.3,3,3.6l4.7-3.1c-1.1-1.6-2.3-3.1-3.7-4.5    C68,27.3,65.3,25.4,62.4,24z"/></g></g></svg>برنامه‌های پیشنهادی</h2>
    <ul class="allmovies allapps">
    <?php
//for use in the loop, list 5 post titles related to first tag on current post
$tags = wp_get_post_tags($post->ID);
if ($tags) {
$first_tag = $tags[0]->term_id;
$args=array(
'tag__in' => array($first_tag),
'post__not_in' => array($post->ID),
'posts_per_page'=>6,
'caller_get_posts'=>1
);
$my_query = new WP_Query($args);
if( $my_query->have_posts() ) {
while ($my_query->have_posts()) : $my_query->the_post(); ?>
      <li><a href="<?php the_permalink(); ?>" title="<?php the_field('appname'); ?>">
        <img src="<?php the_field('appicon'); ?>" width="160" height="160" alt="<?php the_field('appname'); ?>">
        <span><?php the_field('appengname'); ?></span>
      </a></li>
      <?php
endwhile;
}
wp_reset_query();
}
?>
    </ul>
  </div>
</section>
<?php endif; ?>
<?php get_footer(); ?>
