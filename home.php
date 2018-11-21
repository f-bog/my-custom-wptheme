<?php get_header(); ?>
<div class="hero">
    <div class="hero-content">
        <h1 class="animated fadeInUp"><?php single_post_title(); ?></h1>
    </div>
</div>
<section class="the-content">
    <div class="blog-content">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>


            <article class="post-listing">
                <p class="post-info">
                    By: <a href=""><?php the_author(); ?></a> 
                    Date: <a href="<?php echo get_year_link(''); ?>"><?php the_time('F j, Y'); ?></a>
                </p>
                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                <?php the_excerpt(); ?>
            </article>

        <?php endwhile;
        else : ?>

            <h3 class="animated fadeInUp"><?php esc_html_e('Sorry, no posts matched your criteria.') ?></h3>
        <p><?php esc_html_e('Nothing to see here!'); ?></p>
        <?php endif; ?>
    </div>
    <?php get_sidebar('blog'); ?>
</section>




<?php get_footer(); ?>