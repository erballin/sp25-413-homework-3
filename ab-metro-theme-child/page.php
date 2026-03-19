<!-- Requirements: page.php — a copy of the parent's page.php placed in the child theme folder and modified. Must have a different layout or structure compared to the parent's version -->

<?php get_header(); ?>

<main>
  <?php
  // PAGE LOOP
  while (have_posts()) : the_post();
  ?>
    <div class="page-wrapper">

      <!-- Featured Image -->
      <?php if (has_post_thumbnail()) : ?>
        <div class="page-image">
          <?php the_post_thumbnail('large'); ?>
        </div>
      <?php endif; ?>

      <article <?php post_class(); ?>>

        <!-- Header -->
        <header class="page-header">
          <h1><?php the_title(); ?></h1>
        </header>

        <!-- Content and sidebar -->
        <div class="page-content-layout">

          <section class="content">
            <?php the_content(); ?>
          </section>

          <aside class="sidebar">
            <?php get_sidebar(); ?>
          </aside>

        </div>

      </article>

    </div>

  <?php endwhile; ?>

</main>

<?php get_footer(); ?>