<?php
/**
 * Index template
 */
?>
<?php get_header(); ?>
<div class="container">
    <?php if (have_posts()) :
        while (have_posts()) :
            the_post();
            ?>
            <div class="redactor-content">
                <?php the_content(); ?>
            </div>
            <?php
        endwhile;
        ?>
        <?php
    endif;
    ?>
</div>
<?php get_footer(); ?>
