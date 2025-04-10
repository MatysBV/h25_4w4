const categorie__ul__li = document.querySelectorAll(".categorie__ul__li");
const categoryTitre = document.querySelector(".destination__titre");

categoryTitre.innerHTML = "";

for (const element of categorie__ul__li) {
    element.addEventListener("click", fetchStuff)
}

function fetchStuff(event) {
    const categoryId = event.target.getAttribute("data-categoryID");
    const domaine = window.location.origin + window.location.pathname; // pour éviter les erreurs de double slash
    const apiUrl = `${domaine}wp-json/wp/v2/posts?categories=${categoryId}`;
    console.log(`Selected category = ${event.target.innerHTML}`);

    fetch(apiUrl)
        .then(response => response.json())
        .then(data => {
            categoryTitre.innerHTML = `Articles de la section : ${(event.target.innerHTML).toLowerCase()}`
            const destinationList = document.querySelector('.destination__list');
            destinationList.innerHTML = "";

            data.forEach(article => {
                const articleElement = document.createElement('div');
                articleElement.classList.add('destination__item');

                articleElement.innerHTML = `
                    <h3>${article.title.rendered}</h3>
                    <div>${article.excerpt.rendered}</div>
                    <a href="${article.link}">Lire plus</a>
                `;

                const excerpt = articleElement.querySelector('div');
                const link = articleElement.querySelector('a');

                excerpt.classList.add('destination__texte'); // ajoute la classe pour l'effet
                link.classList.add('destination__link'); //meme chose ajout d'une classe pour l'effet

                const toggleButton = document.createElement('button');
                toggleButton.textContent = '...';
                toggleButton.classList.add('destination__toggle-button');

                toggleButton.addEventListener('click', () => {
                    excerpt.classList.toggle('active');
                    link.classList.toggle('active');

                });

                articleElement.insertBefore(toggleButton, excerpt);
                destinationList.appendChild(articleElement);
            });
        })
        .catch(error => console.error('Erreur lors de la récupération des articles:', error));
}
