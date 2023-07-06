<?php






    if (isset($_SESSION['usersId'])) {
        $bddPDO = connexionBDD();
        $userid = $_SESSION['usersId'];
        $requetes = "SELECT * FROM form_student WHERE usersId = $userid";
        $results = $bddPDO->query($requetes);
        $resultsform = $results->fetchAll(PDO::FETCH_ASSOC);
    }






function addFormStudent($usersId,$annee_scolaire,$niveau,$etablissement,$classe,$name_student,$lastname_student,$sexe,$nationalite,$lieu,$adresse_student,$postal_student,$commune_student,$nom_resp,$prenom_resp,$pere,$mere,$tuteur,$autre,$profession,$situation,$adresse_resp,$postal_resp,$commune_resp,$phone,$mobile,$mobilepro,$mail,$urgent){
    require_once('models/database.php');
        $bddPDO=connexionBDD();
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
    $requete = $bddPDO->prepare('INSERT INTO form_student(usersId,annee_scolaire,`niveau`, `etablissement`, `classe`, `name_student`, `lastname_student`, `sexe`, `nationalite`, `lieu`, `adresse_student`, `postal_student`, `commune_student`, `nom_resp`, `prenom_resp`, `pere`, `mere`, `tuteur`, `autre`, `profession`, `situation`, `adresse_resp`, `postal_resp`, `commune_resp`, `phone`, `mobile`, `mobilepro`, `mail`, `urgent`) VALUES (:usersId,:annee_scolaire, :niveau, :etablissement,:classe, :name_student, :lastname_student, :sexe, :nationalite, :lieu, :adresse_student, :postal_student, :commune_student, :nom_resp, :prenom_resp, :pere, :mere, :tuteur, :autre, :profession, :situation, :adresse_resp,:postal_resp, :commune_resp, :phone, :mobile, :mobilepro, :mail, :urgent)');
    $usersId = $_SESSION['usersId'];
    $requete->bindValue(':usersId', $usersId);
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
