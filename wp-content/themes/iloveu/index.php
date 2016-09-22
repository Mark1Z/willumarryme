<?php
/**
 * Index template
 */
?>
<?php get_header(); ?>
<?php
$pageIndex = (get_query_var('paged')) ? get_query_var('paged') : 1;
$progress = round(($pageIndex / wp_count_posts('post')->publish) * 100);
?>
<main class="main">
    <div class="container">
        <div class="progress">
            <div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar"
                 aria-valuenow="<?php echo $progress; ?>" aria-valuemin="0" aria-valuemax="100"
                 style="width: <?php echo $progress; ?>%">
            </div>
        </div>
        <?php if (have_posts()) :
            while (have_posts()) :
                the_post();
            endwhile;
//            the_posts_pagination([
//                'prev_text' => __('Назад', 'iloveu'),
//                'next_text' => __('Вперед', 'iloveu'),
//            ]);
            ?>
            <div class="navigation">
                <?php previous_posts_link('Назад'); ?>
                <?php next_posts_link('Вперед'); ?>
            </div>
            <?php
        endif;
        ?>
    </div>
</main>
<?php get_footer(); ?>
