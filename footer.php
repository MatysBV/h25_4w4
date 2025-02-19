<footer>
    <div class="piedpage global">
        <section class="piedpage__s1">
            <div class="piedpage__s1__externe">
                <?php wp_nav_menu(array(
                    "menu" => "externe",
                    "container" => "nav",
                )); ?>
            </div>
            <div class="piedpage__s1__adresse">
                <div class="piedpage__s1__adresse__coord">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi odit voluptate dolores eius fugiat beatae, accusamus rerum pariatur possimus repellat suscipit quos amet quisquam doloremque, numquam dicta a nobis. Saepe.
                </div>
                <div class="piedpage__s1__adresse__recherche"></div>
                <?php get_search_form(); ?>
            </div>
            <div class="piedpage__s1__description">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus, saepe architecto veritatis totam odit minima ea libero dolor, cum perferendis accusamus non eum earum ipsa harum error omnis nobis at.
            </div>
        </section>

        <section class="piedpage__s2"></section>
        <section class="piedpage__s3"></section>

    </div>
</footer>
<?php wp_footer(); ?>