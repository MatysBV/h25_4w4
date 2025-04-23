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
function genere_vague() {?>

<svg class="waveFooter" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 200">
  <path fill="#fad8d0" fill-opacity="1">
    <animate attributeName="d" dur="6s" repeatCount="indefinite"
      values="
        M0,160L80,133.3C160,107,320,53,480,37.3C640,21,800,43,960,48C1120,53,1280,43,1360,37.3L1440,32L1440,320L0,320Z;
        M0,180L80,153.3C160,127,320,73,480,57.3C640,41,800,63,960,68C1120,73,1280,63,1360,57.3L1440,52L1440,320L0,320Z;
        M0,160L80,133.3C160,107,320,53,480,37.3C640,21,800,43,960,48C1120,53,1280,43,1360,37.3L1440,32L1440,320L0,320Z" />
  </path>
</svg>

<?php }