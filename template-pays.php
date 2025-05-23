<?php $couleurVagueRestPays = get_theme_mod('Vague-Template-Pays', '#aaa'); ?>

<?php
/*
Template Name: Template Pays
*/
get_header();
?>

<section class="PagePays">

    <div class="informationPage">
        <p>Cette page à été concu afin de classifier les destinations connus des pays les plus visité en 2024 :
            <?php the_field('description_page'); ?></p>
        <p>Date a laquelle cette page a été créer :
            <?php the_field('date_creation_page'); ?>
        </p>
    </div>

    <div class="global">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <article>
                    <h2><?php the_title(); ?></h2>
                    <div><?php the_content(); ?></div>
                </article>
        <?php endwhile;
        endif; ?>
    </div>
</section>


<!-- Générer la premiere vague -->

<svg class="vaguePays" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 300">
    <path fill="<?php echo $couleurVagueRestPays ?> " fill-opacity="1">
        <animate attributeName="d" dur="6s" repeatCount="indefinite"
            values="
        M0,128L34.3,122.7C68.6,117,137,107,206,117.3C274.3,128,343,160,411,192C480,224,549,256,617,229.3C685.7,203,754,117,823,122.7C891.4,128,960,224,1029,224C1097.1,224,1166,128,1234,90.7C1302.9,53,1371,75,1406,85.3L1440,96L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z;
        
        M0,224L34.3,229.3C68.6,235,137,245,206,224C274.3,203,343,149,411,106.7C480,64,549,32,617,48C685.7,64,754,128,823,160C891.4,192,960,192,1029,213.3C1097.1,235,1166,277,1234,277.3C1302.9,277,1371,235,1406,213.3L1440,192L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z;
        
        M0,128L34.3,122.7C68.6,117,137,107,206,117.3C274.3,128,343,160,411,192C480,224,549,256,617,229.3C685.7,203,754,117,823,122.7C891.4,128,960,224,1029,224C1097.1,224,1166,128,1234,90.7C1302.9,53,1371,75,1406,85.3L1440,96L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z;" />
    </path>
</svg>

<!-- ////////////////////////////////////////////////////// Section Rest API -->
<section class="RestPays" style="background-color: <?= $couleurVagueRestPays ?>">
    <?php ListePays(array("France", "États-Unis", "Canada", "Argentine", "Chili", "Belgique", "Maroc", "Mexique", "Japon", "Italie", "Islande", "Chine", "Grèce", "Suisse")) ?>
    <h2 class="destination__titre">Articles de la catégorie</h2>
    <div class="destination__list"></div>
</section>
<?php get_footer(); ?>