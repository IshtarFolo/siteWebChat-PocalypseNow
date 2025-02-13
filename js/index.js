// On récupère les boutons permettant la navigation dans les différentes pages
let boutons = document.querySelectorAll('.boutonNav>a');

// On capture l'URL de la page actuelle
let pageActuelle = window.location.pathname.split('/').pop();

// On fait une boucle pour voir l'URL de chaque bouton
boutons.forEach(bouton => {
    // On capture l'URL de chaque bouton
    let url = bouton.getAttribute('href');

    // Si l'URL du bouton est égale à l'URL de la page actuelle
    if (url === pageActuelle) {
        //
        let parent = bouton.parentElement;
        // On ajoute la classe 'active' au bouton
        parent.classList.add('active');

        // On change l'image du fond en fonction de la page
        if (url == "chatPocalypseNow.html") 
        {
            parent.style.backgroundImage = "url(../images/movie_Jaune.png)";
        }
        else if (url == "creation.html")
        {
            parent.style.backgroundImage = "url(../images/icone_Prod_Actif.png)";
        }
        else if (url == "aPropos.html")
        {
            bouton.style.color = "#FEB312";
        }
    }
});