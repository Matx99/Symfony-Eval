<<<<<<< HEAD
### Entités: 
J'ai choisi de travailler sur l'entité Litige (Ligitation) (1) qui est reliée aux entités :
- Domaine d'expertise (expertise field) (2)
- User (3)

Elle est reliée à d'autres entités mais j'ai travaillé sur ces trois-ci.
=======
### EntitÃ©s: 
J'ai choisi de travailler sur l'entitÃ© Litige (Ligitation) (1) qui est reliÃ©e aux entitÃ©s :
- Domaine d'expertise (expertise field) (2)
- User (3)

Elle est reliÃ©e Ã  d'autres entitÃ©s mais j'ai travaillÃ© sur ces trois-ci.
>>>>>>> a3492f68390f9565d1cac07ff21f9720cca01a4a

### Installation :
- `composer install`
- `php bin/console doctrine:database:create`
- `php bin/console d:m:m`
- `php bin/console server:run`

### Instructions:
<<<<<<< HEAD
1) Si la base de données est vierge, il faut crééer un domaine d'expertise (expertise field) directement dans celle-ci.
2) Aller sur l'application eMediation et s'inscrire puis se connecter.
3) Accéder à "Mes litiges" puis en créér un. On peut également modifier et supprimer un litige.

Seuls les litiges de l'utilisateur connecté sont affichés. Si l'utilisateur n'a pas de litige, alors il n'y en aura aucun d'affiché.

Trois entités sont donc mises en jeu comme demandé dans l'examen. Un litige est lié à un utilisateur et à un domaine d'expertise (créé à partir de la base de données ici suite aux contraintes de temps de l'examen).


Le design est simple. J'ai mis les boutons en valeur pour faciliter l'expérience utilisateur.
=======
1) Si la base de donnÃ©es est vierge, il faut crÃ©Ã©er un domaine d'expertise (expertise field) directement dans celle-ci.
2) Aller sur l'application eMediation et s'inscrire puis se connecter.
3) AccÃ©der Ã  "Mes litiges" puis en crÃ©Ã©r un. On peut Ã©galement modifier et supprimer un litige.

Seuls les litiges de l'utilisateur connectÃ© sont affichÃ©s. Si l'utilisateur n'a pas de litige, alors il n'y en aura aucun d'affichÃ©.

Trois entitÃ©s sont donc mises en jeu comme demandÃ© dans l'examen. Un litige est liÃ© Ã  un utilisateur et Ã  un domaine d'expertise (crÃ©Ã© Ã  partir de la base de donnÃ©es ici suite aux contraintes de temps de l'examen).


Le design est simple. J'ai mis les boutons en valeur pour faciliter l'expÃ©rience utilisateur.
>>>>>>> a3492f68390f9565d1cac07ff21f9720cca01a4a
