<?php
/*

Template Name:   GoldenGlobes 2002 Page

*/

  get_header( 'globe' );
?>
<div class="Oscarcontent panel-group" id="OscarMovies" role="tablist" aria-multiselectable="true">
<?php 

  $custom_args = array(
      'post_type' => 'post',
      'posts_per_page' => -1,
      'meta_query' => array(
        array(
            'key' => 'goldencandida', // name of custom field
            'value' => '"bestdrama"', // matches exactly "red"
            'compare' => 'LIKE'
        )
      )
    );
  $custom_query = new WP_Query( $custom_args ); ?>
  <?php if ( $custom_query->have_posts() ) : ?>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingOne">
      <a role="button" data-toggle="collapse" data-parent="#OscarMovies" href="#besttadvin" aria-expanded="true" aria-controls="besttadvin">
        <h4 class="panel-title">
        نامزدهای بهترین فیلم درام
        <span class="itemicon"></span>
        </h4>
      </a>
    </div>
    <div id="besttadvin" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
      <div class="panel-body">
        <ul>
        <?php while ( $custom_query->have_posts()) : $custom_query->the_post(); ?>
          <?php if(in_array('2002', get_field('medalyears') )) : ?>
          <li>
            <div class="picture">
              <a href="<?php the_permalink(); ?>" title="<?php the_field('title'); ?>">
               <img src="<?php the_field('img'); ?>" alt="<?php the_field('title'); ?>"> 
              </a>
            </div>
            <div class="items">
            <?php if(in_array('bestdrama', get_field('goldenwon') )) : ?>
              <h4>
              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 100 100" enable-background="new 0 0 100 100" fill="#bba36c" xml:space="preserve"><g><path d="M66,95.333v-3.736l-2.882-5.764H61v-40h-2.516c-0.078-1.955-0.523-2.453-2.777-4.707l-0.966-0.966   C58.256,39.846,61,38.998,61,36.833v-3.5h-2.965l-4.144-6.215c0.87-0.33,1.702-0.766,2.475-1.315   c1.316-0.935,2.431-2.172,3.223-3.578C60.512,20.588,61,18.723,61,16.833c0-2.916-1.148-5.563-3.006-7.533   c-0.008-0.032-0.01-0.064-0.019-0.096L57.92,9.219C55.918,7.137,53.11,5.833,50,5.833c-0.646,0-1.277,0.067-1.895,0.175   L43.017,3.53l-1.142,5.914C40.096,11.399,39,13.987,39,16.833c0,4.696,2.963,8.702,7.113,10.277l-4.148,6.223H39v3.5   c0,2.165,2.744,3.013,6.259,3.327l-0.966,0.966c-2.254,2.254-2.699,2.752-2.777,4.707H39v40h-2.118L34,91.597v3.736h16H66z    M55.825,23.68l-0.47-0.42l1.562-1.801l0.503,0.453C56.969,22.567,56.432,23.163,55.825,23.68z M57.436,11.771   c0.307,0.45,0.571,0.931,0.794,1.434c-1.247,2.491-6.257,4.688-7.933,5.421c-2.916,1.275-6.776,2.043-8.296,2.314   c-0.271-0.524-0.489-1.078-0.653-1.655c4.799-1.035,10.481-3.05,12.741-4.57C55.441,13.805,56.707,12.836,57.436,11.771z    M45.338,6.884c-0.358,0.168-0.705,0.356-1.041,0.561l0.188-0.975L45.338,6.884z M50,7.833c2.313,0,4.418,0.884,6.014,2.323   c-0.206,0.703-1.216,1.672-3.04,2.899c-2.039,1.371-7.439,3.269-11.949,4.253C41.016,17.15,41,16.994,41,16.833   C41,11.871,45.037,7.833,50,7.833z M43.231,22.746c1.916-0.374,5.203-1.123,7.866-2.289c3.83-1.675,6.347-3.211,7.817-4.793   C58.965,16.047,59,16.436,59,16.833c0,1.118-0.215,2.222-0.615,3.255l-1.644-1.48l-4.187,4.83l1.558,1.394   c-1.265,0.653-2.663,1.001-4.112,1.001C47.301,25.833,44.883,24.633,43.231,22.746z M48.147,27.665   c0.604,0.103,1.22,0.168,1.853,0.168c0.629,0,1.249-0.057,1.857-0.161l3.774,5.661H50h-5.632L48.147,27.665z M41,36.833v-1.5h9h9   v1.5c0,0.061-0.103,1.5-9,1.5S41,36.894,41,36.833z M45.707,42.54l2.232-2.232c0.681,0.018,1.371,0.025,2.061,0.025   s1.38-0.007,2.061-0.025l2.232,2.232c1.776,1.776,2.118,2.138,2.186,3.293H43.521C43.589,44.678,43.931,44.316,45.707,42.54z    M41,47.833h18v38h-9h-9V47.833z M36,93.333v-1.264l2.118-4.236H39h11h11h0.882L64,92.069v1.264H50H36z"/></g></svg>
              <?php the_field('title'); ?></h4>
              <?php else: ?>
                <h4> <?php the_field('title'); ?></h4>
              <?php endif; ?>
              <span><?php the_field('engtitle'); ?></span>
              <p>
              <svg fill="#E4BB24" height="30" viewBox="0 0 18 18" width="30" xmlns="http://www.w3.org/2000/svg">
                    <path d="M9 11.3l3.71 2.7-1.42-4.36L15 7h-4.55L9 2.5 7.55 7H3l3.71 2.64L5.29 14z"/>
                    <path d="M0 0h18v18H0z" fill="none"/>
                </svg>
               <?php the_field('rate'); ?></p>
              <p><?php the_field('genre'); ?></p>
            </div>
          </li>
          <?php endif; ?>
  <?php endwhile; ?>
        </ul>
      </div>
    </div>
  </div>
  <?php wp_reset_postdata(); ?>
<?php endif; ?>

