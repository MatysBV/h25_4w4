<?php get_header(); ?>
<!--  -->
<!--  -->
<!-- <h1>------------------ FRONT-PAGE.PHP ------------------</h1> -->
<!--  -->
<section class="hero">
    <div class="hero__contenu global">
        <h1 class="hero__titre"><?php bloginfo( 'name' ); ?></h1>
        <p class="hero__description">
        <?php bloginfo( 'description' ); ?>
        </p>
        <p class="hero__courriel">
        <?php bloginfo( 'admin_email' ); ?>
        </p>
        <p class="hero__adresse">
            5800 Sherbrooke-est - Montréal (Québec) H1X 2A2
        </p>
        <button class="hero__inscrire">S'INSCRIRE</button>
        <div class="hero__icone">
            <img src="https://s2.svgbox.net/social.svg?ic=facebook&color=000000" width="20" height="20">
            <img src="https://s2.svgbox.net/social.svg?ic=linkedin&color=000000" width="20" height="20">
            <img src="https://s2.svgbox.net/social.svg?ic=stackoverflow&color=000000" width="20" height="20">
            <img src="https://s2.svgbox.net/social.svg?ic=snapchat&color=000000" width="20" height="20">
        </div>
    </div>

</section>
<main>
    <div class="formulaire">
        <form class="formulaire__form">
            <div class="formulaire__nom">
                <p class="formulaire__titre">Nom</p>
                <input type="text" class="formulaire__input" placeholder="Écrivez votre Prénom">
            </div>
            <div class="formulaire__nom">
                <p class="formulaire__titre">Prénom</p>
                <input type="text" class="formulaire__input" placeholder="Écrivez votre Nom">
            </div>
            <div class="formulaire__nom">
                <p class="formulaire__titre">Courriel</p>
                <input type="text" class="formulaire__input" placeholder="Écrivez votre Courriel">
            </div>
            <div class="formulaire__nom">
                <p class="formulaire__titre">Téléphone</p>
                <input type="text" class="formulaire__input" placeholder="Écrivez votre Téléphone">
            </div>
            <div class="formulaire__nom">
                <button class="formulaire__inscrireForm">S'INSCRIRE</button>
            </div>
        </form>
    </div>

        <h4 class="galerie__destinationFav">Nos destinations favorites</h4>


</main>
<section class="populaire">
    <div class="global">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <?php if (in_category("Galerie")) {
                    the_content();
                } else { ?>
                    <?php get_template_part('gabarit/carte'); ?>
                <?php }; ?>
        <?php endwhile;
        endif; ?>
    </div>
</section>
<footer></footer>
<?php get_footer(); ?>
</body>

</html>