<svg class="waveFooter" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 200">
  <path fill="#fad8d0" fill-opacity="1">
    <animate attributeName="d" dur="6s" repeatCount="indefinite"
      values="
        M0,160L80,133.3C160,107,320,53,480,37.3C640,21,800,43,960,48C1120,53,1280,43,1360,37.3L1440,32L1440,320L0,320Z;
        M0,180L80,153.3C160,127,320,73,480,57.3C640,41,800,63,960,68C1120,73,1280,63,1360,57.3L1440,52L1440,320L0,320Z;
        M0,160L80,133.3C160,107,320,53,480,37.3C640,21,800,43,960,48C1120,53,1280,43,1360,37.3L1440,32L1440,320L0,320Z" />
  </path>
</svg>

<footer>

<?php $footer_adresse = get_theme_mod('footer_adresse', '5800 Sherbrooke-est Montréal (Québec) H1X 2A2'); ?>
<?php $footer_telephone = get_theme_mod('footer_telephone', '(514-254-7131)'); ?>
<?php $footer_mission = get_theme_mod('footer_mission', 'Notre mission est de faciliter vos recherche afin de découvrir les plus beaux endroit de la planète'); ?>


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
            </div>
        </section>

        <section class="piedpage__s2"></section>
        <section class="piedpage__s3"></section>

    </div>
</footer>
<?php wp_footer(); ?>