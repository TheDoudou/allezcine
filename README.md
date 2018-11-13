Site en live : [http://thedoudou.myds.me/be_code/allezcine/](http://thedoudou.myds.me/be_code/allezcine/)

NewsLetter : [http://thedoudou.myds.me/be_code/allezcine/newsletter.html](http://thedoudou.myds.me/be_code/allezcine/newsletter.html)

Création d'une one page et newletter pour un site de cinéma.

Par :
- [Edouard TheDoudou](https://github.com/TheDoudou)
- [Hadrien Soumoy](https://github.com/hadribecode)
- [Jean-Charles Yedoh](https://github.com/jeancharlesyedoh)

Les dificultés et détails par TheDoudou :
- Le formulaire 18 ans + relativement simple
- Le RGPD j'ai créer un via [QuantCast](https://www.quantcast.com/)
- La navbar :
    - J'ai fais une petite fonction pour que les boutons aille ou il faut sur la page (+80 pixel pour la hauteur de la navbar en fixed-top)
    - Le champ de recherche fonctionnel (via une api) un peu de mal pour pas que la page ce reload avec la touche <Enter>
- Les liens sociaux, je n'arrive pas à mettre le rond blanc comme il faut
- Les modals pour le Login/Enregistrement relativement simple
- Le jumbotron/carousel j'ai eu un peu de mal avec le coté opaque sur l'image
- Les listes films/séries son créer grace à une API, je ne la laisse pas active car trop lent (5 secondes), dans une V2 ajouter une gestion de cache
- Les réalisateurs et acteurs sont relativement compliqué à avoir via cette API (cela passe à presque 15 secondes, il faut regarder avec l'id du film le generique trouver les id des fonctions "Réalisateur", "Acteur pricipal", prendre l'id de la personne et chercher à nouveau parmis les personnes le nom, prénom de cette id, c'est pour cela que je suis réalisateur de tous les films)
- La video Youtube dans le modial (l'api peut aussi fournir les videos ou pas mais ce n'est pas sur Youtube), du coup j'ai mis la meme video pour tous.
- Stoper la video Youtube dans le modal
- Le shop je ne suis pas fan des div de gauche (à refaire dans une V2), relativement simple (j'ai mis les entrées à la main pour le shop)
- La NewsLetter, rien de spécial (visible au clic sur SUBSCRIBE)

Les dificultés et détails par Hadrien :

Les dificultés et détails par Jean-Char :
