<?php $hero_auteur = get_theme_mod('hero_auteur', 'Matys Voisin'); ?>
<?php $hero_couleur = get_theme_mod('hero_couleur', ''); ?>
<?php $NombreImagesCaroussel =  get_theme_mod("hero_nombre_images_caroussel", "1"); ?>

<?php
for ($k = 0; $k < 3; $k++) {
    $hero_background[$k] = get_theme_mod('hero_background_' . $k,  '');
}


// ICONES DES RESEAUX SOCIAUX 

// Déclarations des variables qui contient les données venant du customizer
$hero_couleur_icones = get_theme_mod('hero_icones', 'ffffff');

$hero_nb_icones = get_theme_mod('hero_nb_icones', 1);
for ($k = 0; $k < $hero_nb_icones; $k++) {
    $hero_icones[$k] = get_theme_mod('hero_icones_' . $k, 'wordpress');
}
 
for ($k = 0; $k < $hero_nb_icones; $k++) {
    $hero_lien_reseaux[$k] = get_theme_mod('hero_lien_reseaux_' . $k, 'https://github.com/MatysBV/h25_4w4');
}
?>

<!-- affiche dynamiquement les images du caroussel -->
<section class="hero" style=" color : <?php echo $hero_couleur ?>;">
    <?php
    $NombreImagesCaroussel =  get_theme_mod("hero_nombre_images_caroussel", "1");

    for ($k = 0; $k < $NombreImagesCaroussel; $k++) {
    ?>
        <div class="hero__caroussel" style="background-image: url(<?php echo $hero_background[$k]; ?>);"></div>

    <?php
    }

    ?>

    <!-- affiche dynamiquement les boutons radio -->
    <div class="hero__radio">

        <?php
        for ($k = 0; $k < $NombreImagesCaroussel; $k++) {
            if ($k == 0) {
        ?>

                <input class="hero__radio__input" data-id_radio="<?php echo $k; ?>" type="radio" name="carrousel" checked>

            <?php } else { ?>
                <input class="hero__radio__input" data-id_radio="<?php echo $k; ?>" type="radio" name="carrousel">
            <?php } ?>

        <?php } ?>
    </div>

    <div class="hero__contenu global">

        <div class="hero__animation hero__animation--active">
            <h1 class="hero__titre"><?php bloginfo('name'); ?></h1>
            <p class="hero__description"><?php bloginfo('description'); ?></p>
        </div>

        <div class="hero__animation">
            <h1 class="hero__titre">Des voyages sur mesure qui transforment vos rêves en réalité.</h1>
            <p class="hero__description"><?php bloginfo('description'); ?></p>
        </div>

        <div class="hero__animation">
            <h1 class="hero__titre"><?php bloginfo('name'); ?></h1>
            <p class="hero__description"><?php bloginfo('description'); ?></p>
        </div>
        
        <p class="hero__auteur">
            <?php echo $hero_auteur; ?>
        </p>
        <p class="hero__courriel">
            <?php bloginfo('admin_email'); ?>
        </p>
        <p class="hero__adresse">
            5800 Sherbrooke-est - Montréal (Québec) H1X 2A2
        </p>

        <button class="hero__inscrire">S'INSCRIRE</button>
        <div class="hero__icone">
            <?php for ($k = 0; $k < $hero_nb_icones; $k++) {
                echo genere_icone($hero_icones[$k], $hero_lien_reseaux[$k], $hero_couleur_icones);
            }; ?>
        </div>
    </div>

</section>