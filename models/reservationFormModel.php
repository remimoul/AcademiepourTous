<?php
require_once('./models/database.php');
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

function addCourses($usersId,$coursesId,$reservationDate)
{
// Connexion à la base de données
    $pdo = connexionBDD();

// Préparation et exécution de la requête SQL
    $requete = $pdo->prepare("INSERT INTO reservation (usersId, coursesId, reservationDate) VALUES (?, ?, ?)");
    $requete->bindValue(1, $usersId);
    $requete->bindValue(2, $coursesId);
    $requete->bindValue(3, $reservationDate);

    $resultReservation = $requete->execute();

    // Récupération des données du formulaire de réservation
    $userId = $_POST['usersId'];
    $reservationDate = $_POST['reservationDate'];
    $courseId = $_POST['coursesId'];

    // Récupération de toutes les données de l'utilisateur à partir de la base de données
    $stmt = $pdo->prepare("SELECT u.*, c.coursesTitle FROM users u JOIN reservation r ON u.usersId = r.usersId JOIN courses c ON r.coursesId = c.idCourses WHERE u.usersId = :usersId AND r.coursesId = :coursesId");
    $stmt->execute(['usersId' => $userId, 'coursesId' => $courseId]);
    $user = $stmt->fetch();


    // Envoyer un e-mail de notification
    if ($resultReservation) {
        $mail = new PHPMailer(true); // true active les exceptions

        try {
            // Configuration du serveur SMTP
            $mail->isSMTP();                                                // Utilisation du protocole SMTP
            $mail->Host       = 'smtp-academiepourtous.alwaysdata.net';     // Adresse du serveur SMTP
            $mail->SMTPAuth   = true;                                       // Activation de l'authentification SMTP
            $mail->Username   = 'academiepourtous@alwaysdata.net';          // Nom d'utilisateur SMTP
            $mail->Password   = 'Testone123456';                            // Mot de passe SMTP
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;                // Chiffrement TLS
            $mail->Port       = 465;                                        // Port SMTP

            // Destinataire et expéditeur
            $mail->setFrom('academiepourtous@alwaysdata.net', 'Academie pour Tous - Demande de reservation');
            $mail->addAddress('academiedutest@gmail.com', 'Administrateur');

            // Contenu du message
            $mail->isHTML(true);                                        // Format HTML
            $mail->Subject = 'Une reservation a ete effectue';
            $mail->Body    = "<p>Une nouvelle réservation a été effectuée.</p>" .
                "<ul>".
                "<li><b>Nom:</b> {$user['nom']}</li>" .
                "<li><b>Prénom:</b> {$user['prenom']}</li>" .
                "<li><b>Adresse e-mail:</b> {$user['mail']}</li>" .
                "<li><b>Téléphone:</b> {$user['mobile']}</li>" .
                "<li><b>Cours:</b> <span style='color:red;'>{$user['coursesTitle']}</span></li>"  .
                "<li><b>Date de réservation :</b> <span style='color:red;'><b>$reservationDate</b></span></li>" .
            "</ul>"
            .
                "<p>L'equipe de l'académie pour tous ! <br> Ne pas répondre a ce mail merci</p>"
            ;
            // Envoi du message
            $mail->send();
           // echo 'Le message a été envoyé a ladministrateur';


            // Configuration du message de confirmation pour l'utilisateur
            $mailConfirmation = new PHPMailer(true);
            $mailConfirmation->isSMTP();
            $mailConfirmation->Host = 'smtp-academiepourtous.alwaysdata.net';
            $mailConfirmation->SMTPAuth = true;
            $mailConfirmation->Username = 'academiepourtous@alwaysdata.net';
            $mailConfirmation->Password = 'Testone123456';
            $mailConfirmation->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
            $mailConfirmation->Port = 465;

            $mailConfirmation->setFrom('academiepourtous@alwaysdata.net', 'Academie pour Tous - Confirmation de reservation');
            $mailConfirmation->addAddress($user['mail'], $user['prenom'] . ' ' . $user['nom']);

            $mailConfirmation->isHTML(true);
            $mailConfirmation->Subject = 'Confirmation de votre reservation';
            $mailConfirmation->Body = "<p>Bonjour {$user['prenom']},</p>" .
                "<p>Nous vous confirmons la réservation du cours de <b>{$user['coursesTitle']}</b> pour la date suivante : <b><span style='color:red;'><b>$reservationDate</b></span></b>.</p>" .
                "<p>Merci de votre confiance.</p>".
                "<p>Nous vous recontacterons dès que possible pour confirmer la réservation</p>".
                "<p>Lequipe de lacademie pour tous vous souhaite une bonne journée</p>".
                "<img src='https://i.ibb.co/bBqf3d1/logo-transparent.png' alt='Logo de lAcademie pour Tous' style='display:block;margin-top:20px;width: 100px;height: 100px'>"
            ;

            // Envoi du message de confirmation à l'utilisateur
            $mailConfirmation->send();
//            echo 'Lemessage de confirmation a été envoyé à l\'utilisateur.';

        } catch (Exception $e) {
            echo "Erreur lors de l'envoi du message : {$mail->ErrorInfo}";
        }
    }

    return $resultReservation;
}