<?php 

  $custom_args = array(
      'post_type' => 'post',
      'posts_per_page' => -1,
      'meta_query' => array(
        array(
            'key' => 'goldencandida', // name of custom field
            'value' => '"bestcomedyormusical"', // matches exactly "red"
            'compare' => 'LIKE'
        )
      )
    );
  $custom_query = new WP_Query( $custom_args ); ?>
  <?php if ( $custom_query->have_posts() ) : ?>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingOne">
      <a role="button" data-toggle="collapse" data-parent="#OscarMovies" href="#mostanadboland" aria-expanded="false" aria-controls="mostanadboland">
        <h4 class="panel-title">
        نامزدهای بهترین فیلم کمدی یا موزیکال
        <span class="itemicon"></span>
        </h4>
      </a>
    </div>
    <div id="mostanadboland" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
      <div class="panel-body">
        <ul>
        <?php while ( $custom_query->have_posts()) : $custom_query->the_post(); ?>
          <?php if(in_array('2002', get_field('medalyears') )) : ?>
          <li>
            <div class="picture">
              <a href="<?php the_permalink(); ?>" title="<?php the_field('title'); ?>">
               <img src="<?php the_field('img'); ?>" alt="<?php the_field('title'); ?>"> 
              </a>
            </div>
            <div class="items">
            <?php if(in_array('bestcomedyormusical', get_field('goldenwon') )) : ?>
              <h4>
              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 100 100" enable-background="new 0 0 100 100" fill="#bba36c" xml:space="preserve"><g><path d="M66,95.333v-3.736l-2.882-5.764H61v-40h-2.516c-0.078-1.955-0.523-2.453-2.777-4.707l-0.966-0.966   C58.256,39.846,61,38.998,61,36.833v-3.5h-2.965l-4.144-6.215c0.87-0.33,1.702-0.766,2.475-1.315   c1.316-0.935,2.431-2.172,3.223-3.578C60.512,20.588,61,18.723,61,16.833c0-2.916-1.148-5.563-3.006-7.533   c-0.008-0.032-0.01-0.064-0.019-0.096L57.92,9.219C55.918,7.137,53.11,5.833,50,5.833c-0.646,0-1.277,0.067-1.895,0.175   L43.017,3.53l-1.142,5.914C40.096,11.399,39,13.987,39,16.833c0,4.696,2.963,8.702,7.113,10.277l-4.148,6.223H39v3.5   c0,2.165,2.744,3.013,6.259,3.327l-0.966,0.966c-2.254,2.254-2.699,2.752-2.777,4.707H39v40h-2.118L34,91.597v3.736h16H66z    M55.825,23.68l-0.47-0.42l1.562-1.801l0.503,0.453C56.969,22.567,56.432,23.163,55.825,23.68z M57.436,11.771   c0.307,0.45,0.571,0.931,0.794,1.434c-1.247,2.491-6.257,4.688-7.933,5.421c-2.916,1.275-6.776,2.043-8.296,2.314   c-0.271-0.524-0.489-1.078-0.653-1.655c4.799-1.035,10.481-3.05,12.741-4.57C55.441,13.805,56.707,12.836,57.436,11.771z    M45.338,6.884c-0.358,0.168-0.705,0.356-1.041,0.561l0.188-0.975L45.338,6.884z M50,7.833c2.313,0,4.418,0.884,6.014,2.323   c-0.206,0.703-1.216,1.672-3.04,2.899c-2.039,1.371-7.439,3.269-11.949,4.253C41.016,17.15,41,16.994,41,16.833   C41,11.871,45.037,7.833,50,7.833z M43.231,22.746c1.916-0.374,5.203-1.123,7.866-2.289c3.83-1.675,6.347-3.211,7.817-4.793   C58.965,16.047,59,16.436,59,16.833c0,1.118-0.215,2.222-0.615,3.255l-1.644-1.48l-4.187,4.83l1.558,1.394   c-1.265,0.653-2.663,1.001-4.112,1.001C47.301,25.833,44.883,24.633,43.231,22.746z M48.147,27.665   c0.604,0.103,1.22,0.168,1.853,0.168c0.629,0,1.249-0.057,1.857-0.161l3.774,5.661H50h-5.632L48.147,27.665z M41,36.833v-1.5h9h9   v1.5c0,0.061-0.103,1.5-9,1.5S41,36.894,41,36.833z M45.707,42.54l2.232-2.232c0.681,0.018,1.371,0.025,2.061,0.025   s1.38-0.007,2.061-0.025l2.232,2.232c1.776,1.776,2.118,2.138,2.186,3.293H43.521C43.589,44.678,43.931,44.316,45.707,42.54z    M41,47.833h18v38h-9h-9V47.833z M36,93.333v-1.264l2.118-4.236H39h11h11h0.882L64,92.069v1.264H50H36z"/></g></svg>
              <?php the_field('title'); ?></h4>
              <?php else: ?>
                <h4> <?php the_field('title'); ?></h4>
              <?php endif; ?>
              <span><?php the_field('engtitle'); ?></span>
              <p>
              <svg fill="#E4BB24" height="30" viewBox="0 0 18 18" width="30" xmlns="http://www.w3.org/2000/svg">
                    <path d="M9 11.3l3.71 2.7-1.42-4.36L15 7h-4.55L9 2.5 7.55 7H3l3.71 2.64L5.29 14z"/>
                    <path d="M0 0h18v18H0z" fill="none"/>
                </svg>
               <?php the_field('rate'); ?></p>
              <p><?php the_field('genre'); ?></p>
            </div>
          </li>
          <?php endif; ?>
  <?php endwhile; ?>
        </ul>
      </div>
    </div>
  </div>
  <?php wp_reset_postdata(); ?>
<?php endif; ?>

