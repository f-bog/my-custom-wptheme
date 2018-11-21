<?php get_header(); ?>
<div class="hero">
  <div class="hero-content">

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <h1 class="animated fadeInUp"><?php the_title(); ?></h1>
    </div>
</div>
<section class="the-content">
<?php the_content(); ?>
<?php endwhile;
else : ?>

    <h1 class="animated fadeInUp"><?php esc_html_e('Sorry, no posts matched your criteria.') ?></h1>
    </div>
</div>
<section class="the-content">
<p><?php esc_html_e('Nothing to see here!'); ?></p>
<?php endif; ?>

</section>



<?php get_footer(); ?>