# GlobTest


## Enoncé

[Echo](https://www.instagram.com/globalisecho/?hl=fr), mascotte de l'équipe de [Globalis](https://www.globalis-ms.com/), a découvert une fonction `foo()` bien mystérieuse. Hélas, il n'a pas accès au code. Curieux et grand amateur de [rétro-ingénierie](https://fr.wikipedia.org/wiki/R%C3%A9tro-ing%C3%A9nierie), Echo s'est amusé à appeler cette fonction, en injectant des données en entrée et en récoltant les sorties. Le comportement de la fonction `foo()` est le suivant :

|  Appel     |  Sortie     |
| ---   |:-:    |
| `foo([[0, 3], [6, 10]])` | `[[0, 3], [6, 10]]` |
| `foo([[0, 5], [3, 10]])` | `[[0, 10]]` |
| `foo([[0, 5], [2, 4]])` | `[[0, 5]]` |
| `foo([[7, 8], [3, 6], [2, 4]])` | `[[2, 6], [7, 8]]` |
| `foo([[3, 6], [3, 4], [15, 20], [16, 17], [1, 4], [6, 10], [3, 6]])` | `[[1, 10], [15, 20]]` |

Le challenge, si vous l'acceptez, serait d'aider Echo à comprendre ce que fait cette fonction et à la recoder. Vous êtes partant ? ;)

### Question 1
Expliquez, en quelques lignes, ce que fait cette fonction.

=> *Cette fonction foo devrait prendre une liste d'intervalles en entrée et retourner une liste d'intervalles où tous les intervalles chevauchants sont fusionnés en un seul intervalle.*

### Question 2
Codez cette fonction (idéalement en CLI) en utilisant le langage PHP ou JavaScript.
Merci de fournir un fichier contenant :

- la fonction, 
- l'appel de la fonction, avec un jeu de test en entrée,
- l'affichage du résultat en sortie.

=> *Je vous invite à consulter le fichier foo.php et à exécuter le code en console avec la commande 'php foo.php'.* 

### Question 3
Précisez en combien de temps vous avez implémenté cette fonction.

=> *J'ai mis au total une trentaine de minutes pour implémenter cette fonction, dont 5 minutes pour trouver la logique. Au début, j'ai pensé aux séquences comme Fibonacci, mais ce n'était pas le cas. Je me suis ensuite rendu compte qu'il s'agissait plutôt de fusionner les intervalles qui se chevauchent*

## Merci

Par avance, un grand merci pour le temps que vous consacrerez à ce challenge, en espérant vous voir rejoindre très prochainement [nos équipes](https://www.globalis-ms.com/jobs/) ;) 