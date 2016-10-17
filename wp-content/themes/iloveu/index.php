<?php
/**
 * Index template
 */
?>
<?php get_header(); ?>
<div class="container">
    <?php
    $args = [
        'posts_per_page' => 1,
        'post_type' => 'post',
        'paged' => (get_query_var('paged')) ? get_query_var('paged') : 1,
        'orderby' => 'menu_order',
        'order' => 'ASC',
    ];
    $query = new WP_Query($args);

    if ($query->have_posts()) :
        while ($query->have_posts()) :
            $query->the_post();
            ?>
            <div class="redactor-content">
                <?php the_content(); ?>
            </div>
            <?php
        endwhile;
        wp_reset_postdata();
        ?>
        <?php
    endif;
    ?>
</div>
<?php get_footer(); ?>
