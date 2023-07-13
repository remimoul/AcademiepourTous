<?php

    if (isset($_SESSION['usersId'])) {
        $bddPDO = connexionBDD();
        $userid = $_SESSION['usersId'];
        $requetes = "SELECT * FROM form_student WHERE usersId = $userid";
        $results = $bddPDO->query($requetes);
        $resultsform = $results->fetchAll(PDO::FETCH_ASSOC);
    }


function addFormStudent($usersId,$photoeleve,$annee_scolaire,$niveau,$etablissement,$classe,$name_student,$lastname_student,$sexe,$nationalite,$lieu,$adresse_student,$postal_student,$commune_student,$nom_resp,$prenom_resp,$pere,$mere,$tuteur,$autre,$profession,$situation,$adresse_resp,$postal_resp,$commune_resp,$phone,$mobile,$mobilepro,$mail,$urgent){
    require_once('models/database.php');
        $bddPDO=connexionBDD();
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }


    // Vérifie si un fichier a été téléchargé avec succès et sans erreur
    if (isset($_FILES["photoeleve"]) && $_FILES["photoeleve"]["error"] == UPLOAD_ERR_OK)  {

        // Vérifie si le fichier est une image valide
        $imageFileType = exif_imagetype($_FILES["photoeleve"]["tmp_name"]);
        if($imageFileType != IMAGETYPE_JPEG && $imageFileType != IMAGETYPE_PNG && $imageFileType != IMAGETYPE_GIF) {
            // Si le fichier n'est pas une image valide, affichez un message d'erreur ou redirigez l'utilisateur
            echo "Seuls les fichiers de type JPG, JPEG, PNG et GIF sont autorisés.";
        } else{
            // Récupère l'ID de l'utilisateur en cours
            $id = $_SESSION['usersId'];

        // Définit le dossier de destination pour stocker l'image avec id du lutilisateur connecté
        $targetDir = "./assets/photoid/" . $id . "/";

            // Vérifie si le dossier de destination existe et le crée s'il n'existe pas encore
            if (!file_exists($targetDir)) {
                mkdir($targetDir, 0777, true);
            }

        // Construit le chemin complet du fichier image
        $targetFilePath = $targetDir . basename($_FILES["photoeleve"]["name"]);
        // Déplace le fichier téléchargé vers le dossier de destination
        move_uploaded_file($_FILES["photoeleve"]["tmp_name"], $targetFilePath);

        // Stocke le string du chemin complet du fichier image
        $photoeleve = $targetFilePath;
    }
    }

    $requete = $bddPDO->prepare('INSERT INTO form_student(usersId,photoeleve,annee_scolaire,`niveau`, `etablissement`, `classe`, `name_student`, `lastname_student`, `sexe`, `nationalite`, `lieu`, `adresse_student`, `postal_student`, `commune_student`, `nom_resp`, `prenom_resp`, `pere`, `mere`, `tuteur`, `autre`, `profession`, `situation`, `adresse_resp`, `postal_resp`, `commune_resp`, `phone`, `mobile`, `mobilepro`, `mail`, `urgent`) VALUES (:usersId,:photoeleve,:annee_scolaire, :niveau, :etablissement,:classe, :name_student, :lastname_student, :sexe, :nationalite, :lieu, :adresse_student, :postal_student, :commune_student, :nom_resp, :prenom_resp, :pere, :mere, :tuteur, :autre, :profession, :situation, :adresse_resp,:postal_resp, :commune_resp, :phone, :mobile, :mobilepro, :mail, :urgent)');
    $usersId = $_SESSION['usersId'];
    $requete->bindValue(':usersId', $usersId);
    $requete->bindValue(':photoeleve',$photoeleve);
    $requete->bindValue(':annee_scolaire',$annee_scolaire);
    $requete->bindValue(':niveau',$niveau);
    $requete->bindValue(':etablissement',$etablissement);
    $requete->bindValue(':classe',$classe);
    $requete->bindValue(':name_student',$name_student);
    $requete->bindValue(':lastname_student',$lastname_student);
    $requete->bindValue(':sexe',$sexe);
    $requete->bindValue(':nationalite',$nationalite);
    $requete->bindValue(':lieu',$lieu);
    $requete->bindValue(':adresse_student',$adresse_student);
    $requete->bindValue(':postal_student',$postal_student);
    $requete->bindValue(':commune_student',$commune_student);
    $requete->bindValue(':nom_resp',$nom_resp);
    $requete->bindValue(':prenom_resp',$prenom_resp);
    $requete->bindValue(':pere',$pere);
    $requete->bindValue(':mere',$mere);
    $requete->bindValue(':tuteur',$tuteur);
    $requete->bindValue(':autre',$autre);
    $requete->bindValue(':profession',$profession);
    $requete->bindValue(':situation',$situation);
    $requete->bindValue(':adresse_resp',$adresse_resp);
    $requete->bindValue(':postal_resp',$postal_resp);
    $requete->bindValue(':commune_resp',$commune_resp);
    $requete->bindValue(':phone',$phone);
    $requete->bindValue(':mobile',$mobile);
    $requete->bindValue(':mobilepro',$mobilepro);
    $requete->bindValue(':mail',$mail);
    $requete->bindValue(':urgent',$urgent);

    $resultAddFormStudent = $requete->execute();


    return $resultAddFormStudent;


}
