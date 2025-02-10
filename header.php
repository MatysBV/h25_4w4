<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Club de voyage</title>
    <!-- link rel="stylesheet" href="normalize.css" -->
    <!-- link rel="stylesheet" href="style.css" -->
    <?php wp_head() ?>
</head>

<body>
    <header>
        <div class="entete">
            <figure class="entete__logo">
                <img src="images/logo/Air_Transat_Logo.png" alt="">
            </figure>

            <label for="menuBurger" class="entete__label">
                <img src="https://s2.svgbox.net/hero-solid.svg?ic=menu&color=000" width="32" height="32">
            </label>
            <input type="checkbox" name="menuBurger" id="menuBurger" class="entete__check">
            

            <div class="entete__navigation">
                <?php wp_nav_menu(array(
                    "menu" => "principal",
                    'container'            => 'div',
		            'container_class'      => '',
                )); ?>
                <nav class="entete__menu">
                    <ul class="menu">
                        <li class="menu__li">
                            <a href="#">Aventure</a>
                        </li>
                        <li class="menu__li">
                            <a href="#">Culturel</a>
                        </li>
                        <li class="menu__li">
                            <a href="#">Zen</a>
                        </li>
                        <li class="menu__li">
                            <a href="#">Sportive</a>
                        </li>
                        <li class="menu__li">
                            <a href="#">Tourtereau</a>
                        </li>
                        <li class="menu__li">
                            <a href="#">Aventure</a>
                        </li>
                        <li class="menu__li">
                            <a href="#">Culturel</a>
                        </li>
                        <li class="menu__li">
                            <a href="#">Zen</a>
                        </li>
                        <li class="menu__li">
                            <a href="#">Sportive</a>
                        </li>
                        <li class="menu__li">
                            <a href="#">Tourtereau</a>
                        </li>
                    </ul>
                </nav>
                <form class="recherche">
                    <input type="search" placeholder="Rechercher" class="recherche__input">
                    <img class="recherche__img" src="https://s2.svgbox.net/hero-outline.svg?ic=search&color=000" width="16" height="16">
                </form>
            </div> <!-- fin entete__navigation  -->
        </div>
    </header>