<?php 

  $custom_args = array(
      'post_type' => 'post',
      'posts_per_page' => -1,
      'meta_query' => array(
        array(
            'key' => 'goldencandida', // name of custom field
            'value' => '"bestmandrama"', // matches exactly "red"
            'compare' => 'LIKE'
        )
      )
    );
  $custom_query = new WP_Query( $custom_args ); ?>
  <?php if ( $custom_query->have_posts() ) : ?>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingOne">
      <a role="button" data-toggle="collapse" data-parent="#OscarMovies" href="#mokamelmard" aria-expanded="false" aria-controls="mokamelmard">
        <h4 class="panel-title">
        نامزدهای بهترین بازیگر نقش اول مرد در فیلم درام
        <span class="itemicon"></span>
        </h4>
      </a>
    </div>
    <div id="mokamelmard" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
      <div class="panel-body">
        <ul>
        <?php while ( $custom_query->have_posts()) : $custom_query->the_post(); ?>
          <?php if(in_array('2002', get_field('medalyears') )) : ?>
          <li>
            <div class="picture">
              <a href="<?php the_permalink(); ?>" title="<?php the_field('title'); ?>">
               <img src="<?php the_field('img'); ?>" alt="<?php the_field('title'); ?>"> 
              </a>
            </div>
            <div class="items">
            <?php if(in_array('bestmandrama', get_field('goldenwon') )) : ?>
              <h4>
              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 100 100" enable-background="new 0 0 100 100" fill="#bba36c" xml:space="preserve"><g><path d="M66,95.333v-3.736l-2.882-5.764H61v-40h-2.516c-0.078-1.955-0.523-2.453-2.777-4.707l-0.966-0.966   C58.256,39.846,61,38.998,61,36.833v-3.5h-2.965l-4.144-6.215c0.87-0.33,1.702-0.766,2.475-1.315   c1.316-0.935,2.431-2.172,3.223-3.578C60.512,20.588,61,18.723,61,16.833c0-2.916-1.148-5.563-3.006-7.533   c-0.008-0.032-0.01-0.064-0.019-0.096L57.92,9.219C55.918,7.137,53.11,5.833,50,5.833c-0.646,0-1.277,0.067-1.895,0.175   L43.017,3.53l-1.142,5.914C40.096,11.399,39,13.987,39,16.833c0,4.696,2.963,8.702,7.113,10.277l-4.148,6.223H39v3.5   c0,2.165,2.744,3.013,6.259,3.327l-0.966,0.966c-2.254,2.254-2.699,2.752-2.777,4.707H39v40h-2.118L34,91.597v3.736h16H66z    M55.825,23.68l-0.47-0.42l1.562-1.801l0.503,0.453C56.969,22.567,56.432,23.163,55.825,23.68z M57.436,11.771   c0.307,0.45,0.571,0.931,0.794,1.434c-1.247,2.491-6.257,4.688-7.933,5.421c-2.916,1.275-6.776,2.043-8.296,2.314   c-0.271-0.524-0.489-1.078-0.653-1.655c4.799-1.035,10.481-3.05,12.741-4.57C55.441,13.805,56.707,12.836,57.436,11.771z    M45.338,6.884c-0.358,0.168-0.705,0.356-1.041,0.561l0.188-0.975L45.338,6.884z M50,7.833c2.313,0,4.418,0.884,6.014,2.323   c-0.206,0.703-1.216,1.672-3.04,2.899c-2.039,1.371-7.439,3.269-11.949,4.253C41.016,17.15,41,16.994,41,16.833   C41,11.871,45.037,7.833,50,7.833z M43.231,22.746c1.916-0.374,5.203-1.123,7.866-2.289c3.83-1.675,6.347-3.211,7.817-4.793   C58.965,16.047,59,16.436,59,16.833c0,1.118-0.215,2.222-0.615,3.255l-1.644-1.48l-4.187,4.83l1.558,1.394   c-1.265,0.653-2.663,1.001-4.112,1.001C47.301,25.833,44.883,24.633,43.231,22.746z M48.147,27.665   c0.604,0.103,1.22,0.168,1.853,0.168c0.629,0,1.249-0.057,1.857-0.161l3.774,5.661H50h-5.632L48.147,27.665z M41,36.833v-1.5h9h9   v1.5c0,0.061-0.103,1.5-9,1.5S41,36.894,41,36.833z M45.707,42.54l2.232-2.232c0.681,0.018,1.371,0.025,2.061,0.025   s1.38-0.007,2.061-0.025l2.232,2.232c1.776,1.776,2.118,2.138,2.186,3.293H43.521C43.589,44.678,43.931,44.316,45.707,42.54z    M41,47.833h18v38h-9h-9V47.833z M36,93.333v-1.264l2.118-4.236H39h11h11h0.882L64,92.069v1.264H50H36z"/></g></svg>
              <?php the_field('title'); ?></h4>
              <?php else: ?>
                <h4> <?php the_field('title'); ?></h4>
              <?php endif; ?>
              <span><?php the_field('engtitle'); ?></span>
              <p>
              <svg fill="#E4BB24" height="30" viewBox="0 0 18 18" width="30" xmlns="http://www.w3.org/2000/svg">
                    <path d="M9 11.3l3.71 2.7-1.42-4.36L15 7h-4.55L9 2.5 7.55 7H3l3.71 2.64L5.29 14z"/>
                    <path d="M0 0h18v18H0z" fill="none"/>
                </svg>
               <?php the_field('rate'); ?></p>
              <p><?php the_field('genre'); ?></p>
            </div>
          </li>
          <?php endif; ?>
  <?php endwhile; ?>
        </ul>
      </div>
    </div>
  </div>
  <?php wp_reset_postdata(); ?>
<?php endif; ?>

<?php 

  $custom_args = array(
      'post_type' => 'post',
      'posts_per_page' => -1,
      'meta_query' => array(
        array(
            'key' => 'goldencandida', // name of custom field
            'value' => '"bestwomandrama"', // matches exactly "red"
            'compare' => 'LIKE'
        )
      )
    );
  $custom_query = new WP_Query( $custom_args ); ?>
  <?php if ( $custom_query->have_posts() ) : ?>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingOne">
      <a role="button" data-toggle="collapse" data-parent="#OscarMovies" href="#bestman" aria-expanded="false" aria-controls="bestman">
        <h4 class="panel-title">
        نامزدهای بهترین بازیگر نقش اول زن در فیلم درام
        <span class="itemicon"></span>
        </h4>
      </a>
    </div>
    <div id="bestman" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
      <div class="panel-body">
        <ul>
        <?php while ( $custom_query->have_posts()) : $custom_query->the_post(); ?>
          <?php if(in_array('2002', get_field('medalyears') )) : ?>
          <li>
            <div class="picture">
              <a href="<?php the_permalink(); ?>" title="<?php the_field('title'); ?>">
               <img src="<?php the_field('img'); ?>" alt="<?php the_field('title'); ?>"> 
              </a>
            </div>
            <div class="items">
            <?php if(in_array('bestwomandrama', get_field('goldenwon') )) : ?>
              <h4>
              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 100 100" enable-background="new 0 0 100 100" fill="#bba36c" xml:space="preserve"><g><path d="M66,95.333v-3.736l-2.882-5.764H61v-40h-2.516c-0.078-1.955-0.523-2.453-2.777-4.707l-0.966-0.966   C58.256,39.846,61,38.998,61,36.833v-3.5h-2.965l-4.144-6.215c0.87-0.33,1.702-0.766,2.475-1.315   c1.316-0.935,2.431-2.172,3.223-3.578C60.512,20.588,61,18.723,61,16.833c0-2.916-1.148-5.563-3.006-7.533   c-0.008-0.032-0.01-0.064-0.019-0.096L57.92,9.219C55.918,7.137,53.11,5.833,50,5.833c-0.646,0-1.277,0.067-1.895,0.175   L43.017,3.53l-1.142,5.914C40.096,11.399,39,13.987,39,16.833c0,4.696,2.963,8.702,7.113,10.277l-4.148,6.223H39v3.5   c0,2.165,2.744,3.013,6.259,3.327l-0.966,0.966c-2.254,2.254-2.699,2.752-2.777,4.707H39v40h-2.118L34,91.597v3.736h16H66z    M55.825,23.68l-0.47-0.42l1.562-1.801l0.503,0.453C56.969,22.567,56.432,23.163,55.825,23.68z M57.436,11.771   c0.307,0.45,0.571,0.931,0.794,1.434c-1.247,2.491-6.257,4.688-7.933,5.421c-2.916,1.275-6.776,2.043-8.296,2.314   c-0.271-0.524-0.489-1.078-0.653-1.655c4.799-1.035,10.481-3.05,12.741-4.57C55.441,13.805,56.707,12.836,57.436,11.771z    M45.338,6.884c-0.358,0.168-0.705,0.356-1.041,0.561l0.188-0.975L45.338,6.884z M50,7.833c2.313,0,4.418,0.884,6.014,2.323   c-0.206,0.703-1.216,1.672-3.04,2.899c-2.039,1.371-7.439,3.269-11.949,4.253C41.016,17.15,41,16.994,41,16.833   C41,11.871,45.037,7.833,50,7.833z M43.231,22.746c1.916-0.374,5.203-1.123,7.866-2.289c3.83-1.675,6.347-3.211,7.817-4.793   C58.965,16.047,59,16.436,59,16.833c0,1.118-0.215,2.222-0.615,3.255l-1.644-1.48l-4.187,4.83l1.558,1.394   c-1.265,0.653-2.663,1.001-4.112,1.001C47.301,25.833,44.883,24.633,43.231,22.746z M48.147,27.665   c0.604,0.103,1.22,0.168,1.853,0.168c0.629,0,1.249-0.057,1.857-0.161l3.774,5.661H50h-5.632L48.147,27.665z M41,36.833v-1.5h9h9   v1.5c0,0.061-0.103,1.5-9,1.5S41,36.894,41,36.833z M45.707,42.54l2.232-2.232c0.681,0.018,1.371,0.025,2.061,0.025   s1.38-0.007,2.061-0.025l2.232,2.232c1.776,1.776,2.118,2.138,2.186,3.293H43.521C43.589,44.678,43.931,44.316,45.707,42.54z    M41,47.833h18v38h-9h-9V47.833z M36,93.333v-1.264l2.118-4.236H39h11h11h0.882L64,92.069v1.264H50H36z"/></g></svg>
              <?php the_field('title'); ?></h4>
              <?php else: ?>
                <h4> <?php the_field('title'); ?></h4>
              <?php endif; ?>
              <span><?php the_field('engtitle'); ?></span>
              <p>
              <svg fill="#E4BB24" height="30" viewBox="0 0 18 18" width="30" xmlns="http://www.w3.org/2000/svg">
                    <path d="M9 11.3l3.71 2.7-1.42-4.36L15 7h-4.55L9 2.5 7.55 7H3l3.71 2.64L5.29 14z"/>
                    <path d="M0 0h18v18H0z" fill="none"/>
                </svg>
               <?php the_field('rate'); ?></p>
              <p><?php the_field('genre'); ?></p>
            </div>
          </li>
          <?php endif; ?>
  <?php endwhile; ?>
        </ul>
      </div>
    </div>
  </div>
  <?php wp_reset_postdata(); ?>
