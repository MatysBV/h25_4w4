<?php $hero_auteur = get_theme_mod('hero_auteur', 'Matys Voisin'); ?>


<h1 class="hero__titre"><?php bloginfo('name'); ?></h1>
<p class="hero__auteur">
    <?php echo $hero_auteur; ?>
</p>
<p class="hero__description">
    <?php bloginfo('description'); ?>
</p>
<p class="hero__courriel">
    <?php bloginfo('admin_email'); ?>
</p>
<p class="hero__adresse">
    5800 Sherbrooke-est - Montréal (Québec) H1X 2A2
</p>