<?php get_header(); ?>

<?php $section_404_background = get_theme_mod('404_background', ''); ?>
<?php $section_404_couleur = get_theme_mod('404_couleur', ''); ?>



<section class="section_404" style=" background-image: url(<?php echo $section_404_background ?>); color : <?php echo $section_404_couleur ?>">
    <div class="section_404_texte">
        <?php get_template_part('gabarit/error404'); ?>

        <p><a href="<?php echo get_home_url(); ?>" class="error404__RetourMenu">Retourner à l'accueil</a></p>
    </div>

    <div class="menu-404error">
        <?php wp_nav_menu(array(
            "menu" => "404 error",
            "container" => "nav",
        )); ?>
    </div>

    <div class="section_404__icone">
        <?php get_template_part('gabarit/icones'); ?>
    </div>

</section>

<?php get_footer(); ?>