<?php endif; ?>

<?php 

  $custom_args = array(
      'post_type' => 'post',
      'posts_per_page' => -1,
      'meta_query' => array(
        array(
            'key' => 'goldencandida', // name of custom field
            'value' => '"bestmancomedy"', // matches exactly "red"
            'compare' => 'LIKE'
        )
      )
    );
  $custom_query = new WP_Query( $custom_args ); ?>
  <?php if ( $custom_query->have_posts() ) : ?>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingOne">
      <a role="button" data-toggle="collapse" data-parent="#OscarMovies" href="#bestfilm" aria-expanded="false" aria-controls="bestfilm">
        <h4 class="panel-title">
        نامزدهای بهترین بازیگر نقش اول مرد در فیلم کمدی یا موزیکال
        <span class="itemicon"></span>
        </h4>
      </a>
    </div>
    <div id="bestfilm" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
      <div class="panel-body">
        <ul>
        <?php while ( $custom_query->have_posts()) : $custom_query->the_post(); ?>
          <?php if(in_array('2002', get_field('medalyears') )) : ?>
          <li>
            <div class="picture">
              <a href="<?php the_permalink(); ?>" title="<?php the_field('title'); ?>">
               <img src="<?php the_field('img'); ?>" alt="<?php the_field('title'); ?>"> 
              </a>
            </div>
            <div class="items">
            <?php if(in_array('bestmancomedy', get_field('goldenwon') )) : ?>
              <h4>
              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 100 100" enable-background="new 0 0 100 100" fill="#bba36c" xml:space="preserve"><g><path d="M66,95.333v-3.736l-2.882-5.764H61v-40h-2.516c-0.078-1.955-0.523-2.453-2.777-4.707l-0.966-0.966   C58.256,39.846,61,38.998,61,36.833v-3.5h-2.965l-4.144-6.215c0.87-0.33,1.702-0.766,2.475-1.315   c1.316-0.935,2.431-2.172,3.223-3.578C60.512,20.588,61,18.723,61,16.833c0-2.916-1.148-5.563-3.006-7.533   c-0.008-0.032-0.01-0.064-0.019-0.096L57.92,9.219C55.918,7.137,53.11,5.833,50,5.833c-0.646,0-1.277,0.067-1.895,0.175   L43.017,3.53l-1.142,5.914C40.096,11.399,39,13.987,39,16.833c0,4.696,2.963,8.702,7.113,10.277l-4.148,6.223H39v3.5   c0,2.165,2.744,3.013,6.259,3.327l-0.966,0.966c-2.254,2.254-2.699,2.752-2.777,4.707H39v40h-2.118L34,91.597v3.736h16H66z    M55.825,23.68l-0.47-0.42l1.562-1.801l0.503,0.453C56.969,22.567,56.432,23.163,55.825,23.68z M57.436,11.771   c0.307,0.45,0.571,0.931,0.794,1.434c-1.247,2.491-6.257,4.688-7.933,5.421c-2.916,1.275-6.776,2.043-8.296,2.314   c-0.271-0.524-0.489-1.078-0.653-1.655c4.799-1.035,10.481-3.05,12.741-4.57C55.441,13.805,56.707,12.836,57.436,11.771z    M45.338,6.884c-0.358,0.168-0.705,0.356-1.041,0.561l0.188-0.975L45.338,6.884z M50,7.833c2.313,0,4.418,0.884,6.014,2.323   c-0.206,0.703-1.216,1.672-3.04,2.899c-2.039,1.371-7.439,3.269-11.949,4.253C41.016,17.15,41,16.994,41,16.833   C41,11.871,45.037,7.833,50,7.833z M43.231,22.746c1.916-0.374,5.203-1.123,7.866-2.289c3.83-1.675,6.347-3.211,7.817-4.793   C58.965,16.047,59,16.436,59,16.833c0,1.118-0.215,2.222-0.615,3.255l-1.644-1.48l-4.187,4.83l1.558,1.394   c-1.265,0.653-2.663,1.001-4.112,1.001C47.301,25.833,44.883,24.633,43.231,22.746z M48.147,27.665   c0.604,0.103,1.22,0.168,1.853,0.168c0.629,0,1.249-0.057,1.857-0.161l3.774,5.661H50h-5.632L48.147,27.665z M41,36.833v-1.5h9h9   v1.5c0,0.061-0.103,1.5-9,1.5S41,36.894,41,36.833z M45.707,42.54l2.232-2.232c0.681,0.018,1.371,0.025,2.061,0.025   s1.38-0.007,2.061-0.025l2.232,2.232c1.776,1.776,2.118,2.138,2.186,3.293H43.521C43.589,44.678,43.931,44.316,45.707,42.54z    M41,47.833h18v38h-9h-9V47.833z M36,93.333v-1.264l2.118-4.236H39h11h11h0.882L64,92.069v1.264H50H36z"/></g></svg>
              <?php the_field('title'); ?></h4>
              <?php else: ?>
                <h4> <?php the_field('title'); ?></h4>
              <?php endif; ?>
              <span><?php the_field('engtitle'); ?></span>
              <p>
              <svg fill="#E4BB24" height="30" viewBox="0 0 18 18" width="30" xmlns="http://www.w3.org/2000/svg">
                    <path d="M9 11.3l3.71 2.7-1.42-4.36L15 7h-4.55L9 2.5 7.55 7H3l3.71 2.64L5.29 14z"/>
                    <path d="M0 0h18v18H0z" fill="none"/>
                </svg>
               <?php the_field('rate'); ?></p>
              <p><?php the_field('genre'); ?></p>
            </div>
          </li>
          <?php endif; ?>
  <?php endwhile; ?>
        </ul>
      </div>
    </div>
  </div>
  <?php wp_reset_postdata(); ?>
