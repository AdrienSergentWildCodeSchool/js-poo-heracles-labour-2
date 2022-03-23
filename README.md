# Travaux d'Héraclès #2 : le sanglier d'Érymanthe

Prérequis : cloner ce repository.

## État des lieux du projet

Héraclès doit maintenant vaincre le sanglier d'Érymanthe 🐗, énorme bête qui terrifie les habitants du mont Erymanthe en Arcadie.

## À toi de jouer : Un peu d'équipement pour attaquer

Les caractéristiques de force et de dextérité du sanglier sont bien supérieures aux tiennes, impossible de le battre dans ces conditions, tes poings ne suffiront pas ! Il va falloir que tu t'équipes en conséquence !

Tout d'abord, il va falloir t'ajouter une épée.

1. Créé une nouvelle classe `Weapon` dans le dossier *src/*.
2. Celle-ci va correspondre à l'arme dont tu vas équiper les combattants. Elle doit avoir un nom et une propriété `damage` initialisée à 10 et une propriété image utilisant 'sword.svg'.
3. Pour ajouter l'arme au personnage, dans la classe `Fighter`, on crée une propriété `weapon`. Celle-ci sera initialisée à `null`.
4. Créé un *setter* (une méthode setWeapon()) afin d'attribuer cette arme au combattant
5. Dans le fichier *index.js*, instancie un objet de type `Weapon` et associe le à Héraclès via la méthode `setWeapon()`.
6. Pour le moment, l'épée a été attribuée mais elle ne t'apporte aucun avantage. Retourne dans la class `Fighter`, nous allons modifier un peu le comportement de la méthode `fight()`.
Créé tout d'abord une méthode `getDamage()`. Celle-ci doit retourner la force (*strength*) du Fighter, à laquelle tu vas ajouter les dommages provenant de l'arme (dans le cas où il en porte une).
7. Dans la méthode `fight()`, utilise cette méthode `getDamage()` pour déterminer les dégâts infligés par le combattant. Ainsi les dégâts infligés (via le `rand()`) seront compris entre 1 et `getDamage()` (la force + les dégâts de l'arme) et non plus juste la force.

> Tout ce calcul pourrait être réalisé directement dans `fight()`, mais l'utilisation de la méthode `getDamage()` permet de simplifier la méthode `fight()` et de déporter la logique de calcul des dommages ailleurs. De plus, il est maintenant possible d'utiliser `getDamage()` indépendamment de `fight()`, ce qui sera utile par la suite.


## Et la défense dans tout ça ?

Tu vas refaire quasiment la même chose pour gérer cette fois-ci un bouclier. Les étapes sont ici volontairement données dans les grandes lignes.

1. Créé une classe `Shield` avec une propriété `protection` initialisée à 10, et une propriété image utilisant 'shield.svg'.
2. Dans `Fighter`, ajouter une propriété `shield`. Puis créé une méthode `getDefense()`, additionnant la dextérité et la protection du bouclier (si le héros en porte un). Cette méthode sera également utilisée dans `fight()` (à la place du simple appel à `defender.dexterity`) afin que le bouclier puisse jouer son rôle protecteur.


## Prêt au combat.

Réactualise la page, tu fais maintenant beaucoup plus de dégâts et tu es mieux protégé, tu devrais gagner le combat sans trop de difficultés !

N'hésite pas à jouer avec ce code pour aller plus loin, une correction te sera fournie pour le prochain atelier.

