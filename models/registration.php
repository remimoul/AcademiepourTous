<?php

require_once('models/database.php');
function addUser($nom,$prenom,$mail,$password){
    $bddPDO=connexionBDD();
    $requete = $bddPDO->prepare('INSERT INTO users(nom,prenom,mail,password) VALUES (:nom, :prenom, :mail, :password)');
    $requete->bindValue(':nom',$nom);
    $requete->bindValue(':prenom',$prenom);
    $requete->bindValue(':mail',$mail);
    $requete->bindValue(':password',$password);

    $resultAddUser = $requete->execute();

    return $resultAddUser;

}


function getUserWithMail($mail){

    $bddPDO=connexionBDD();
    $requete ="SELECT * FROM users WHERE mail ='$mail'";
    $result = $bddPDO->query($requete);

    $data = $result->fetch(PDO::FETCH_ASSOC);
    return $data;
}