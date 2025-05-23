<?php $couleurVagueRestPays = get_theme_mod('Vague-Template-Pays', '#aaa'); ?>

<?php
/*
Template Name: Template Événement
*/
get_header();
?>
 
<section class="populaire">
    <div class="global">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <article>
                    <h2><?php the_title(); ?></h2>
                    <div><?php the_content(); ?></div>
                </article>
        <?php endwhile;
        endif; ?>
    </div>
</section>


<!-- Générer la premiere vague -->

<?php genere_vague($couleurVagueRestPays); ?>
 
<!-- ////////////////////////////////////////////////////// Section Rest API -->
<section class="destination">
    <?php categories_liste("destination"); ?>
    <h2 class="destination__titre">Articles de la catégorie</h2>
    <div class="destination__list"></div>
</section>
<?php get_footer(); ?>