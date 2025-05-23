<?php $footer_adresse = get_theme_mod('footer_adresse', '5800 Sherbrooke-est Montréal (Québec) H1X 2A2'); ?>
<?php $footer_telephone = get_theme_mod('footer_telephone', '(514-254-7131)'); ?>
<?php $footer_mission = get_theme_mod('footer_mission', 'Notre mission est de faciliter vos recherche afin de découvrir les plus beaux endroit de la planète'); ?>
<?php $footer_couleur = get_theme_mod('footer_couleur', '#aaa'); ?>
<?php $footer_imgFoot = get_theme_mod('footer_imgFoot', ''); ?>


<?php genere_vague($footer_couleur); ?>


<?php
for ($k = 0; $k < 3; $k++) {
    $hero_background[$k] = get_theme_mod('hero_background_' . $k,  '');
}


// ICONES DES RESEAUX SOCIAUX 

// Déclarations des variables qui contient les données venant du customizer
$hero_couleur_icones = get_theme_mod('hero_couleur_icones', 'ffffff');

$hero_nb_icones = get_theme_mod('hero_nb_icones', 1);
for ($k = 0; $k < $hero_nb_icones; $k++) {
    $hero_icones[$k] = get_theme_mod('hero_icones_' . $k, 'wordpress');
}
 
for ($k = 0; $k < $hero_nb_icones; $k++) {
    $hero_lien_reseaux[$k] = get_theme_mod('hero_lien_reseaux_' . $k, 'https://github.com/MatysBV/h25_4w4');
}
?>



<footer style="background-color: <?= $footer_couleur ?>">

    <div class="piedpage">
        <section class="piedpage__s1">
            <div class="piedpage__s1__externe">
                <h3>Lien sur le voyage</h3>
                <?php wp_nav_menu(array(
                    "menu" => "externe",
                    "container" => "nav",
                )); ?>
            <div class="footer__icone"><?php for ($k = 0; $k < $hero_nb_icones; $k++) {
                echo genere_icone($hero_icones[$k], $hero_lien_reseaux[$k], $hero_couleur_icones);
            }; ?></div>
            </div>
            <div class="piedpage__s1__adresse">
                <div class="piedpage__s1__adresse__coord">
                <h3>Informations</h3>
                    <p class="footer_adresse"><?php echo $footer_adresse ?></p>
                    <p class="footer_telephone"><?php echo $footer_telephone ?></p>
                </div>
                <div class="piedpage__s1__adresse__recherche">
                <?php get_search_form(); ?>
                </div>
            </div>
            <div class="piedpage__s1__description">
            <h3>Notre mission</h3>
                <p class="footer_mission"><?php echo $footer_mission ?></p>
                <h6>Notre proposition du moment :</h6>
                <img class="piedpage__s1__description__img" src="<?php echo $footer_imgFoot; ?>" alt="">
            </div>
        </section>

        <section class="piedpage__s2"></section>
        <section class="piedpage__s3"></section>

    </div>
</footer>
<?php wp_footer(); ?>