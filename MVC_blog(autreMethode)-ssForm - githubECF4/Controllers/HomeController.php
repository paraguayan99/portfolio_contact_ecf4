<?php

namespace App\Controllers;

// ECF4 / Erreur corrigée
// ajout de [use App\Entities\Creation] pour l'instanciation du new Creation() ligne 14
// ajout de [use App\Core\Form et Validator] pour gérer le contrôle du formulaire
use App\Entities\Creation;
use App\Core\Form;
use App\Core\Validator;

class HomeController extends Controller
{

    public function index()
    {
        $creation = new Creation();
        $this->render('home/index');
    }

// ECF4 /1/ Creation de la fonction contact et contrôle de la soumission du formulaire via Core/Validator.php
// Et à développer plus tard : PHPMailer et traitement des infos

    public function contact()
    {
        $confirmation = null;
        $formData = [
            'name' => '',
            'email' => '',
            'message' => ''
        ];

        // Si le formulaire est soumis
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            // On garde les données saisies pour les réafficher dans le formulaire
            $formData = $_POST;

            // On délègue entièrement la vérification au Validator
            if (Validator::validatePost($_POST, ['name', 'email', 'message'])) {

                // Nettoyage et protection XSS après validation
                $name = htmlspecialchars(trim($_POST['name']));
                $email = htmlspecialchars(trim($_POST['email']));
                $message = htmlspecialchars(trim($_POST['message']));

                // Traitement (ex: envoi d'email)
                $confirmation = "Merci $name, votre message a bien été envoyé !";
            } else {
                $confirmation = "Erreur : merci de remplir tous les champs du formulaire.";
            }
        }

        // On passe la confirmation et les données saisies à la vue
        $this->render('home/contact', [
            'confirmation' => $confirmation,
            'formData' => $formData
        ]);
    }
}
