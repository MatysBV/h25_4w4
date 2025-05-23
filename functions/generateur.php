<?php
/**
 * Génére une liste de sous-catégories
 * @param string $parent_slug Le slug de la catégorie parente
 */
function categories_liste($parent_slug){
 
    // Récupérer la catégorie parente à partir de son slug
    $parent_category = get_category_by_slug($parent_slug);
    // Vérifier si la catégorie parente existe
if ($parent_category) {
    $parent_id = $parent_category->term_id;
}
// Récupérer les sous-catégories de "destination"
$sous_categories = get_categories(array(
    'parent' => $parent_id, // Filtrer par le parent "destination"
    'hide_empty' => true, // Ne pas afficher les catégories vides
));
// Vérifier s'il y a des sous-catégories
if (!empty($sous_categories)) {
}
echo '<ul class="categorie__ul">';
foreach ($sous_categories as $categorie) {
    // Afficher le nom de chaque sous-catégorie
    echo '<li  data-categoryID="' . esc_html($categorie->term_id) . '" class="categorie__ul__li">' . esc_html($categorie->name) . '</li>';
}
echo '</ul>';
 
}

// Permet de générer une ou plusieurs vagues en format SVG
function genere_vague($couleur) {?>

<svg class="waveFooter" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 300">
  <path fill="<?php echo $couleur ?> "  fill-opacity="1">  
    <animate attributeName="d" dur="6s" repeatCount="indefinite"
      values="
        M0,128L34.3,122.7C68.6,117,137,107,206,117.3C274.3,128,343,160,411,192C480,224,549,256,617,229.3C685.7,203,754,117,823,122.7C891.4,128,960,224,1029,224C1097.1,224,1166,128,1234,90.7C1302.9,53,1371,75,1406,85.3L1440,96L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z;
        
        M0,224L34.3,229.3C68.6,235,137,245,206,224C274.3,203,343,149,411,106.7C480,64,549,32,617,48C685.7,64,754,128,823,160C891.4,192,960,192,1029,213.3C1097.1,235,1166,277,1234,277.3C1302.9,277,1371,235,1406,213.3L1440,192L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z;
        
        M0,128L34.3,122.7C68.6,117,137,107,206,117.3C274.3,128,343,160,411,192C480,224,549,256,617,229.3C685.7,203,754,117,823,122.7C891.4,128,960,224,1029,224C1097.1,224,1166,128,1234,90.7C1302.9,53,1371,75,1406,85.3L1440,96L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z;" />
  </path>
</svg>

<?php }

/**
 * Génère une icone de réseaux sociaux
 */
function genere_icone($reseau, $lien_reseau, $couleur)
{ ?>
    <a href="<?= $lien_reseau; ?>"><img class="iconeImg" src="https://s2.svgbox.net/social.svg?ic=<?= $reseau ?>&color=<?= $couleur ?>" width="20" height="20"></a>
<?php  }