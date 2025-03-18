<?php get_header(); ?>
<!--  -->
<!--  -->
<!-- <h1>------------------ CATEGORY.PHP ------------------</h1> -->
<!--  -->
<h1 class="titre-category"><?php single_cat_title(); ?></h1>
<div class="description-category">
<p><?php echo category_description(); ?></p>
</div>
<section class="populaire">
    <div class="global">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <?php get_template_part('gabarit/carte'); ?>
        <?php endwhile;
        endif; ?>
    </div>
</section>
<?php get_footer(); ?>
</body>

</html>