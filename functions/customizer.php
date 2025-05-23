<?php

function theme_tp_customize_register($wp_customize)
{
    // Le code pour ajouter des sections, des réglages et des contrôles ira ici.
    // Création d'une nouvelle section dans le customizer
    $wp_customize->add_section('hero_section', array(
        'title' => __(' Section hero', 'theme_tp'),
        'priority' => 30,
    ));


    ###################### AUTEUR ######################
    ////////////////////////// Ajout des données  (auteur)
    $wp_customize->add_setting('hero_auteur', array(
        'default' => __('Matys Voisin', 'theme_tp'),
        'sanitize_callback' => 'sanitize_text_field'
    ));

    ////////////////////////// Ajout du contrôle des données
    $wp_customize->add_control('hero_auteur', array(
        'label' => __('Auteur', 'theme_tp'),
        'section' => 'hero_section',
        'type' => 'text',
    ));


    ################## CHOIX DE LA COULEUR DU TEXTE DANS LA SECTION HERO ##################

    ///////////////////// ajout du contrôle des couleurs de texte dans le hero
    $wp_customize->add_setting('hero_couleur', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ));

    // Controle donnee  (changement de couleur dans le hero)
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'hero_couleur', array(
        'label' => __('sélection de la couleur', 'theme_tp'),
        'section' => 'hero_section',
    )));


    ################## NOMBRE D'IMAGES BACKGROUND HERO CAROUSSEL ##################

    $wp_customize->add_setting('hero_nombre_images_caroussel', array(
        'default' => 3,
        'sanitize_callback' => 'absint',
    ));
    $wp_customize->add_control('hero_nombre_images_caroussel', array(
        'label' => __('Nombre d’images dans le carrousel', 'theme_tp'),
        'section' => 'hero_section',
        'type' => 'number',
    ));



    ################## IMAGE BACKGROUND HERO ##################
    // Ajout donnee  (changement background)

    $NombreImagesCaroussel =  get_theme_mod("hero_nombre_images_caroussel", "1");

    for ($k = 0; $k < $NombreImagesCaroussel; $k++) {
        $wp_customize->add_setting('hero_background_' . $k, array(
            'default' => '',
            'sanitize_callback' => 'esc_url_raw',
        ));


        // Controle donnee  (image background)
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'hero_background_' . $k, array(
            'label' => __('Image background' . ($k + 1), 'theme_tp'),
            'section' => 'hero_section',
        )));
    }



    /////////////////////   ICONE SOCIAUX DANS LE HERO ET LE FOOTER   ///////////////////// 

    /**********/ ////////////////////////////////////////////////Début du champ hero_couleur_icones*/
    ////////////////////////////////////////// ajout de la donnée de couleur des icones
    $wp_customize->add_setting('hero_couleur_icones', array(
        'default' => 'ffffff',
        'sanitize_callback' => 'sanitize_hex_color_no_hash',
    ));
    $wp_customize->add_control(
        new WP_Customize_Color_Control($wp_customize, 'hero_couleur_icones', array(
            'label' => __('Couleur Îcones Sociaux'),
            'section' => 'hero_section',
        ))
    );

    /**********/ ////////////////////////////////////////////////Début du champ hero_nb_icones*/
    ////////////////////////////////////////// ajout de la donnée nombre d'image
    $wp_customize->add_setting('hero_nb_icones', array(
        'sanitize_callback' => 'sanitize_text_field',
        'default' => 1,
    ));

    $wp_customize->add_control('hero_nb_icones', array(
        'type' => 'number',
        'section' => 'hero_section', // Add a default or your own section
        'label' => __('Nombre Icones Sociaux'),
    ));

    /**********/ ////////////////////////////////////////////////Début des champs hero_icones*/
    ////////////////////////////////////////// ajout de la donnée
    $hero_nb_icones = get_theme_mod('hero_nb_icones', '1');

    for ($k = 0; $k < $hero_nb_icones; $k++) {
        $wp_customize->add_setting('hero_icones_' . $k, array(
            'default' => __('wordpress', 'theme_4w4'),
            'sanitize_callback' => 'sanitize_text_field'
        ));

        ////////////////////////////////////////// ajout du contrôle de la donnée
        $wp_customize->add_control('hero_icones_' . $k, array(
            'label' => __('Icones Reseaux Sociaux ' . ($k + 1), 'theme_4w4'),
            'section' => 'hero_section',
            'type' => 'text',
        ));
    }

    /**********/ ////////////////////////////////////////////////Début des champs hero_lien_reseaux*/
    ////////////////////////////////////////// ajout de la donnée
    for ($k = 0; $k < $hero_nb_icones; $k++) {
        $wp_customize->add_setting('hero_lien_reseaux_' . $k, array(
            'default' => __('https://github.com/MatysBV/h25_4w4', 'theme_4w4'),
            'sanitize_callback' => 'sanitize_text_field'
        ));

        ////////////////////////////////////////// ajout du contrôle de la donnée
        $wp_customize->add_control('hero_lien_reseaux_' . $k, array(
            'label' => __('Liens Reseaux Sociaux ' . ($k + 1), 'theme_4w4'),
            'section' => 'hero_section',
            'type' => 'text',
        ));
    }




    ####################### FOOTER #######################

    $wp_customize->add_section('footer_section', array(
        'title' => __('Section footer', 'theme_tp'),
        'priority' => 30,
    ));
    //////////////////////  ajout de la donnée (adresse)
    $wp_customize->add_setting('footer_adresse', array(
        'default' => __('5800 Sherbrooke-est - Montréal (Québec) H1X 2A2', 'theme_tp'),
        'sanitize_callback' => 'sanitize_text_field'
    ));
    ///////////////////// ajout du contrôle de la donnée (adresse)
    $wp_customize->add_control('footer_adresse', array(
        'label' => __('Adresse', 'theme_tp'),
        'section' => 'footer_section',
        'type' => 'text',
    ));
    //////////////////////  ajout de la donnée (telephone)
    $wp_customize->add_setting('footer_telephone', array(
        'default' => __('514-123-1234', 'theme_tp'),
        'sanitize_callback' => 'sanitize_text_field'
    ));
    ///////////////////// ajout du contrôle de la donnée (telephone)
    $wp_customize->add_control('footer_telephone', array(
        'label' => __('Téléphone', 'theme_tp'),
        'section' => 'footer_section',
        'type' => 'text',
    ));
    //////////////////////  ajout de la donnée (mission)
    $wp_customize->add_setting('footer_mission', array(
        'default' => __('Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatum, nostrum sint deserunt architecto dolorem nisi delectus pariatur odit eius! Maiores dolore provident soluta culpa minus nesciunt doloremque vero incidunt accusamus!', 'theme_tp'),
        'sanitize_callback' => 'sanitize_text_field'
    ));
    ///////////////////// ajout du contrôle de la donnée (mission)
    $wp_customize->add_control('footer_mission', array(
        'label' => __('Mission', 'theme_tp'),
        'section' => 'footer_section',
        'type' => 'text',
    ));

    ///////////////////// ajout du contrôle des couleurs de texte dans le footer
    $wp_customize->add_setting('footer_couleur', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ));

    // Controle donnee  (changement de couleur dans le footer)
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'footer_couleur', array(
        'label' => __('sélection de la couleur', 'theme_tp'),
        'section' => 'footer_section',
    )));

    ////////////////////////////////////////// ajout de la donnée image (dans le footer)
    $wp_customize->add_setting('footer_imgFoot', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ));
    ////////////////////////////////////////// ajout du contrôle de la donnée image
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'footer_imgFoot', array(
        'label' => __('Image Footer', 'theme_tp'),
        'section' => 'footer_section',
    )));





    ################## SECTION ERREUR 404 ##################
    $wp_customize->add_section('404_section', array(
        'title' => __(' Section ERROR 404', 'theme_tp'),
        'priority' => 30,
    ));


    ################## IMAGE BACKGROUND ERREUR 404 ##################
    // Ajout donnee  (changement background)
    $wp_customize->add_setting('404_background', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ));

    // Controle donnee  (image background)
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, '404_background', array(
        'label' => __('Image background', 'theme_tp'),
        'section' => '404_section',
    )));

    ###################### TITRE PAGE ERROR 404 ######################
    ////////////////////////// Ajout des données  (Titre)
    $wp_customize->add_setting('404_titre', array(
        'default' => __('404', 'theme_tp'),
        'sanitize_callback' => 'sanitize_text_field'
    ));

    ////////////////////////// Ajout du contrôle des données (DU TITRE)
    $wp_customize->add_control('404_titre', array(
        'label' => __('Auteur', 'theme_tp'),
        'section' => '404_section',
        'type' => 'text',
    ));

    ///////////////////// ajout du contrôle des couleurs de texte dans la page ERROR 404
    $wp_customize->add_setting('404_couleur', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ));

    // Controle donnee  (changement de couleur dans le hero)
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, '404_couleur', array(
        'label' => __('sélection de la couleur', 'theme_tp'),
        'section' => '404_section',
    )));

    //////////////////////  ajout de la donnée (description 404)
    $wp_customize->add_setting('404_description', array(
        'default' => __('Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatum, nostrum sint deserunt architecto dolorem nisi delectus pariatur odit eius! Maiores dolore provident soluta culpa minus nesciunt doloremque vero incidunt accusamus!', 'theme_tp'),
        'sanitize_callback' => 'sanitize_text_field'
    ));
    ///////////////////// ajout du contrôle de la donnée (description 404)
    $wp_customize->add_control('404_description', array(
        'label' => __('description', 'theme_tp'),
        'section' => '404_section',
        'type' => 'text',
    ));
}

add_action('customize_register', 'theme_tp_customize_register');
