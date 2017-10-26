<?php
/*

Template Name: Oscars 2003 Page

*/

  get_header( 'oscars' );
?>
<div class="Oscarcontent panel-group" id="OscarMovies" role="tablist" aria-multiselectable="true">
<?php 

  $custom_args = array(
      'post_type' => 'post',
      'posts_per_page' => -1,
      'meta_query' => array(
        array(
            'key' => 'oscar', // name of custom field
            'value' => '"seda"', // matches exactly "red"
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
        نامزدهای بهترین تدوین صدا
        <span class="itemicon"></span>
        </h4>
      </a>
    </div>
    <div id="besttadvin" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
      <div class="panel-body">
        <ul>
        <?php while ( $custom_query->have_posts()) : $custom_query->the_post(); ?>
          <?php if(in_array('2003', get_field('medalyears') )) : ?>
          <li>
            <div class="picture">
              <a href="<?php the_permalink(); ?>" title="<?php the_field('title'); ?>">
               <img src="<?php the_field('img'); ?>" alt="<?php the_field('title'); ?>"> 
              </a>
            </div>
            <div class="items">
            <?php if(in_array('seda', get_field('oscarwon') )) : ?>
              <h4>
              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 100 100" enable-background="new 0 0 100 100" fill="#BBA36C" xml:space="preserve"><g><path d="M39,83.5h22v-7H39V83.5z M41,78.5h18v3H41V78.5z"/><path d="M71,86.5h-5v-15h-2.5v-5h-9.931L55.936,31H58.5V16.877l-6.008-2.955l1.008-1.008V4h-7v8.914l1.008,1.008L41.5,16.877v14.51   l2.533-0.845L46.431,66.5H36.5v5H34v15h-5v7h42V86.5z M51.564,66.5H51V31h2.931L51.564,66.5z M48.5,6h3v6.086l-1.5,1.5l-1.5-1.5V6z    M43.5,28.613v-10.49l5.502-2.706L50,16.414l0.998-0.998l5.502,2.706V29H51v-0.779v-0.103l4.447-2.224l-0.895-1.789L51,25.882V24   h-6v2h4v0.779L43.5,28.613z M45.998,29.934l-0.171,0.011L49,28.887V30v1v35.5h-0.564L45.998,29.934z M38.5,68.5h23v3h-23V68.5z    M36,73.5h0.5h27H64v13H36V73.5z M69,91.5H31v-3h3h32h3V91.5z"/></g></svg>
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
            'key' => 'oscar', // name of custom field
            'value' => '"mostanad"', // matches exactly "red"
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
        نامزدهای بهترین مستند بلند
        <span class="itemicon"></span>
        </h4>
      </a>
    </div>
    <div id="mostanadboland" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
      <div class="panel-body">
        <ul>
        <?php while ( $custom_query->have_posts()) : $custom_query->the_post(); ?>
          <?php if(in_array('2003', get_field('medalyears') )) : ?>
          <li>
            <div class="picture">
              <a href="<?php the_permalink(); ?>" title="<?php the_field('title'); ?>">
               <img src="<?php the_field('img'); ?>" alt="<?php the_field('title'); ?>"> 
              </a>
            </div>
            <div class="items">
            <?php if(in_array('mostanad', get_field('oscarwon') )) : ?>
              <h4>
              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 100 100" enable-background="new 0 0 100 100" fill="#BBA36C" xml:space="preserve"><g><path d="M39,83.5h22v-7H39V83.5z M41,78.5h18v3H41V78.5z"/><path d="M71,86.5h-5v-15h-2.5v-5h-9.931L55.936,31H58.5V16.877l-6.008-2.955l1.008-1.008V4h-7v8.914l1.008,1.008L41.5,16.877v14.51   l2.533-0.845L46.431,66.5H36.5v5H34v15h-5v7h42V86.5z M51.564,66.5H51V31h2.931L51.564,66.5z M48.5,6h3v6.086l-1.5,1.5l-1.5-1.5V6z    M43.5,28.613v-10.49l5.502-2.706L50,16.414l0.998-0.998l5.502,2.706V29H51v-0.779v-0.103l4.447-2.224l-0.895-1.789L51,25.882V24   h-6v2h4v0.779L43.5,28.613z M45.998,29.934l-0.171,0.011L49,28.887V30v1v35.5h-0.564L45.998,29.934z M38.5,68.5h23v3h-23V68.5z    M36,73.5h0.5h27H64v13H36V73.5z M69,91.5H31v-3h3h32h3V91.5z"/></g></svg>
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
            'key' => 'oscar', // name of custom field
            'value' => '"mokamelmard"', // matches exactly "red"
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
        نامزدهای بهترین بازیگر نقش مکمل مرد
        <span class="itemicon"></span>
        </h4>
      </a>
    </div>
    <div id="mokamelmard" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
      <div class="panel-body">
        <ul>
        <?php while ( $custom_query->have_posts()) : $custom_query->the_post(); ?>
          <?php if(in_array('2003', get_field('medalyears') )) : ?>
          <li>
            <div class="picture">
              <a href="<?php the_permalink(); ?>" title="<?php the_field('title'); ?>">
               <img src="<?php the_field('img'); ?>" alt="<?php the_field('title'); ?>"> 
              </a>
            </div>
            <div class="items">
            <?php if(in_array('mokamelmard', get_field('oscarwon') )) : ?>
              <h4>
              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 100 100" enable-background="new 0 0 100 100" fill="#BBA36C" xml:space="preserve"><g><path d="M39,83.5h22v-7H39V83.5z M41,78.5h18v3H41V78.5z"/><path d="M71,86.5h-5v-15h-2.5v-5h-9.931L55.936,31H58.5V16.877l-6.008-2.955l1.008-1.008V4h-7v8.914l1.008,1.008L41.5,16.877v14.51   l2.533-0.845L46.431,66.5H36.5v5H34v15h-5v7h42V86.5z M51.564,66.5H51V31h2.931L51.564,66.5z M48.5,6h3v6.086l-1.5,1.5l-1.5-1.5V6z    M43.5,28.613v-10.49l5.502-2.706L50,16.414l0.998-0.998l5.502,2.706V29H51v-0.779v-0.103l4.447-2.224l-0.895-1.789L51,25.882V24   h-6v2h4v0.779L43.5,28.613z M45.998,29.934l-0.171,0.011L49,28.887V30v1v35.5h-0.564L45.998,29.934z M38.5,68.5h23v3h-23V68.5z    M36,73.5h0.5h27H64v13H36V73.5z M69,91.5H31v-3h3h32h3V91.5z"/></g></svg>
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
            'key' => 'oscar', // name of custom field
            'value' => '"bestman"', // matches exactly "red"
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
        نامزدهای بهترین بازیگر نقش اول مرد
        <span class="itemicon"></span>
        </h4>
      </a>
    </div>
    <div id="bestman" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
      <div class="panel-body">
        <ul>
        <?php while ( $custom_query->have_posts()) : $custom_query->the_post(); ?>
          <?php if(in_array('2003', get_field('medalyears') )) : ?>
          <li>
            <div class="picture">
              <a href="<?php the_permalink(); ?>" title="<?php the_field('title'); ?>">
               <img src="<?php the_field('img'); ?>" alt="<?php the_field('title'); ?>"> 
              </a>
            </div>
            <div class="items">
            <?php if(in_array('bestman', get_field('oscarwon') )) : ?>
              <h4>
              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 100 100" enable-background="new 0 0 100 100" fill="#BBA36C" xml:space="preserve"><g><path d="M39,83.5h22v-7H39V83.5z M41,78.5h18v3H41V78.5z"/><path d="M71,86.5h-5v-15h-2.5v-5h-9.931L55.936,31H58.5V16.877l-6.008-2.955l1.008-1.008V4h-7v8.914l1.008,1.008L41.5,16.877v14.51   l2.533-0.845L46.431,66.5H36.5v5H34v15h-5v7h42V86.5z M51.564,66.5H51V31h2.931L51.564,66.5z M48.5,6h3v6.086l-1.5,1.5l-1.5-1.5V6z    M43.5,28.613v-10.49l5.502-2.706L50,16.414l0.998-0.998l5.502,2.706V29H51v-0.779v-0.103l4.447-2.224l-0.895-1.789L51,25.882V24   h-6v2h4v0.779L43.5,28.613z M45.998,29.934l-0.171,0.011L49,28.887V30v1v35.5h-0.564L45.998,29.934z M38.5,68.5h23v3h-23V68.5z    M36,73.5h0.5h27H64v13H36V73.5z M69,91.5H31v-3h3h32h3V91.5z"/></g></svg>
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
            'key' => 'oscar', // name of custom field
            'value' => '"bestfilm"', // matches exactly "red"
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
        نامزدهای بهترین فیلم
        <span class="itemicon"></span>
        </h4>
      </a>
    </div>
    <div id="bestfilm" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
      <div class="panel-body">
        <ul>
        <?php while ( $custom_query->have_posts()) : $custom_query->the_post(); ?>
          <?php if(in_array('2003', get_field('medalyears') )) : ?>
          <li>
            <div class="picture">
              <a href="<?php the_permalink(); ?>" title="<?php the_field('title'); ?>">
               <img src="<?php the_field('img'); ?>" alt="<?php the_field('title'); ?>"> 
              </a>
            </div>
            <div class="items">
            <?php if(in_array('bestfilm', get_field('oscarwon') )) : ?>
              <h4>
              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 100 100" enable-background="new 0 0 100 100" fill="#BBA36C" xml:space="preserve"><g><path d="M39,83.5h22v-7H39V83.5z M41,78.5h18v3H41V78.5z"/><path d="M71,86.5h-5v-15h-2.5v-5h-9.931L55.936,31H58.5V16.877l-6.008-2.955l1.008-1.008V4h-7v8.914l1.008,1.008L41.5,16.877v14.51   l2.533-0.845L46.431,66.5H36.5v5H34v15h-5v7h42V86.5z M51.564,66.5H51V31h2.931L51.564,66.5z M48.5,6h3v6.086l-1.5,1.5l-1.5-1.5V6z    M43.5,28.613v-10.49l5.502-2.706L50,16.414l0.998-0.998l5.502,2.706V29H51v-0.779v-0.103l4.447-2.224l-0.895-1.789L51,25.882V24   h-6v2h4v0.779L43.5,28.613z M45.998,29.934l-0.171,0.011L49,28.887V30v1v35.5h-0.564L45.998,29.934z M38.5,68.5h23v3h-23V68.5z    M36,73.5h0.5h27H64v13H36V73.5z M69,91.5H31v-3h3h32h3V91.5z"/></g></svg>
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
            'key' => 'oscar', // name of custom field
            'value' => '"bestzan"', // matches exactly "red"
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
        نامزدهای بهترین بازیگر نقش اول زن
        <span class="itemicon"></span>
        </h4>
      </a>
    </div>
    <div id="bestwoman" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
      <div class="panel-body">
        <ul>
        <?php while ( $custom_query->have_posts()) : $custom_query->the_post(); ?>
          <?php if(in_array('2003', get_field('medalyears') )) : ?>
          <li>
            <div class="picture">
              <a href="<?php the_permalink(); ?>" title="<?php the_field('title'); ?>">
               <img src="<?php the_field('img'); ?>" alt="<?php the_field('title'); ?>"> 
              </a>
            </div>
            <div class="items">
            <?php if(in_array('bestzan', get_field('oscarwon') )) : ?>
              <h4>
              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 100 100" enable-background="new 0 0 100 100" fill="#BBA36C" xml:space="preserve"><g><path d="M39,83.5h22v-7H39V83.5z M41,78.5h18v3H41V78.5z"/><path d="M71,86.5h-5v-15h-2.5v-5h-9.931L55.936,31H58.5V16.877l-6.008-2.955l1.008-1.008V4h-7v8.914l1.008,1.008L41.5,16.877v14.51   l2.533-0.845L46.431,66.5H36.5v5H34v15h-5v7h42V86.5z M51.564,66.5H51V31h2.931L51.564,66.5z M48.5,6h3v6.086l-1.5,1.5l-1.5-1.5V6z    M43.5,28.613v-10.49l5.502-2.706L50,16.414l0.998-0.998l5.502,2.706V29H51v-0.779v-0.103l4.447-2.224l-0.895-1.789L51,25.882V24   h-6v2h4v0.779L43.5,28.613z M45.998,29.934l-0.171,0.011L49,28.887V30v1v35.5h-0.564L45.998,29.934z M38.5,68.5h23v3h-23V68.5z    M36,73.5h0.5h27H64v13H36V73.5z M69,91.5H31v-3h3h32h3V91.5z"/></g></svg>
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
            'key' => 'oscar', // name of custom field
            'value' => '"mokamelzan"', // matches exactly "red"
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
        نامزدهای بهترین بازیگر نقش مکمل زن
        <span class="itemicon"></span>
        </h4>
      </a>
    </div>
    <div id="mokamelzan" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
      <div class="panel-body">
        <ul>
        <?php while ( $custom_query->have_posts()) : $custom_query->the_post(); ?>
          <?php if(in_array('2003', get_field('medalyears') )) : ?>
          <li>
            <div class="picture">
              <a href="<?php the_permalink(); ?>" title="<?php the_field('title'); ?>">
               <img src="<?php the_field('img'); ?>" alt="<?php the_field('title'); ?>"> 
              </a>
            </div>
            <div class="items">
            <?php if(in_array('mokamelzan', get_field('oscarwon') )) : ?>
              <h4>
              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 100 100" enable-background="new 0 0 100 100" fill="#BBA36C" xml:space="preserve"><g><path d="M39,83.5h22v-7H39V83.5z M41,78.5h18v3H41V78.5z"/><path d="M71,86.5h-5v-15h-2.5v-5h-9.931L55.936,31H58.5V16.877l-6.008-2.955l1.008-1.008V4h-7v8.914l1.008,1.008L41.5,16.877v14.51   l2.533-0.845L46.431,66.5H36.5v5H34v15h-5v7h42V86.5z M51.564,66.5H51V31h2.931L51.564,66.5z M48.5,6h3v6.086l-1.5,1.5l-1.5-1.5V6z    M43.5,28.613v-10.49l5.502-2.706L50,16.414l0.998-0.998l5.502,2.706V29H51v-0.779v-0.103l4.447-2.224l-0.895-1.789L51,25.882V24   h-6v2h4v0.779L43.5,28.613z M45.998,29.934l-0.171,0.011L49,28.887V30v1v35.5h-0.564L45.998,29.934z M38.5,68.5h23v3h-23V68.5z    M36,73.5h0.5h27H64v13H36V73.5z M69,91.5H31v-3h3h32h3V91.5z"/></g></svg>
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
            'key' => 'oscar', // name of custom field
            'value' => '"bestdirector"', // matches exactly "red"
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
        نامزدهای بهترین کارگردانی
        <span class="itemicon"></span>
        </h4>
      </a>
    </div>
    <div id="bestdirector" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
      <div class="panel-body">
        <ul>
        <?php while ( $custom_query->have_posts()) : $custom_query->the_post(); ?>
          <?php if(in_array('2003', get_field('medalyears') )) : ?>
          <li>
            <div class="picture">
              <a href="<?php the_permalink(); ?>" title="<?php the_field('title'); ?>">
               <img src="<?php the_field('img'); ?>" alt="<?php the_field('title'); ?>"> 
              </a>
            </div>
            <div class="items">
            <?php if(in_array('bestdirector', get_field('oscarwon') )) : ?>
              <h4>
              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 100 100" enable-background="new 0 0 100 100" fill="#BBA36C" xml:space="preserve"><g><path d="M39,83.5h22v-7H39V83.5z M41,78.5h18v3H41V78.5z"/><path d="M71,86.5h-5v-15h-2.5v-5h-9.931L55.936,31H58.5V16.877l-6.008-2.955l1.008-1.008V4h-7v8.914l1.008,1.008L41.5,16.877v14.51   l2.533-0.845L46.431,66.5H36.5v5H34v15h-5v7h42V86.5z M51.564,66.5H51V31h2.931L51.564,66.5z M48.5,6h3v6.086l-1.5,1.5l-1.5-1.5V6z    M43.5,28.613v-10.49l5.502-2.706L50,16.414l0.998-0.998l5.502,2.706V29H51v-0.779v-0.103l4.447-2.224l-0.895-1.789L51,25.882V24   h-6v2h4v0.779L43.5,28.613z M45.998,29.934l-0.171,0.011L49,28.887V30v1v35.5h-0.564L45.998,29.934z M38.5,68.5h23v3h-23V68.5z    M36,73.5h0.5h27H64v13H36V73.5z M69,91.5H31v-3h3h32h3V91.5z"/></g></svg>
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
            'key' => 'oscar', // name of custom field
            'value' => '"eghtebas"', // matches exactly "red"
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
        نامزدهای بهترین فیلمنامه غیر اقتباسی
        <span class="itemicon"></span>
        </h4>
      </a>
    </div>
    <div id="gheyreghtebas" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
      <div class="panel-body">
        <ul>
        <?php while ( $custom_query->have_posts()) : $custom_query->the_post(); ?>
          <?php if(in_array('2003', get_field('medalyears') )) : ?>
          <li>
            <div class="picture">
              <a href="<?php the_permalink(); ?>" title="<?php the_field('title'); ?>">
               <img src="<?php the_field('img'); ?>" alt="<?php the_field('title'); ?>"> 
              </a>
            </div>
            <div class="items">
            <?php if(in_array('eghtebas', get_field('oscarwon') )) : ?>
              <h4>
              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 100 100" enable-background="new 0 0 100 100" fill="#BBA36C" xml:space="preserve"><g><path d="M39,83.5h22v-7H39V83.5z M41,78.5h18v3H41V78.5z"/><path d="M71,86.5h-5v-15h-2.5v-5h-9.931L55.936,31H58.5V16.877l-6.008-2.955l1.008-1.008V4h-7v8.914l1.008,1.008L41.5,16.877v14.51   l2.533-0.845L46.431,66.5H36.5v5H34v15h-5v7h42V86.5z M51.564,66.5H51V31h2.931L51.564,66.5z M48.5,6h3v6.086l-1.5,1.5l-1.5-1.5V6z    M43.5,28.613v-10.49l5.502-2.706L50,16.414l0.998-0.998l5.502,2.706V29H51v-0.779v-0.103l4.447-2.224l-0.895-1.789L51,25.882V24   h-6v2h4v0.779L43.5,28.613z M45.998,29.934l-0.171,0.011L49,28.887V30v1v35.5h-0.564L45.998,29.934z M38.5,68.5h23v3h-23V68.5z    M36,73.5h0.5h27H64v13H36V73.5z M69,91.5H31v-3h3h32h3V91.5z"/></g></svg>
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
            'key' => 'oscar', // name of custom field
            'value' => '"besteghtebas"', // matches exactly "red"
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
        نامزدهای بهترین فیلمنامه اقتباسی
        <span class="itemicon"></span>
        </h4>
      </a>
    </div>
    <div id="besteghtebas" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
      <div class="panel-body">
        <ul>
        <?php while ( $custom_query->have_posts()) : $custom_query->the_post(); ?>
          <?php if(in_array('2003', get_field('medalyears') )) : ?>
          <li>
            <div class="picture">
              <a href="<?php the_permalink(); ?>" title="<?php the_field('title'); ?>">
               <img src="<?php the_field('img'); ?>" alt="<?php the_field('title'); ?>"> 
              </a>
            </div>
            <div class="items">
            <?php if(in_array('besteghtebas', get_field('oscarwon') )) : ?>
              <h4>
              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 100 100" enable-background="new 0 0 100 100" fill="#BBA36C" xml:space="preserve"><g><path d="M39,83.5h22v-7H39V83.5z M41,78.5h18v3H41V78.5z"/><path d="M71,86.5h-5v-15h-2.5v-5h-9.931L55.936,31H58.5V16.877l-6.008-2.955l1.008-1.008V4h-7v8.914l1.008,1.008L41.5,16.877v14.51   l2.533-0.845L46.431,66.5H36.5v5H34v15h-5v7h42V86.5z M51.564,66.5H51V31h2.931L51.564,66.5z M48.5,6h3v6.086l-1.5,1.5l-1.5-1.5V6z    M43.5,28.613v-10.49l5.502-2.706L50,16.414l0.998-0.998l5.502,2.706V29H51v-0.779v-0.103l4.447-2.224l-0.895-1.789L51,25.882V24   h-6v2h4v0.779L43.5,28.613z M45.998,29.934l-0.171,0.011L49,28.887V30v1v35.5h-0.564L45.998,29.934z M38.5,68.5h23v3h-23V68.5z    M36,73.5h0.5h27H64v13H36V73.5z M69,91.5H31v-3h3h32h3V91.5z"/></g></svg>
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
            'key' => 'oscar', // name of custom field
            'value' => '"bestfilming"', // matches exactly "red"
            'compare' => 'LIKE'
        )
      )
    );
  $custom_query = new WP_Query( $custom_args ); ?>
  <?php if ( $custom_query->have_posts() ) : ?>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingOne">
      <a role="button" data-toggle="collapse" data-parent="#OscarMovies" href="#bestfilming" aria-expanded="false" aria-controls="bestfilming">
        <h4 class="panel-title">
        نامزدهای بهترین فیلمبرداری
        <span class="itemicon"></span>
        </h4>
      </a>
    </div>
    <div id="bestfilming" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
      <div class="panel-body">
        <ul>
        <?php while ( $custom_query->have_posts()) : $custom_query->the_post(); ?>
          <?php if(in_array('2003', get_field('medalyears') )) : ?>
          <li>
            <div class="picture">
              <a href="<?php the_permalink(); ?>" title="<?php the_field('title'); ?>">
               <img src="<?php the_field('img'); ?>" alt="<?php the_field('title'); ?>"> 
              </a>
            </div>
            <div class="items">
            <?php if(in_array('bestfilming', get_field('oscarwon') )) : ?>
              <h4>
              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 100 100" enable-background="new 0 0 100 100" fill="#BBA36C" xml:space="preserve"><g><path d="M39,83.5h22v-7H39V83.5z M41,78.5h18v3H41V78.5z"/><path d="M71,86.5h-5v-15h-2.5v-5h-9.931L55.936,31H58.5V16.877l-6.008-2.955l1.008-1.008V4h-7v8.914l1.008,1.008L41.5,16.877v14.51   l2.533-0.845L46.431,66.5H36.5v5H34v15h-5v7h42V86.5z M51.564,66.5H51V31h2.931L51.564,66.5z M48.5,6h3v6.086l-1.5,1.5l-1.5-1.5V6z    M43.5,28.613v-10.49l5.502-2.706L50,16.414l0.998-0.998l5.502,2.706V29H51v-0.779v-0.103l4.447-2.224l-0.895-1.789L51,25.882V24   h-6v2h4v0.779L43.5,28.613z M45.998,29.934l-0.171,0.011L49,28.887V30v1v35.5h-0.564L45.998,29.934z M38.5,68.5h23v3h-23V68.5z    M36,73.5h0.5h27H64v13H36V73.5z M69,91.5H31v-3h3h32h3V91.5z"/></g></svg>
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
            'key' => 'oscar', // name of custom field
            'value' => '"bestdress"', // matches exactly "red"
            'compare' => 'LIKE'
        )
      )
    );
  $custom_query = new WP_Query( $custom_args ); ?>
  <?php if ( $custom_query->have_posts() ) : ?>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingOne">
      <a role="button" data-toggle="collapse" data-parent="#OscarMovies" href="#bestlebas" aria-expanded="false" aria-controls="bestlebas">
        <h4 class="panel-title">
        نامزدهای بهترین طراحی لباس
        <span class="itemicon"></span>
        </h4>
      </a>
    </div>
    <div id="bestlebas" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
      <div class="panel-body">
        <ul>
        <?php while ( $custom_query->have_posts()) : $custom_query->the_post(); ?>
          <?php if(in_array('2003', get_field('medalyears') )) : ?>
          <li>
            <div class="picture">
              <a href="<?php the_permalink(); ?>" title="<?php the_field('title'); ?>">
               <img src="<?php the_field('img'); ?>" alt="<?php the_field('title'); ?>"> 
              </a>
            </div>
            <div class="items">
            <?php if(in_array('bestdress', get_field('oscarwon') )) : ?>
              <h4>
              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 100 100" enable-background="new 0 0 100 100" fill="#BBA36C" xml:space="preserve"><g><path d="M39,83.5h22v-7H39V83.5z M41,78.5h18v3H41V78.5z"/><path d="M71,86.5h-5v-15h-2.5v-5h-9.931L55.936,31H58.5V16.877l-6.008-2.955l1.008-1.008V4h-7v8.914l1.008,1.008L41.5,16.877v14.51   l2.533-0.845L46.431,66.5H36.5v5H34v15h-5v7h42V86.5z M51.564,66.5H51V31h2.931L51.564,66.5z M48.5,6h3v6.086l-1.5,1.5l-1.5-1.5V6z    M43.5,28.613v-10.49l5.502-2.706L50,16.414l0.998-0.998l5.502,2.706V29H51v-0.779v-0.103l4.447-2.224l-0.895-1.789L51,25.882V24   h-6v2h4v0.779L43.5,28.613z M45.998,29.934l-0.171,0.011L49,28.887V30v1v35.5h-0.564L45.998,29.934z M38.5,68.5h23v3h-23V68.5z    M36,73.5h0.5h27H64v13H36V73.5z M69,91.5H31v-3h3h32h3V91.5z"/></g></svg>
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
            'key' => 'oscar', // name of custom field
            'value' => '"bestvoice"', // matches exactly "red"
            'compare' => 'LIKE'
        )
      )
    );
  $custom_query = new WP_Query( $custom_args ); ?>
  <?php if ( $custom_query->have_posts() ) : ?>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingOne">
      <a role="button" data-toggle="collapse" data-parent="#OscarMovies" href="#bestvoice" aria-expanded="false" aria-controls="bestvoice">
        <h4 class="panel-title">
        نامزدهای بهترین صداگذاری
        <span class="itemicon"></span>
        </h4>
      </a>
    </div>
    <div id="bestvoice" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
      <div class="panel-body">
        <ul>
        <?php while ( $custom_query->have_posts()) : $custom_query->the_post(); ?>
          <?php if(in_array('2003', get_field('medalyears') )) : ?>
          <li>
            <div class="picture">
              <a href="<?php the_permalink(); ?>" title="<?php the_field('title'); ?>">
               <img src="<?php the_field('img'); ?>" alt="<?php the_field('title'); ?>"> 
              </a>
            </div>
            <div class="items">
            <?php if(in_array('bestvoice', get_field('oscarwon') )) : ?>
              <h4>
              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 100 100" enable-background="new 0 0 100 100" fill="#BBA36C" xml:space="preserve"><g><path d="M39,83.5h22v-7H39V83.5z M41,78.5h18v3H41V78.5z"/><path d="M71,86.5h-5v-15h-2.5v-5h-9.931L55.936,31H58.5V16.877l-6.008-2.955l1.008-1.008V4h-7v8.914l1.008,1.008L41.5,16.877v14.51   l2.533-0.845L46.431,66.5H36.5v5H34v15h-5v7h42V86.5z M51.564,66.5H51V31h2.931L51.564,66.5z M48.5,6h3v6.086l-1.5,1.5l-1.5-1.5V6z    M43.5,28.613v-10.49l5.502-2.706L50,16.414l0.998-0.998l5.502,2.706V29H51v-0.779v-0.103l4.447-2.224l-0.895-1.789L51,25.882V24   h-6v2h4v0.779L43.5,28.613z M45.998,29.934l-0.171,0.011L49,28.887V30v1v35.5h-0.564L45.998,29.934z M38.5,68.5h23v3h-23V68.5z    M36,73.5h0.5h27H64v13H36V73.5z M69,91.5H31v-3h3h32h3V91.5z"/></g></svg>
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
            'key' => 'oscar', // name of custom field
            'value' => '"tadvin"', // matches exactly "red"
            'compare' => 'LIKE'
        )
      )
    );
  $custom_query = new WP_Query( $custom_args ); ?>
  <?php if ( $custom_query->have_posts() ) : ?>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingOne">
      <a role="button" data-toggle="collapse" data-parent="#OscarMovies" href="#tadvin" aria-expanded="false" aria-controls="tadvin">
        <h4 class="panel-title">
        نامزدهای بهترین تدوین
        <span class="itemicon"></span>
        </h4>
      </a>
    </div>
    <div id="tadvin" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
      <div class="panel-body">
        <ul>
        <?php while ( $custom_query->have_posts()) : $custom_query->the_post(); ?>
          <?php if(in_array('2003', get_field('medalyears') )) : ?>
          <li>
            <div class="picture">
              <a href="<?php the_permalink(); ?>" title="<?php the_field('title'); ?>">
               <img src="<?php the_field('img'); ?>" alt="<?php the_field('title'); ?>"> 
              </a>
            </div>
            <div class="items">
            <?php if(in_array('tadvin', get_field('oscarwon') )) : ?>
              <h4>
              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 100 100" enable-background="new 0 0 100 100" fill="#BBA36C" xml:space="preserve"><g><path d="M39,83.5h22v-7H39V83.5z M41,78.5h18v3H41V78.5z"/><path d="M71,86.5h-5v-15h-2.5v-5h-9.931L55.936,31H58.5V16.877l-6.008-2.955l1.008-1.008V4h-7v8.914l1.008,1.008L41.5,16.877v14.51   l2.533-0.845L46.431,66.5H36.5v5H34v15h-5v7h42V86.5z M51.564,66.5H51V31h2.931L51.564,66.5z M48.5,6h3v6.086l-1.5,1.5l-1.5-1.5V6z    M43.5,28.613v-10.49l5.502-2.706L50,16.414l0.998-0.998l5.502,2.706V29H51v-0.779v-0.103l4.447-2.224l-0.895-1.789L51,25.882V24   h-6v2h4v0.779L43.5,28.613z M45.998,29.934l-0.171,0.011L49,28.887V30v1v35.5h-0.564L45.998,29.934z M38.5,68.5h23v3h-23V68.5z    M36,73.5h0.5h27H64v13H36V73.5z M69,91.5H31v-3h3h32h3V91.5z"/></g></svg>
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
            'key' => 'oscar', // name of custom field
            'value' => '"bestjelve"', // matches exactly "red"
            'compare' => 'LIKE'
        )
      )
    );
  $custom_query = new WP_Query( $custom_args ); ?>
  <?php if ( $custom_query->have_posts() ) : ?>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingOne">
      <a role="button" data-toggle="collapse" data-parent="#OscarMovies" href="#bestjelve" aria-expanded="false" aria-controls="bestjelve">
        <h4 class="panel-title">
        نامزدهای بهترین جلوه های ویژه
        <span class="itemicon"></span>
        </h4>
      </a>
    </div>
    <div id="bestjelve" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
      <div class="panel-body">
        <ul>
        <?php while ( $custom_query->have_posts()) : $custom_query->the_post(); ?>
          <?php if(in_array('2003', get_field('medalyears') )) : ?>
          <li>
            <div class="picture">
              <a href="<?php the_permalink(); ?>" title="<?php the_field('title'); ?>">
               <img src="<?php the_field('img'); ?>" alt="<?php the_field('title'); ?>"> 
              </a>
            </div>
            <div class="items">
            <?php if(in_array('bestjelve', get_field('oscarwon') )) : ?>
              <h4>
              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 100 100" enable-background="new 0 0 100 100" fill="#BBA36C" xml:space="preserve"><g><path d="M39,83.5h22v-7H39V83.5z M41,78.5h18v3H41V78.5z"/><path d="M71,86.5h-5v-15h-2.5v-5h-9.931L55.936,31H58.5V16.877l-6.008-2.955l1.008-1.008V4h-7v8.914l1.008,1.008L41.5,16.877v14.51   l2.533-0.845L46.431,66.5H36.5v5H34v15h-5v7h42V86.5z M51.564,66.5H51V31h2.931L51.564,66.5z M48.5,6h3v6.086l-1.5,1.5l-1.5-1.5V6z    M43.5,28.613v-10.49l5.502-2.706L50,16.414l0.998-0.998l5.502,2.706V29H51v-0.779v-0.103l4.447-2.224l-0.895-1.789L51,25.882V24   h-6v2h4v0.779L43.5,28.613z M45.998,29.934l-0.171,0.011L49,28.887V30v1v35.5h-0.564L45.998,29.934z M38.5,68.5h23v3h-23V68.5z    M36,73.5h0.5h27H64v13H36V73.5z M69,91.5H31v-3h3h32h3V91.5z"/></g></svg>
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
            'key' => 'oscar', // name of custom field
            'value' => '"greem"', // matches exactly "red"
            'compare' => 'LIKE'
        )
      )
    );
  $custom_query = new WP_Query( $custom_args ); ?>
  <?php if ( $custom_query->have_posts() ) : ?>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingOne">
      <a role="button" data-toggle="collapse" data-parent="#OscarMovies" href="#bestgreem" aria-expanded="false" aria-controls="bestgreem">
        <h4 class="panel-title">
        نامزدهای بهترین چهره پردازی
        <span class="itemicon"></span>
        </h4>
      </a>
    </div>
    <div id="bestgreem" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
      <div class="panel-body">
        <ul>
        <?php while ( $custom_query->have_posts()) : $custom_query->the_post(); ?>
          <?php if(in_array('2003', get_field('medalyears') )) : ?>
          <li>
            <div class="picture">
              <a href="<?php the_permalink(); ?>" title="<?php the_field('title'); ?>">
               <img src="<?php the_field('img'); ?>" alt="<?php the_field('title'); ?>"> 
              </a>
            </div>
            <div class="items">
            <?php if(in_array('greem', get_field('oscarwon') )) : ?>
              <h4>
              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 100 100" enable-background="new 0 0 100 100" fill="#BBA36C" xml:space="preserve"><g><path d="M39,83.5h22v-7H39V83.5z M41,78.5h18v3H41V78.5z"/><path d="M71,86.5h-5v-15h-2.5v-5h-9.931L55.936,31H58.5V16.877l-6.008-2.955l1.008-1.008V4h-7v8.914l1.008,1.008L41.5,16.877v14.51   l2.533-0.845L46.431,66.5H36.5v5H34v15h-5v7h42V86.5z M51.564,66.5H51V31h2.931L51.564,66.5z M48.5,6h3v6.086l-1.5,1.5l-1.5-1.5V6z    M43.5,28.613v-10.49l5.502-2.706L50,16.414l0.998-0.998l5.502,2.706V29H51v-0.779v-0.103l4.447-2.224l-0.895-1.789L51,25.882V24   h-6v2h4v0.779L43.5,28.613z M45.998,29.934l-0.171,0.011L49,28.887V30v1v35.5h-0.564L45.998,29.934z M38.5,68.5h23v3h-23V68.5z    M36,73.5h0.5h27H64v13H36V73.5z M69,91.5H31v-3h3h32h3V91.5z"/></g></svg>
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
            'key' => 'oscar', // name of custom field
            'value' => '"bestmusic"', // matches exactly "red"
            'compare' => 'LIKE'
        )
      )
    );
  $custom_query = new WP_Query( $custom_args ); ?>
  <?php if ( $custom_query->have_posts() ) : ?>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingOne">
      <a role="button" data-toggle="collapse" data-parent="#OscarMovies" href="#tarane" aria-expanded="false" aria-controls="tarane">
        <h4 class="panel-title">
        نامزدهای بهترین ترانه
        <span class="itemicon"></span>
        </h4>
      </a>
    </div>
    <div id="tarane" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
      <div class="panel-body">
        <ul>
        <?php while ( $custom_query->have_posts()) : $custom_query->the_post(); ?>
          <?php if(in_array('2003', get_field('medalyears') )) : ?>
          <li>
            <div class="picture">
              <a href="<?php the_permalink(); ?>" title="<?php the_field('title'); ?>">
               <img src="<?php the_field('img'); ?>" alt="<?php the_field('title'); ?>"> 
              </a>
            </div>
            <div class="items">
            <?php if(in_array('bestmusic', get_field('oscarwon') )) : ?>
              <h4>
              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 100 100" enable-background="new 0 0 100 100" fill="#BBA36C" xml:space="preserve"><g><path d="M39,83.5h22v-7H39V83.5z M41,78.5h18v3H41V78.5z"/><path d="M71,86.5h-5v-15h-2.5v-5h-9.931L55.936,31H58.5V16.877l-6.008-2.955l1.008-1.008V4h-7v8.914l1.008,1.008L41.5,16.877v14.51   l2.533-0.845L46.431,66.5H36.5v5H34v15h-5v7h42V86.5z M51.564,66.5H51V31h2.931L51.564,66.5z M48.5,6h3v6.086l-1.5,1.5l-1.5-1.5V6z    M43.5,28.613v-10.49l5.502-2.706L50,16.414l0.998-0.998l5.502,2.706V29H51v-0.779v-0.103l4.447-2.224l-0.895-1.789L51,25.882V24   h-6v2h4v0.779L43.5,28.613z M45.998,29.934l-0.171,0.011L49,28.887V30v1v35.5h-0.564L45.998,29.934z M38.5,68.5h23v3h-23V68.5z    M36,73.5h0.5h27H64v13H36V73.5z M69,91.5H31v-3h3h32h3V91.5z"/></g></svg>
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
            'key' => 'oscar', // name of custom field
            'value' => '"bestmozik"', // matches exactly "red"
            'compare' => 'LIKE'
        )
      )
    );
  $custom_query = new WP_Query( $custom_args ); ?>
  <?php if ( $custom_query->have_posts() ) : ?>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingOne">
      <a role="button" data-toggle="collapse" data-parent="#OscarMovies" href="#mozikmatn" aria-expanded="false" aria-controls="mozikmatn">
        <h4 class="panel-title">
        نامزدهای بهترین موسیقی متن
        <span class="itemicon"></span>
        </h4>
      </a>
    </div>
    <div id="mozikmatn" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
      <div class="panel-body">
        <ul>
        <?php while ( $custom_query->have_posts()) : $custom_query->the_post(); ?>
          <?php if(in_array('2003', get_field('medalyears') )) : ?>
          <li>
            <div class="picture">
              <a href="<?php the_permalink(); ?>" title="<?php the_field('title'); ?>">
               <img src="<?php the_field('img'); ?>" alt="<?php the_field('title'); ?>"> 
              </a>
            </div>
            <div class="items">
            <?php if(in_array('bestmozik', get_field('oscarwon') )) : ?>
              <h4>
              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 100 100" enable-background="new 0 0 100 100" fill="#BBA36C" xml:space="preserve"><g><path d="M39,83.5h22v-7H39V83.5z M41,78.5h18v3H41V78.5z"/><path d="M71,86.5h-5v-15h-2.5v-5h-9.931L55.936,31H58.5V16.877l-6.008-2.955l1.008-1.008V4h-7v8.914l1.008,1.008L41.5,16.877v14.51   l2.533-0.845L46.431,66.5H36.5v5H34v15h-5v7h42V86.5z M51.564,66.5H51V31h2.931L51.564,66.5z M48.5,6h3v6.086l-1.5,1.5l-1.5-1.5V6z    M43.5,28.613v-10.49l5.502-2.706L50,16.414l0.998-0.998l5.502,2.706V29H51v-0.779v-0.103l4.447-2.224l-0.895-1.789L51,25.882V24   h-6v2h4v0.779L43.5,28.613z M45.998,29.934l-0.171,0.011L49,28.887V30v1v35.5h-0.564L45.998,29.934z M38.5,68.5h23v3h-23V68.5z    M36,73.5h0.5h27H64v13H36V73.5z M69,91.5H31v-3h3h32h3V91.5z"/></g></svg>
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
            'key' => 'oscar', // name of custom field
            'value' => '"shotanim"', // matches exactly "red"
            'compare' => 'LIKE'
        )
      )
    );
  $custom_query = new WP_Query( $custom_args ); ?>
  <?php if ( $custom_query->have_posts() ) : ?>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingOne">
      <a role="button" data-toggle="collapse" data-parent="#OscarMovies" href="#shortanimation" aria-expanded="false" aria-controls="shortanimation">
        <h4 class="panel-title">
        نامزدهای بهترین انیمیشن کوتاه
        <span class="itemicon"></span>
        </h4>
      </a>
    </div>
    <div id="shortanimation" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
      <div class="panel-body">
        <ul>
        <?php while ( $custom_query->have_posts()) : $custom_query->the_post(); ?>
          <?php if(in_array('2003', get_field('medalyears') )) : ?>
          <li>
            <div class="picture">
              <a href="<?php the_permalink(); ?>" title="<?php the_field('title'); ?>">
               <img src="<?php the_field('img'); ?>" alt="<?php the_field('title'); ?>"> 
              </a>
            </div>
            <div class="items">
            <?php if(in_array('shotanim', get_field('oscarwon') )) : ?>
              <h4>
              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 100 100" enable-background="new 0 0 100 100" fill="#BBA36C" xml:space="preserve"><g><path d="M39,83.5h22v-7H39V83.5z M41,78.5h18v3H41V78.5z"/><path d="M71,86.5h-5v-15h-2.5v-5h-9.931L55.936,31H58.5V16.877l-6.008-2.955l1.008-1.008V4h-7v8.914l1.008,1.008L41.5,16.877v14.51   l2.533-0.845L46.431,66.5H36.5v5H34v15h-5v7h42V86.5z M51.564,66.5H51V31h2.931L51.564,66.5z M48.5,6h3v6.086l-1.5,1.5l-1.5-1.5V6z    M43.5,28.613v-10.49l5.502-2.706L50,16.414l0.998-0.998l5.502,2.706V29H51v-0.779v-0.103l4.447-2.224l-0.895-1.789L51,25.882V24   h-6v2h4v0.779L43.5,28.613z M45.998,29.934l-0.171,0.011L49,28.887V30v1v35.5h-0.564L45.998,29.934z M38.5,68.5h23v3h-23V68.5z    M36,73.5h0.5h27H64v13H36V73.5z M69,91.5H31v-3h3h32h3V91.5z"/></g></svg>
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
            'key' => 'oscar', // name of custom field
            'value' => '"nonenglish"', // matches exactly "red"
            'compare' => 'LIKE'
        )
      )
    );
  $custom_query = new WP_Query( $custom_args ); ?>
  <?php if ( $custom_query->have_posts() ) : ?>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingOne">
      <a role="button" data-toggle="collapse" data-parent="#OscarMovies" href="#nonenglish" aria-expanded="false" aria-controls="nonenglish">
        <h4 class="panel-title">
        نامزدهای بهترین فیلم غیر انگلیسی زبان
        <span class="itemicon"></span>
        </h4>
      </a>
    </div>
    <div id="nonenglish" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
      <div class="panel-body">
        <ul>
        <?php while ( $custom_query->have_posts()) : $custom_query->the_post(); ?>
          <?php if(in_array('2003', get_field('medalyears') )) : ?>
          <li>
            <div class="picture">
              <a href="<?php the_permalink(); ?>" title="<?php the_field('title'); ?>">
               <img src="<?php the_field('img'); ?>" alt="<?php the_field('title'); ?>"> 
              </a>
            </div>
            <div class="items">
            <?php if(in_array('nonenglish', get_field('oscarwon') )) : ?>
              <h4>
              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 100 100" enable-background="new 0 0 100 100" fill="#BBA36C" xml:space="preserve"><g><path d="M39,83.5h22v-7H39V83.5z M41,78.5h18v3H41V78.5z"/><path d="M71,86.5h-5v-15h-2.5v-5h-9.931L55.936,31H58.5V16.877l-6.008-2.955l1.008-1.008V4h-7v8.914l1.008,1.008L41.5,16.877v14.51   l2.533-0.845L46.431,66.5H36.5v5H34v15h-5v7h42V86.5z M51.564,66.5H51V31h2.931L51.564,66.5z M48.5,6h3v6.086l-1.5,1.5l-1.5-1.5V6z    M43.5,28.613v-10.49l5.502-2.706L50,16.414l0.998-0.998l5.502,2.706V29H51v-0.779v-0.103l4.447-2.224l-0.895-1.789L51,25.882V24   h-6v2h4v0.779L43.5,28.613z M45.998,29.934l-0.171,0.011L49,28.887V30v1v35.5h-0.564L45.998,29.934z M38.5,68.5h23v3h-23V68.5z    M36,73.5h0.5h27H64v13H36V73.5z M69,91.5H31v-3h3h32h3V91.5z"/></g></svg>
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
            'key' => 'oscar', // name of custom field
            'value' => '"bestanimation"', // matches exactly "red"
            'compare' => 'LIKE'
        )
      )
    );
  $custom_query = new WP_Query( $custom_args ); ?>
  <?php if ( $custom_query->have_posts() ) : ?>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingOne">
      <a role="button" data-toggle="collapse" data-parent="#OscarMovies" href="#bestanimation" aria-expanded="false" aria-controls="bestanimation">
        <h4 class="panel-title">
        نامزدهای بهترین انیمیشن
        <span class="itemicon"></span>
        </h4>
      </a>
    </div>
    <div id="bestanimation" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
      <div class="panel-body">
        <ul>
        <?php while ( $custom_query->have_posts()) : $custom_query->the_post(); ?>
          <?php if(in_array('2003', get_field('medalyears') )) : ?>
          <li>
            <div class="picture">
              <a href="<?php the_permalink(); ?>" title="<?php the_field('title'); ?>">
               <img src="<?php the_field('img'); ?>" alt="<?php the_field('title'); ?>"> 
              </a>
            </div>
            <div class="items">
            <?php if(in_array('bestanimation', get_field('oscarwon') )) : ?>
              <h4>
              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 100 100" enable-background="new 0 0 100 100" fill="#BBA36C" xml:space="preserve"><g><path d="M39,83.5h22v-7H39V83.5z M41,78.5h18v3H41V78.5z"/><path d="M71,86.5h-5v-15h-2.5v-5h-9.931L55.936,31H58.5V16.877l-6.008-2.955l1.008-1.008V4h-7v8.914l1.008,1.008L41.5,16.877v14.51   l2.533-0.845L46.431,66.5H36.5v5H34v15h-5v7h42V86.5z M51.564,66.5H51V31h2.931L51.564,66.5z M48.5,6h3v6.086l-1.5,1.5l-1.5-1.5V6z    M43.5,28.613v-10.49l5.502-2.706L50,16.414l0.998-0.998l5.502,2.706V29H51v-0.779v-0.103l4.447-2.224l-0.895-1.789L51,25.882V24   h-6v2h4v0.779L43.5,28.613z M45.998,29.934l-0.171,0.011L49,28.887V30v1v35.5h-0.564L45.998,29.934z M38.5,68.5h23v3h-23V68.5z    M36,73.5h0.5h27H64v13H36V73.5z M69,91.5H31v-3h3h32h3V91.5z"/></g></svg>
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
            'key' => 'oscar', // name of custom field
            'value' => '"artdirector"', // matches exactly "red"
            'compare' => 'LIKE'
        )
      )
    );
  $custom_query = new WP_Query( $custom_args ); ?>
  <?php if ( $custom_query->have_posts() ) : ?>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingOne">
      <a role="button" data-toggle="collapse" data-parent="#OscarMovies" href="#artdirector" aria-expanded="false" aria-controls="artdirector">
        <h4 class="panel-title">
        نامزدهای بهترین کارگردانی هنری
        <span class="itemicon"></span>
        </h4>
      </a>
    </div>
    <div id="artdirector" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
      <div class="panel-body">
        <ul>
        <?php while ( $custom_query->have_posts()) : $custom_query->the_post(); ?>
          <?php if(in_array('2003', get_field('medalyears') )) : ?>
          <li>
            <div class="picture">
              <a href="<?php the_permalink(); ?>" title="<?php the_field('title'); ?>">
               <img src="<?php the_field('img'); ?>" alt="<?php the_field('title'); ?>"> 
              </a>
            </div>
            <div class="items">
            <?php if(in_array('artdirectorbest', get_field('oscarwon') )) : ?>
              <h4>
              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 100 100" enable-background="new 0 0 100 100" fill="#BBA36C" xml:space="preserve"><g><path d="M39,83.5h22v-7H39V83.5z M41,78.5h18v3H41V78.5z"/><path d="M71,86.5h-5v-15h-2.5v-5h-9.931L55.936,31H58.5V16.877l-6.008-2.955l1.008-1.008V4h-7v8.914l1.008,1.008L41.5,16.877v14.51   l2.533-0.845L46.431,66.5H36.5v5H34v15h-5v7h42V86.5z M51.564,66.5H51V31h2.931L51.564,66.5z M48.5,6h3v6.086l-1.5,1.5l-1.5-1.5V6z    M43.5,28.613v-10.49l5.502-2.706L50,16.414l0.998-0.998l5.502,2.706V29H51v-0.779v-0.103l4.447-2.224l-0.895-1.789L51,25.882V24   h-6v2h4v0.779L43.5,28.613z M45.998,29.934l-0.171,0.011L49,28.887V30v1v35.5h-0.564L45.998,29.934z M38.5,68.5h23v3h-23V68.5z    M36,73.5h0.5h27H64v13H36V73.5z M69,91.5H31v-3h3h32h3V91.5z"/></g></svg>
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