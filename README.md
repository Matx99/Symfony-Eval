
### Entit�s: 
J'ai choisi de travailler sur l'entit� Litige (Ligitation) (1) qui est reli�e aux entit�s :
- Domaine d'expertise (expertise field) (2)
- User (3)

Elle est reli�e � d'autres entit�s mais j'ai travaill� sur ces trois-ci.

### Entit�s: 
J'ai choisi de travailler sur l'entit� Litige (Ligitation) (1) qui est reli�e aux entit�s :
- Domaine d'expertise (expertise field) (2)
- User (3)

Elle est reli��e � d'autres entit��s mais j'ai travaill� sur ces trois-ci.

### Installation :
- `composer install`
- `php bin/console doctrine:database:create`
- `php bin/console d:m:m`
- `php bin/console server:run`

### Instructions:
1) Si la base de donn�es est vierge, il faut cr��r un domaine d'expertise (expertise field) directement dans celle-ci.
2) Aller sur l'application eMediation et s'inscrire puis se connecter.
3) Acc�der � "Mes litiges" puis en cr��r un. On peut �galement modifier et supprimer un litige.

Seuls les litiges de l'utilisateur connect� sont affich�s. Si l'utilisateur n'a pas de litige, alors il n'y en aura aucun d'affich�.

Trois entit�s sont donc mises en jeu comme demand� dans l'examen. Un litige est li� � un utilisateur et � un domaine d'expertise (cr�� � partir de la base de donn�es ici suite aux contraintes de temps de l'examen).


Le design est simple. J'ai mis les boutons en valeur pour faciliter l'exp�rience utilisateur.
1) Si la base de données est vierge, il faut cr��r un domaine d'expertise (expertise field) directement dans celle-ci.
2) Aller sur l'application eMediation et s'inscrire puis se connecter.
3) Acc�der à "Mes litiges" puis en cr��r un. On peut �galement modifier et supprimer un litige.

Seuls les litiges de l'utilisateur connect� sont affich�s. Si l'utilisateur n'a pas de litige, alors il n'y en aura aucun d'affich�.

Trois entit�s sont donc mises en jeu comme demandé dans l'examen. Un litige est li� � un utilisateur et � un domaine d'expertise (cr�� � partir de la base de donn�es ici suite aux contraintes de temps de l'examen).


Le design est simple. J'ai mis les boutons en valeur pour faciliter l'expérience utilisateur.
>>>>>>> a3492f68390f9565d1cac07ff21f9720cca01a4a
