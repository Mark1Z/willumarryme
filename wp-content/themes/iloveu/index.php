<?php
/**
 * Index template
 */
?>
<?php get_header(); ?>
<div class="container">
    <?php
    $pageIndex = (get_query_var('paged')) ? get_query_var('paged') : 1;
    $progress = round(($pageIndex / wp_count_posts('post')->publish) * 100);
    ?>
    <div class="progress">
        <div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar"
             aria-valuenow="<?php echo $progress; ?>" aria-valuemin="0" aria-valuemax="100"
             style="width: <?php echo $progress; ?>%">
        </div>
    </div>
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
        <div class="navigation">
            <?php previous_posts_link('Назад'); ?>
            <?php next_posts_link('Вперед'); ?>
        </div>
        <?php endif; ?>
</div>
<?php get_footer(); ?>
