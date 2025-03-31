<?php get_header(); ?>

<?php $section_404_background = get_theme_mod('404_background', ''); ?>
<?php $section_404_couleur = get_theme_mod('404_couleur', ''); ?>



<section class="section_404" style=" background-image: url(<?php echo $section_404_background ?>); color : <?php echo $section_404_couleur ?>">
    <div class="">
        <?php get_template_part('gabarit/error404'); ?>
        <div class="section_404__icone">
            <?php get_template_part('gabarit/icones'); ?>
        </div>
    </div>

</section>

<?php get_footer(); ?>