<?php get_header(); ?>

<?php if ( have_posts() ): ?>
    <?php while( have_posts()  ) : the_post(); ?>
        <div>
            <img src="<?php the_post_thumbnail_url(); ?>" alt="Post image" style="width: 100%; height:auto">
        </div>
        <h1><?php the_title(); ?> </h1>
        <p><?php the_content(); ?></p>
    <?php endwhile; ?> 
<?php else: ?>
    <h1>Pas d'articles</h1>
<?php endif; ?>

<?php get_footer(); ?>