<?php endif; ?>

<?php 

  $custom_args = array(
      'post_type' => 'post',
      'posts_per_page' => -1,
      'meta_query' => array(
        array(
            'key' => 'goldencandida', // name of custom field
            'value' => '"bestwoman"', // matches exactly "red"
            'compare' => 'LIKE'
        )
      )
    );
  $custom_query = new WP_Query( $custom_args ); ?>
  <?php if ( $custom_query->have_posts() ) : ?>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingOne">
      <a role="button" data-toggle="collapse" data-parent="#OscarMovies" href="#bestwoman" aria-expanded="false" aria-controls="bestwoman">
        <h4 class="panel-title">
        نامزدهای بهترین بازیگر نقش اول زن در فیلم کمدی یا موزیکال
        <span class="itemicon"></span>
        </h4>
      </a>
    </div>
    <div id="bestwoman" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
      <div class="panel-body">
        <ul>
        <?php while ( $custom_query->have_posts()) : $custom_query->the_post(); ?>
          <?php if(in_array('2002', get_field('medalyears') )) : ?>
          <li>
            <div class="picture">
              <a href="<?php the_permalink(); ?>" title="<?php the_field('title'); ?>">
               <img src="<?php the_field('img'); ?>" alt="<?php the_field('title'); ?>"> 
              </a>
            </div>
            <div class="items">
            <?php if(in_array('bestwoman', get_field('goldenwon') )) : ?>
              <h4>
              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 100 100" enable-background="new 0 0 100 100" fill="#bba36c" xml:space="preserve"><g><path d="M66,95.333v-3.736l-2.882-5.764H61v-40h-2.516c-0.078-1.955-0.523-2.453-2.777-4.707l-0.966-0.966   C58.256,39.846,61,38.998,61,36.833v-3.5h-2.965l-4.144-6.215c0.87-0.33,1.702-0.766,2.475-1.315   c1.316-0.935,2.431-2.172,3.223-3.578C60.512,20.588,61,18.723,61,16.833c0-2.916-1.148-5.563-3.006-7.533   c-0.008-0.032-0.01-0.064-0.019-0.096L57.92,9.219C55.918,7.137,53.11,5.833,50,5.833c-0.646,0-1.277,0.067-1.895,0.175   L43.017,3.53l-1.142,5.914C40.096,11.399,39,13.987,39,16.833c0,4.696,2.963,8.702,7.113,10.277l-4.148,6.223H39v3.5   c0,2.165,2.744,3.013,6.259,3.327l-0.966,0.966c-2.254,2.254-2.699,2.752-2.777,4.707H39v40h-2.118L34,91.597v3.736h16H66z    M55.825,23.68l-0.47-0.42l1.562-1.801l0.503,0.453C56.969,22.567,56.432,23.163,55.825,23.68z M57.436,11.771   c0.307,0.45,0.571,0.931,0.794,1.434c-1.247,2.491-6.257,4.688-7.933,5.421c-2.916,1.275-6.776,2.043-8.296,2.314   c-0.271-0.524-0.489-1.078-0.653-1.655c4.799-1.035,10.481-3.05,12.741-4.57C55.441,13.805,56.707,12.836,57.436,11.771z    M45.338,6.884c-0.358,0.168-0.705,0.356-1.041,0.561l0.188-0.975L45.338,6.884z M50,7.833c2.313,0,4.418,0.884,6.014,2.323   c-0.206,0.703-1.216,1.672-3.04,2.899c-2.039,1.371-7.439,3.269-11.949,4.253C41.016,17.15,41,16.994,41,16.833   C41,11.871,45.037,7.833,50,7.833z M43.231,22.746c1.916-0.374,5.203-1.123,7.866-2.289c3.83-1.675,6.347-3.211,7.817-4.793   C58.965,16.047,59,16.436,59,16.833c0,1.118-0.215,2.222-0.615,3.255l-1.644-1.48l-4.187,4.83l1.558,1.394   c-1.265,0.653-2.663,1.001-4.112,1.001C47.301,25.833,44.883,24.633,43.231,22.746z M48.147,27.665   c0.604,0.103,1.22,0.168,1.853,0.168c0.629,0,1.249-0.057,1.857-0.161l3.774,5.661H50h-5.632L48.147,27.665z M41,36.833v-1.5h9h9   v1.5c0,0.061-0.103,1.5-9,1.5S41,36.894,41,36.833z M45.707,42.54l2.232-2.232c0.681,0.018,1.371,0.025,2.061,0.025   s1.38-0.007,2.061-0.025l2.232,2.232c1.776,1.776,2.118,2.138,2.186,3.293H43.521C43.589,44.678,43.931,44.316,45.707,42.54z    M41,47.833h18v38h-9h-9V47.833z M36,93.333v-1.264l2.118-4.236H39h11h11h0.882L64,92.069v1.264H50H36z"/></g></svg>
              <?php the_field('title'); ?></h4>
              <?php else: ?>
                <h4> <?php the_field('title'); ?></h4>
              <?php endif; ?>
              <span><?php the_field('engtitle'); ?></span>
              <p>
              <svg fill="#E4BB24" height="30" viewBox="0 0 18 18" width="30" xmlns="http://www.w3.org/2000/svg">
                    <path d="M9 11.3l3.71 2.7-1.42-4.36L15 7h-4.55L9 2.5 7.55 7H3l3.71 2.64L5.29 14z"/>
                    <path d="M0 0h18v18H0z" fill="none"/>
                </svg>
               <?php the_field('rate'); ?></p>
              <p><?php the_field('genre'); ?></p>
            </div>
          </li>
          <?php endif; ?>
  <?php endwhile; ?>
        </ul>
      </div>
    </div>
  </div>
  <?php wp_reset_postdata(); ?>
<?php endif; ?>


