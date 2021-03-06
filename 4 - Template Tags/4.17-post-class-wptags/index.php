<?php get_header(); ?>

  <div id="primary" class="content-area">

    <main id="main" class="site-main" role="main">

      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <article <?php post_class(); ?>>

          <header class="entry-header">

            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

          </header>

          <div class="entry-content">

            <?php the_content(); ?>

          </div>

        </article>

      <?php endwhile; endif; ?>

    </main>

  </div>

  <?php get_sidebar(); ?>

<?php get_footer(); ?>
