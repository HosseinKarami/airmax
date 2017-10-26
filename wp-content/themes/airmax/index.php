<?php
/**
 * The main template file
 */
get_header(); ?>

<section class="moviespage">
  <div class="moviesItems">
    <ul class="allmovies">
    {% for post in paginator.posts %}
      <li><a href="{{post.url}}" title="{{post.title}}">
        <img src="{{site.url}}/{{post.img}}" width="153.22" height="227" alt="{{post.title}}">
        <h4>{{ post.title }}</h4>
        <h5>{{ post.engtitle }}</h5>
      </a></li>
    {% endfor %}
    </ul>
  </div>
  <div class="paginator">
    <div class="contents">
    {% if paginator.total_pages > 1 %}
      <ul>
      {% if paginator.previous_page %}
        <li>
          <a href="{{ paginator.previous_page_path | prepend: site.url}}">
            <svg fill="#f9f9f9" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                <path d="M8.59 16.34l4.58-4.59-4.58-4.59L10 5.75l6 6-6 6z"/>
                <path d="M0-.25h24v24H0z" fill="none"/>
            </svg>
          </a>
        </li>
        {% else %}
        <li class="disable">
          <svg fill="#f9f9f9" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
              <path d="M8.59 16.34l4.58-4.59-4.58-4.59L10 5.75l6 6-6 6z"/>
              <path d="M0-.25h24v24H0z" fill="none"/>
          </svg>
        </li>
        {% endif %}
        {% for page in (1..paginator.total_pages) %}
          {% if page == paginator.page %}
          <li class="current"><a href="">{{ page }}</a></li>
          {% elsif page == 1 %}
          <li><a href="{{site.url}}/movies">{{ page }}</a></li>
          {% else %}
          <li><a href="{{ site.paginate_path | prepend: site.url | replace: ':num', page }}">{{ page }}</a></li>
          {% endif %}
        {% endfor %}
        {% if paginator.next_page %}
        <li>
          <a href="{{ paginator.next_page_path | prepend: site.url}}">
            <svg fill="#f9f9f9" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                <path d="M15.41 16.09l-4.58-4.59 4.58-4.59L14 5.5l-6 6 6 6z"/>
                <path d="M0-.5h24v24H0z" fill="none"/>
            </svg>
          </a>
        </li>
        {% else %}
        <li class="disable">
          <svg fill="#f9f9f9" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
              <path d="M15.41 16.09l-4.58-4.59 4.58-4.59L14 5.5l-6 6 6 6z"/>
              <path d="M0-.5h24v24H0z" fill="none"/>
          </svg>
        </li>
        {% endif %}
<!--         <li class="doted"><svg fill="#f9f9f9" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 0h24v24H0z" fill="none"/>
            <path d="M6 10c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm12 0c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm-6 0c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z"/>
        </svg></li> -->
      </ul>
      {% endif %}
    </div>
  </div>
</section>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<?php if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
			<?php endif; ?>

			<?php
			// Start the loop.
			while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_format() );

			// End the loop.
			endwhile;

			// Previous/next page navigation.
			the_posts_pagination( array(
				'prev_text'          => __( 'Previous page', 'twentysixteen' ),
				'next_text'          => __( 'Next page', 'twentysixteen' ),
				'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentysixteen' ) . ' </span>',
			) );

		// If no content, include the "No posts found" template.
		else :
			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

		</main><!-- .site-main -->
	</div><!-- .content-area -->

<?php get_footer(); ?>
