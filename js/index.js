// On récupère les boutons permettant la navigation dans les différentes pages
let boutons = document.querySelectorAll('.boutonNav>a');

// On capture l'URL de la page actuelle
let pageActuelle = window.location.pathname;

// On fait une boucle pour voir l'URL de chaque bouton
boutons.forEach(bouton => {
    // On capture l'URL de chaque bouton
    let url = new URL(bouton.href).pathname;

    // Si l'URL du bouton est égale à l'URL de la page actuelle ou si c'est la page d'accueil
    if (url === pageActuelle || (pageActuelle === '/' && url === templateUrl + '/')) {
        // On capture l'element parent du bouton
        let parent = bouton.parentElement;

        // On ajoute la classe 'active' au bouton
        parent.classList.add('active');

        // On change l'image du fond en fonction de la page
        if (url.endsWith("index.php") || url === "/") 
        {
            parent.style.backgroundImage = "url(" + templateUrl + "/images/movie_Jaune.png)";
        } 
        else if (url.endsWith("creation.php")) 
        {
            parent.style.backgroundImage = "url(" + templateUrl + "/images/icone_Prod_Actif.png)";
        } 
        else if (url.endsWith("aPropos.php")) 
        {
            bouton.style.color = "#FEB312";
        }
    }
});