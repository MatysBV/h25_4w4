<?php
/*
Template Name: Template Événement
*/
get_header();
?>
 
 
<!-- ////////////////////////////////////////////////////// Section Rest API -->
<section class="destination">
    <?php categories_liste("destination"); ?>
    <h2 class="destination__titre">Articles de la catégorie</h2>
    <div class="destination__list"></div>
</section>
<?php get_footer(); ?>