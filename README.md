Site en live : [http://thedoudou.myds.me/be_code/allezcine/](http://thedoudou.myds.me/be_code/allezcine/)

NewsLetter : [http://thedoudou.myds.me/be_code/allezcine/newsletter.html](http://thedoudou.myds.me/be_code/allezcine/newsletter.html)

Création d'une one page et newletter pour un site de cinéma.

Par :
- [Edouard TheDoudou](https://github.com/TheDoudou)
- [Hadrien Soumoy](https://github.com/hadribecode)
- [Jean-Charles Yedoh](https://github.com/jeancharlesyedoh)

Les difficultés et détails par TheDoudou :
- Le formulaire 18 ans + relativement simple
- Le RGPD j'ai créé un via [QuantCast](https://www.quantcast.com/)
- La navbar :
    - J'ai fait une petite fonction pour que les boutons redirige ou il faut sur la page (+80 pixel pour la hauteur de la navbar en fixed-top)
    - Le champ de recherche fonctionnel (via une api) un peu de mal pour pas que la page ce reload avec la touche <Enter>
- Les liens sociaux, je n'arrive pas à mettre le rond blanc comme il faut (après)
- Les modals pour le Login/Enregistrement relativement simple
- Le jumbotron/carousel j'ai eu un peu de mal avec le coté opaque sur l'image
- Les listes films/séries sont créer grace à une API, je ne la laisse pas active car c'est trop lent (5 secondes), dans une V2 ajouter une gestion de cache
- Les réalisateurs et acteurs sont relativement compliqué à avoir via cette API (cela passe à presque 15 secondes, il faut regarder avec l'id du film le generique trouver les id des fonctions "Réalisateur", "Acteur pricipal", prendre l'id de la personne et chercher à nouveau parmi les personnes le nom, prénom de cette id, c'est pour cela que je suis réalisateur de tous les films)
- La video Youtube dans le modial (l'api peut aussi fournir les videos mais il y en a peu), du coup j'ai mis la meme video pour tous.
- Stoper la video Youtube dans le modal
- Le shop je ne suis pas fan des div de gauche (à refaire dans une V2), relativement simple (j'ai mis les entrées à la main pour le shop)
- La NewsLetter, rien de spécial (visible au clic sur SUBSCRIBE)

Les difficultés et détails par Hadrien :
- Pour ma part, le fait de reprendre du bootstrap m'a fait du bien, j'ai pu m'exercer à nouveau sur la réalisation du footer et me faire une piqure de rappel de tout ce qui était colonne et container.
- Le bouton qui permet de remonter à la navbar était un bon challenge pour moi car j'ai toujours des difficultés en javascrpit.
- J'ai pu m'entrainer à réaliser aussi le Formulaire " contact us" , il n'est peut etre pas parfait mais il est fonctionnel.
- Je suis plutôt satisfait de mon travail même si ma vitesse de résolution des problèmes me prend toujours un temps assez conséquent.

Les difficultés et détails par Jean-Charles :
- Au niveau du featured Movies j'ai eu des difficulté d'allier le css et le bootstrap pour qu'il y ait moins d'espaces entre les photos 
- Rencontré aussi des problèmes au niveau du Javascript 
- Au niveau du shop moovies :
    - difficultés pour le redimenssionnement des div images (avec bootstrap) .