<?php 

  $custom_args = array(
      'post_type' => 'post',
      'posts_per_page' => -1,
      'meta_query' => array(
        array(
            'key' => 'goldencandida', // name of custom field
            'value' => '"bestdirector"', // matches exactly "red"
            'compare' => 'LIKE'
        )
      )
    );
  $custom_query = new WP_Query( $custom_args ); ?>
  <?php if ( $custom_query->have_posts() ) : ?>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingOne">
      <a role="button" data-toggle="collapse" data-parent="#OscarMovies" href="#mokamelzan" aria-expanded="false" aria-controls="mokamelzan">
        <h4 class="panel-title">
        نامزدهای بهترین کارگردانی
        <span class="itemicon"></span>
        </h4>
      </a>
    </div>
    <div id="mokamelzan" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
      <div class="panel-body">
        <ul>
        <?php while ( $custom_query->have_posts()) : $custom_query->the_post(); ?>
          <?php if(in_array('2002', get_field('medalyears') )) : ?>
          <li>
            <div class="picture">
              <a href="<?php the_permalink(); ?>" title="<?php the_field('title'); ?>">
               <img src="<?php the_field('img'); ?>" alt="<?php the_field('title'); ?>"> 
              </a>
            </div>
            <div class="items">
            <?php if(in_array('bestdirector', get_field('goldenwon') )) : ?>
              <h4>
              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 100 100" enable-background="new 0 0 100 100" fill="#bba36c" xml:space="preserve"><g><path d="M66,95.333v-3.736l-2.882-5.764H61v-40h-2.516c-0.078-1.955-0.523-2.453-2.777-4.707l-0.966-0.966   C58.256,39.846,61,38.998,61,36.833v-3.5h-2.965l-4.144-6.215c0.87-0.33,1.702-0.766,2.475-1.315   c1.316-0.935,2.431-2.172,3.223-3.578C60.512,20.588,61,18.723,61,16.833c0-2.916-1.148-5.563-3.006-7.533   c-0.008-0.032-0.01-0.064-0.019-0.096L57.92,9.219C55.918,7.137,53.11,5.833,50,5.833c-0.646,0-1.277,0.067-1.895,0.175   L43.017,3.53l-1.142,5.914C40.096,11.399,39,13.987,39,16.833c0,4.696,2.963,8.702,7.113,10.277l-4.148,6.223H39v3.5   c0,2.165,2.744,3.013,6.259,3.327l-0.966,0.966c-2.254,2.254-2.699,2.752-2.777,4.707H39v40h-2.118L34,91.597v3.736h16H66z    M55.825,23.68l-0.47-0.42l1.562-1.801l0.503,0.453C56.969,22.567,56.432,23.163,55.825,23.68z M57.436,11.771   c0.307,0.45,0.571,0.931,0.794,1.434c-1.247,2.491-6.257,4.688-7.933,5.421c-2.916,1.275-6.776,2.043-8.296,2.314   c-0.271-0.524-0.489-1.078-0.653-1.655c4.799-1.035,10.481-3.05,12.741-4.57C55.441,13.805,56.707,12.836,57.436,11.771z    M45.338,6.884c-0.358,0.168-0.705,0.356-1.041,0.561l0.188-0.975L45.338,6.884z M50,7.833c2.313,0,4.418,0.884,6.014,2.323   c-0.206,0.703-1.216,1.672-3.04,2.899c-2.039,1.371-7.439,3.269-11.949,4.253C41.016,17.15,41,16.994,41,16.833   C41,11.871,45.037,7.833,50,7.833z M43.231,22.746c1.916-0.374,5.203-1.123,7.866-2.289c3.83-1.675,6.347-3.211,7.817-4.793   C58.965,16.047,59,16.436,59,16.833c0,1.118-0.215,2.222-0.615,3.255l-1.644-1.48l-4.187,4.83l1.558,1.394   c-1.265,0.653-2.663,1.001-4.112,1.001C47.301,25.833,44.883,24.633,43.231,22.746z M48.147,27.665   c0.604,0.103,1.22,0.168,1.853,0.168c0.629,0,1.249-0.057,1.857-0.161l3.774,5.661H50h-5.632L48.147,27.665z M41,36.833v-1.5h9h9   v1.5c0,0.061-0.103,1.5-9,1.5S41,36.894,41,36.833z M45.707,42.54l2.232-2.232c0.681,0.018,1.371,0.025,2.061,0.025   s1.38-0.007,2.061-0.025l2.232,2.232c1.776,1.776,2.118,2.138,2.186,3.293H43.521C43.589,44.678,43.931,44.316,45.707,42.54z    M41,47.833h18v38h-9h-9V47.833z M36,93.333v-1.264l2.118-4.236H39h11h11h0.882L64,92.069v1.264H50H36z"/></g></svg>
              <?php the_field('title'); ?></h4>
              <?php else: ?>
                <h4> <?php the_field('title'); ?></h4>
              <?php endif; ?>
              <span><?php the_field('engtitle'); ?></span>
              <p>
              <svg fill="#E4BB24" height="30" viewBox="0 0 18 18" width="30" xmlns="http://www.w3.org/2000/svg">
                    <path d="M9 11.3l3.71 2.7-1.42-4.36L15 7h-4.55L9 2.5 7.55 7H3l3.71 2.64L5.29 14z"/>
                    <path d="M0 0h18v18H0z" fill="none"/>
                </svg>
               <?php the_field('rate'); ?></p>
              <p><?php the_field('genre'); ?></p>
            </div>
          </li>
          <?php endif; ?>
  <?php endwhile; ?>
        </ul>
      </div>
    </div>
  </div>
  <?php wp_reset_postdata(); ?>
<?php endif; ?>


