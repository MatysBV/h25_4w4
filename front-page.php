<?php get_header(); ?>
<!--  -->
<!--  -->
<!-- <h1>------------------ FRONT-PAGE.PHP ------------------</h1> -->
<!--  -->
<?php $hero_background = get_theme_mod('hero_background', ''); ?>
<?php $hero_couleur = get_theme_mod('hero_couleur', ''); ?>


<section class="hero" style=" background-image: url(<?php echo $hero_background?>); color : <?php echo $hero_couleur ?>">  
    <div class="hero__contenu global">
    <?php get_template_part('gabarit/hero'); ?>
        <button class="hero__inscrire">S'INSCRIRE</button>
        <div class="hero__icone">
        <?php get_template_part('gabarit/icones'); ?>
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
<!-- section rest api -->
<section class="destination">
    <h2 class="destination__titre">Articles de la catégorie</h2>
    <div class="destination__list"></div>
</section>
<footer></footer>
<?php get_footer(); ?>
</body>

</html>