<?php $hero_auteur = get_theme_mod('hero_auteur', 'Matys Voisin'); ?>
<?php $hero_couleur = get_theme_mod('hero_couleur', ''); ?>

<?php
for ($k = 0; $k < 3; $k++) {
    $hero_background[$k] = get_theme_mod('hero_background_' . $k,  '');
}
?>

<section class="hero">

    <div class="hero__carrousel" style="background-image: url(<?php echo $hero_background[0]; ?>);"></div>
    <div class="hero__carrousel" style="background-image: url(<?php echo $hero_background[1]; ?>);"></div>
    <div class="hero__carrousel" style="background-image: url(<?php echo $hero_background[2]; ?>);"></div>

    <div class="hero__contenu global">

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

        <button class="hero__inscrire">S'INSCRIRE</button>
        <div class="hero__icone">
            <?php get_template_part('gabarit/icones'); ?>
        </div>
    </div>

    <div class="hero__radio">
        <input type="radio" name="carrousel" id="">
        <input type="radio" name="carrousel" id="">
        <input type="radio" name="carrousel" id="">
    </div>

</section>