<?php 

  $custom_args = array(
      'post_type' => 'post',
      'posts_per_page' => -1,
      'meta_query' => array(
        array(
            'key' => 'goldencandida', // name of custom field
            'value' => '"bestfilmname"', // matches exactly "red"
            'compare' => 'LIKE'
        )
      )
    );
  $custom_query = new WP_Query( $custom_args ); ?>
  <?php if ( $custom_query->have_posts() ) : ?>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingOne">
      <a role="button" data-toggle="collapse" data-parent="#OscarMovies" href="#bestdirector" aria-expanded="false" aria-controls="bestdirector">
        <h4 class="panel-title">
        نامزدهای بهترین فیلمنامه
        <span class="itemicon"></span>
        </h4>
      </a>
    </div>
    <div id="bestdirector" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
      <div class="panel-body">
        <ul>
        <?php while ( $custom_query->have_posts()) : $custom_query->the_post(); ?>
          <?php if(in_array('2002', get_field('medalyears') )) : ?>
          <li>
            <div class="picture">
              <a href="<?php the_permalink(); ?>" title="<?php the_field('title'); ?>">
               <img src="<?php the_field('img'); ?>" alt="<?php the_field('title'); ?>"> 
              </a>
            </div>
            <div class="items">
            <?php if(in_array('bestfilmname', get_field('goldenwon') )) : ?>
              <h4>
              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 100 100" enable-background="new 0 0 100 100" fill="#bba36c" xml:space="preserve"><g><path d="M66,95.333v-3.736l-2.882-5.764H61v-40h-2.516c-0.078-1.955-0.523-2.453-2.777-4.707l-0.966-0.966   C58.256,39.846,61,38.998,61,36.833v-3.5h-2.965l-4.144-6.215c0.87-0.33,1.702-0.766,2.475-1.315   c1.316-0.935,2.431-2.172,3.223-3.578C60.512,20.588,61,18.723,61,16.833c0-2.916-1.148-5.563-3.006-7.533   c-0.008-0.032-0.01-0.064-0.019-0.096L57.92,9.219C55.918,7.137,53.11,5.833,50,5.833c-0.646,0-1.277,0.067-1.895,0.175   L43.017,3.53l-1.142,5.914C40.096,11.399,39,13.987,39,16.833c0,4.696,2.963,8.702,7.113,10.277l-4.148,6.223H39v3.5   c0,2.165,2.744,3.013,6.259,3.327l-0.966,0.966c-2.254,2.254-2.699,2.752-2.777,4.707H39v40h-2.118L34,91.597v3.736h16H66z    M55.825,23.68l-0.47-0.42l1.562-1.801l0.503,0.453C56.969,22.567,56.432,23.163,55.825,23.68z M57.436,11.771   c0.307,0.45,0.571,0.931,0.794,1.434c-1.247,2.491-6.257,4.688-7.933,5.421c-2.916,1.275-6.776,2.043-8.296,2.314   c-0.271-0.524-0.489-1.078-0.653-1.655c4.799-1.035,10.481-3.05,12.741-4.57C55.441,13.805,56.707,12.836,57.436,11.771z    M45.338,6.884c-0.358,0.168-0.705,0.356-1.041,0.561l0.188-0.975L45.338,6.884z M50,7.833c2.313,0,4.418,0.884,6.014,2.323   c-0.206,0.703-1.216,1.672-3.04,2.899c-2.039,1.371-7.439,3.269-11.949,4.253C41.016,17.15,41,16.994,41,16.833   C41,11.871,45.037,7.833,50,7.833z M43.231,22.746c1.916-0.374,5.203-1.123,7.866-2.289c3.83-1.675,6.347-3.211,7.817-4.793   C58.965,16.047,59,16.436,59,16.833c0,1.118-0.215,2.222-0.615,3.255l-1.644-1.48l-4.187,4.83l1.558,1.394   c-1.265,0.653-2.663,1.001-4.112,1.001C47.301,25.833,44.883,24.633,43.231,22.746z M48.147,27.665   c0.604,0.103,1.22,0.168,1.853,0.168c0.629,0,1.249-0.057,1.857-0.161l3.774,5.661H50h-5.632L48.147,27.665z M41,36.833v-1.5h9h9   v1.5c0,0.061-0.103,1.5-9,1.5S41,36.894,41,36.833z M45.707,42.54l2.232-2.232c0.681,0.018,1.371,0.025,2.061,0.025   s1.38-0.007,2.061-0.025l2.232,2.232c1.776,1.776,2.118,2.138,2.186,3.293H43.521C43.589,44.678,43.931,44.316,45.707,42.54z    M41,47.833h18v38h-9h-9V47.833z M36,93.333v-1.264l2.118-4.236H39h11h11h0.882L64,92.069v1.264H50H36z"/></g></svg>
              <?php the_field('title'); ?></h4>
              <?php else: ?>
                <h4> <?php the_field('title'); ?></h4>
              <?php endif; ?>
              <span><?php the_field('engtitle'); ?></span>
              <p>
              <svg fill="#E4BB24" height="30" viewBox="0 0 18 18" width="30" xmlns="http://www.w3.org/2000/svg">
                    <path d="M9 11.3l3.71 2.7-1.42-4.36L15 7h-4.55L9 2.5 7.55 7H3l3.71 2.64L5.29 14z"/>
                    <path d="M0 0h18v18H0z" fill="none"/>
                </svg>
               <?php the_field('rate'); ?></p>
              <p><?php the_field('genre'); ?></p>
            </div>
          </li>
          <?php endif; ?>
  <?php endwhile; ?>
        </ul>
      </div>
    </div>
  </div>
  <?php wp_reset_postdata(); ?>
<?php endif; ?>

<?php 

  $custom_args = array(
      'post_type' => 'post',
      'posts_per_page' => -1,
      'meta_query' => array(
        array(
            'key' => 'goldencandida', // name of custom field
            'value' => '"bestanimation"', // matches exactly "red"
            'compare' => 'LIKE'
        )
      )
    );
  $custom_query = new WP_Query( $custom_args ); ?>
  <?php if ( $custom_query->have_posts() ) : ?>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingOne">
      <a role="button" data-toggle="collapse" data-parent="#OscarMovies" href="#gheyreghtebas" aria-expanded="false" aria-controls="gheyreghtebas">
        <h4 class="panel-title">
        نامزدهای بهترین انیمیشن
        <span class="itemicon"></span>
        </h4>
      </a>
    </div>
    <div id="gheyreghtebas" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
      <div class="panel-body">
        <ul>
        <?php while ( $custom_query->have_posts()) : $custom_query->the_post(); ?>
          <?php if(in_array('2002', get_field('medalyears') )) : ?>
          <li>
            <div class="picture">
              <a href="<?php the_permalink(); ?>" title="<?php the_field('title'); ?>">
               <img src="<?php the_field('img'); ?>" alt="<?php the_field('title'); ?>"> 
              </a>
            </div>
            <div class="items">
            <?php if(in_array('bestanimation', get_field('goldenwon') )) : ?>
              <h4>
              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 100 100" enable-background="new 0 0 100 100" fill="#bba36c" xml:space="preserve"><g><path d="M66,95.333v-3.736l-2.882-5.764H61v-40h-2.516c-0.078-1.955-0.523-2.453-2.777-4.707l-0.966-0.966   C58.256,39.846,61,38.998,61,36.833v-3.5h-2.965l-4.144-6.215c0.87-0.33,1.702-0.766,2.475-1.315   c1.316-0.935,2.431-2.172,3.223-3.578C60.512,20.588,61,18.723,61,16.833c0-2.916-1.148-5.563-3.006-7.533   c-0.008-0.032-0.01-0.064-0.019-0.096L57.92,9.219C55.918,7.137,53.11,5.833,50,5.833c-0.646,0-1.277,0.067-1.895,0.175   L43.017,3.53l-1.142,5.914C40.096,11.399,39,13.987,39,16.833c0,4.696,2.963,8.702,7.113,10.277l-4.148,6.223H39v3.5   c0,2.165,2.744,3.013,6.259,3.327l-0.966,0.966c-2.254,2.254-2.699,2.752-2.777,4.707H39v40h-2.118L34,91.597v3.736h16H66z    M55.825,23.68l-0.47-0.42l1.562-1.801l0.503,0.453C56.969,22.567,56.432,23.163,55.825,23.68z M57.436,11.771   c0.307,0.45,0.571,0.931,0.794,1.434c-1.247,2.491-6.257,4.688-7.933,5.421c-2.916,1.275-6.776,2.043-8.296,2.314   c-0.271-0.524-0.489-1.078-0.653-1.655c4.799-1.035,10.481-3.05,12.741-4.57C55.441,13.805,56.707,12.836,57.436,11.771z    M45.338,6.884c-0.358,0.168-0.705,0.356-1.041,0.561l0.188-0.975L45.338,6.884z M50,7.833c2.313,0,4.418,0.884,6.014,2.323   c-0.206,0.703-1.216,1.672-3.04,2.899c-2.039,1.371-7.439,3.269-11.949,4.253C41.016,17.15,41,16.994,41,16.833   C41,11.871,45.037,7.833,50,7.833z M43.231,22.746c1.916-0.374,5.203-1.123,7.866-2.289c3.83-1.675,6.347-3.211,7.817-4.793   C58.965,16.047,59,16.436,59,16.833c0,1.118-0.215,2.222-0.615,3.255l-1.644-1.48l-4.187,4.83l1.558,1.394   c-1.265,0.653-2.663,1.001-4.112,1.001C47.301,25.833,44.883,24.633,43.231,22.746z M48.147,27.665   c0.604,0.103,1.22,0.168,1.853,0.168c0.629,0,1.249-0.057,1.857-0.161l3.774,5.661H50h-5.632L48.147,27.665z M41,36.833v-1.5h9h9   v1.5c0,0.061-0.103,1.5-9,1.5S41,36.894,41,36.833z M45.707,42.54l2.232-2.232c0.681,0.018,1.371,0.025,2.061,0.025   s1.38-0.007,2.061-0.025l2.232,2.232c1.776,1.776,2.118,2.138,2.186,3.293H43.521C43.589,44.678,43.931,44.316,45.707,42.54z    M41,47.833h18v38h-9h-9V47.833z M36,93.333v-1.264l2.118-4.236H39h11h11h0.882L64,92.069v1.264H50H36z"/></g></svg>
              <?php the_field('title'); ?></h4>
              <?php else: ?>
                <h4> <?php the_field('title'); ?></h4>
              <?php endif; ?>
              <span><?php the_field('engtitle'); ?></span>
              <p>
              <svg fill="#E4BB24" height="30" viewBox="0 0 18 18" width="30" xmlns="http://www.w3.org/2000/svg">
                    <path d="M9 11.3l3.71 2.7-1.42-4.36L15 7h-4.55L9 2.5 7.55 7H3l3.71 2.64L5.29 14z"/>
                    <path d="M0 0h18v18H0z" fill="none"/>
                </svg>
               <?php the_field('rate'); ?></p>
              <p><?php the_field('genre'); ?></p>
            </div>
          </li>
          <?php endif; ?>
  <?php endwhile; ?>
        </ul>
      </div>
    </div>
  </div>
  <?php wp_reset_postdata(); ?>
