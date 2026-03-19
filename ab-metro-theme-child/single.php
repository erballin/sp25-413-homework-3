<!-- Requirements: single.php — a copy of the parent's single.php placed in the child theme folder and modified with a different layout. Because WordPress checks the child theme first, it will automatically use this version instead of the parent's. The layout must be visually distinct from the parent version
-->

<?php
/*
Template Name: Single
*/
?>

<?php get_header(); ?>


<?php
// LOOP
while (have_posts()) : the_post();
?>
  <article <?php post_class(); ?>>

    <!-- Featured image -->
    <?php if (has_post_thumbnail()) : ?>
      <div class="post-image">
        <?php the_post_thumbnail('large'); ?>
      </div>
    <?php endif; ?>

    <!-- Title -->
    <h1><?php the_title(); ?></h1>

    <!-- Content -->
    <div class="content">
      <?php the_content(); ?>
    </div>

    <!-- Author and Date -->
    <p class="date">
      Posted by <?php the_author(); ?> on <?php the_date(); ?>
    </p>

  </article>

<?php endwhile; ?>

<?php get_footer(); ?>