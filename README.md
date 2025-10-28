README CREATION PAGE CONTACT EN SUIVANT LE MODELE MVC

Etape par etape :
- Modification du Controllers/HomeController.php et création d'une nouvelle fonction contact
- Creation de la page contact.php dans Views/home
- Creation du formulaire contact dans includes/contactForm.php qui s'affiche dans la page contact.php
- Ajout du lien "Contact" dans la barre du menu en modifiant Views/base.php
- Gestion des champs de formulaire dans le HomeController.php et non pas le CreationController (réservé à la gestion de la BDD et des créations)

Prochaine étape à développer : 
- Ajouter PHP Mailer (par exemple) et gérer l'envoi automatique du mail avec les infos de la page contact