<?php endif; ?>


<?php 

  $custom_args = array(
      'post_type' => 'post',
      'posts_per_page' => -1,
      'meta_query' => array(
        array(
            'key' => 'goldencandida', // name of custom field
            'value' => '"bestnounenglish"', // matches exactly "red"
            'compare' => 'LIKE'
        )
      )
    );
  $custom_query = new WP_Query( $custom_args ); ?>
  <?php if ( $custom_query->have_posts() ) : ?>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingOne">
      <a role="button" data-toggle="collapse" data-parent="#OscarMovies" href="#besteghtebas" aria-expanded="false" aria-controls="besteghtebas">
        <h4 class="panel-title">
        نامزدهای بهترین فیلم غیر انگلیسی زبان
        <span class="itemicon"></span>
        </h4>
      </a>
    </div>
    <div id="besteghtebas" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
      <div class="panel-body">
        <ul>
        <?php while ( $custom_query->have_posts()) : $custom_query->the_post(); ?>
          <?php if(in_array('2002', get_field('medalyears') )) : ?>
          <li>
            <div class="picture">
              <a href="<?php the_permalink(); ?>" title="<?php the_field('title'); ?>">
               <img src="<?php the_field('img'); ?>" alt="<?php the_field('title'); ?>"> 
              </a>
            </div>
            <div class="items">
            <?php if(in_array('bestnounenglish', get_field('goldenwon') )) : ?>
              <h4>
              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 100 100" enable-background="new 0 0 100 100" fill="#bba36c" xml:space="preserve"><g><path d="M66,95.333v-3.736l-2.882-5.764H61v-40h-2.516c-0.078-1.955-0.523-2.453-2.777-4.707l-0.966-0.966   C58.256,39.846,61,38.998,61,36.833v-3.5h-2.965l-4.144-6.215c0.87-0.33,1.702-0.766,2.475-1.315   c1.316-0.935,2.431-2.172,3.223-3.578C60.512,20.588,61,18.723,61,16.833c0-2.916-1.148-5.563-3.006-7.533   c-0.008-0.032-0.01-0.064-0.019-0.096L57.92,9.219C55.918,7.137,53.11,5.833,50,5.833c-0.646,0-1.277,0.067-1.895,0.175   L43.017,3.53l-1.142,5.914C40.096,11.399,39,13.987,39,16.833c0,4.696,2.963,8.702,7.113,10.277l-4.148,6.223H39v3.5   c0,2.165,2.744,3.013,6.259,3.327l-0.966,0.966c-2.254,2.254-2.699,2.752-2.777,4.707H39v40h-2.118L34,91.597v3.736h16H66z    M55.825,23.68l-0.47-0.42l1.562-1.801l0.503,0.453C56.969,22.567,56.432,23.163,55.825,23.68z M57.436,11.771   c0.307,0.45,0.571,0.931,0.794,1.434c-1.247,2.491-6.257,4.688-7.933,5.421c-2.916,1.275-6.776,2.043-8.296,2.314   c-0.271-0.524-0.489-1.078-0.653-1.655c4.799-1.035,10.481-3.05,12.741-4.57C55.441,13.805,56.707,12.836,57.436,11.771z    M45.338,6.884c-0.358,0.168-0.705,0.356-1.041,0.561l0.188-0.975L45.338,6.884z M50,7.833c2.313,0,4.418,0.884,6.014,2.323   c-0.206,0.703-1.216,1.672-3.04,2.899c-2.039,1.371-7.439,3.269-11.949,4.253C41.016,17.15,41,16.994,41,16.833   C41,11.871,45.037,7.833,50,7.833z M43.231,22.746c1.916-0.374,5.203-1.123,7.866-2.289c3.83-1.675,6.347-3.211,7.817-4.793   C58.965,16.047,59,16.436,59,16.833c0,1.118-0.215,2.222-0.615,3.255l-1.644-1.48l-4.187,4.83l1.558,1.394   c-1.265,0.653-2.663,1.001-4.112,1.001C47.301,25.833,44.883,24.633,43.231,22.746z M48.147,27.665   c0.604,0.103,1.22,0.168,1.853,0.168c0.629,0,1.249-0.057,1.857-0.161l3.774,5.661H50h-5.632L48.147,27.665z M41,36.833v-1.5h9h9   v1.5c0,0.061-0.103,1.5-9,1.5S41,36.894,41,36.833z M45.707,42.54l2.232-2.232c0.681,0.018,1.371,0.025,2.061,0.025   s1.38-0.007,2.061-0.025l2.232,2.232c1.776,1.776,2.118,2.138,2.186,3.293H43.521C43.589,44.678,43.931,44.316,45.707,42.54z    M41,47.833h18v38h-9h-9V47.833z M36,93.333v-1.264l2.118-4.236H39h11h11h0.882L64,92.069v1.264H50H36z"/></g></svg>
              <?php the_field('title'); ?></h4>
              <?php else: ?>
                <h4> <?php the_field('title'); ?></h4>
              <?php endif; ?>
              <span><?php the_field('engtitle'); ?></span>
              <p>
              <svg fill="#E4BB24" height="30" viewBox="0 0 18 18" width="30" xmlns="http://www.w3.org/2000/svg">
                    <path d="M9 11.3l3.71 2.7-1.42-4.36L15 7h-4.55L9 2.5 7.55 7H3l3.71 2.64L5.29 14z"/>
                    <path d="M0 0h18v18H0z" fill="none"/>
                </svg>
               <?php the_field('rate'); ?></p>
              <p><?php the_field('genre'); ?></p>
            </div>
          </li>
          <?php endif; ?>
  <?php endwhile; ?>
        </ul>
      </div>
    </div>
  </div>
  <?php wp_reset_postdata(); ?>
<?php endif; ?>


</div>


</section>
<?php get_footer(); ?>