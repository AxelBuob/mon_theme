<?php get_header(); ?>

<?php if (have_posts()): ?>
    <div class="row">
        <?php while(have_posts()): the_post(); ?>
            <div class="col-sm-4">
                <div class="card">
                    <?php the_post_thumbnail('post-thumbnail-small', ['class' => 'card-img-top', 'alt' => 'Card image', 'style' => 'height: auto']); ?>
                    <div class="card-body">
                        <h5 class="card-title"><?php the_title()?></h5>
                        <h6 class="card-subtitle mb-2 text-muted"><?php the_category(); ?></h6>
                        <p class="card-text"><?php the_content('Lire la suite'); ?></p>
                    </div>
                </div>
            </div>
        <?php endwhile; ?> 
    </div>
<?php else: ?>
    <h1>Pas d'articles</h1>
<?php endif; ?>

<?php get_footer(); ?>