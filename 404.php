<div class="img-Error404-Background">
    <img src="" alt="" srcset="">
</div>

<div class="erreur-404">
    <h1>404</h1>
    <p> OOPS! PAGE NOT FOUND</p>
    <?php get_search_form(); ?>
    <div class="error404__icone"><?php get_template_part('gabarit/icones'); ?></div>
    <p><a href="<?php echo get_home_url(); ?>" class="error404__menu">Retourner à l'accueil</a></p>
    <div class="error404__reportBug">
        <button class="error404__bug">Report a bug</button>
    </div>
</div>