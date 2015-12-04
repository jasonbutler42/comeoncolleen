<?php get_header(); ?>

  <section class="section">
  <main role="main" itemprop="mainContentOfPage">

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

      <?php get_template_part( 'content', get_post_format() ); ?>

    <?php endwhile; else: get_template_part( 'content', 'none' ); endif; ?>

  </main>
  </section><!-- .section -->

  <?php get_sidebar(); ?>

<?php get_footer(); ?>