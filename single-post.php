<?php $imageDefaut = get_theme_mod('imageSinglePost_imageDefaut', ''); ?>
    
    <?php get_header(); ?>
    <!--  -->
    <!--  -->
    <!-- <h1>------------------ SINGLE-POST.PHP ------------------</h1> -->
    <!--  -->
    <section class="populaire">
        <div class="global">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <article class="single-post">
                        <?php
                        if (has_post_thumbnail()) {
                            the_post_thumbnail('large');
                        }
                        else{
                            ?>
                            <img src="<?php echo $imageDefaut; ?>" alt="">
                            <?php
                        }
                        ?>
                        <h2><?php the_title(); ?></h2>
                        <div><?php the_content(); ?></div>
                        <p>Température maximum : <?php the_field('temperature_maximum') ?>°C</p>
                        <p>Température minimum : <?php the_field('temperature_minimum') ?>°C</p>
                        <p>Température moyenne : <?php the_field('temperature_moyenne') ?>°C</p>

                        <div class="InfoPubli">
                            <p>Auteur : <?php the_author(); ?></p>
                            <p>Date de publication : <?php the_date(); ?></p>
                        </div>
                    </article>
            <?php endwhile;
            endif; ?>
        </div>
    </section>
    <?php get_footer(); ?>
    </body>

    </html>