<?php $footer_adresse = get_theme_mod('footer_adresse', '5800 Sherbrooke-est Montréal (Québec) H1X 2A2'); ?>
<?php $footer_telephone = get_theme_mod('footer_telephone', '(514-254-7131)'); ?>
<?php $footer_mission = get_theme_mod('footer_mission', 'Notre mission est de faciliter vos recherche afin de découvrir les plus beaux endroit de la planète'); ?>
<?php $footer_couleur = get_theme_mod('footer_couleur', '#aaa'); ?>
<?php $footer_imgFoot = get_theme_mod('footer_imgFoot', ''); ?>


<?php genere_vague($footer_couleur); ?>

<footer style="background-color: <?= $footer_couleur ?>">

    <div class="piedpage">
        <section class="piedpage__s1">
            <div class="piedpage__s1__externe">
                <h3>Lien sur le voyage</h3>
                <?php wp_nav_menu(array(
                    "menu" => "externe",
                    "container" => "nav",
                )); ?>
            <div class="footer__icone"><?php get_template_part('gabarit/icones'); ?></div>
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