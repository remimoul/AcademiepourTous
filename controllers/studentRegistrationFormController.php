<?php
require_once('models/formStudentModel.php');

function addOneStudent(){
if (isset($_POST['sendStudent'])){
    $userId = isset($_POST['usersId']);
    // Vérification des cases à cocher "pere", "mere" et "tuteur"
    $pere = isset($_POST['pere']) ? true : false;
    $mere = isset($_POST['mere']) ? true : false;
    $tuteur = isset($_POST['tuteur']) ? true : false;
    // Vérification de la case à cocher "autre" et récupération de la valeur de l'input texte correspondant
    $autre = "";
    if (isset($_POST['autre'])) {
        $autre = isset($_POST['autre']) ? $_POST['autre'] : "";
    }


    if (!empty($_FILES['photoeleve'])&& !empty($_POST['annee_scolaire'])&& !empty($_POST['niveau']) && !empty($_POST['etablissement']) &&!empty($_POST['classe']) &&!empty($_POST['name_student'])
      &&!empty($_POST['lastname_student']) &&!empty($_POST['sexe']) &&!empty($_POST['nationalite']) &&!empty($_POST['lieu']) &&!empty($_POST['adresse_student'])
      &&!empty($_POST['postal_student']) &&!empty($_POST['commune_student'])&&!empty($_POST['nom_resp'])&&!empty($_POST['prenom_resp'])&&!empty($_POST['pere'])
      &&!empty($_POST['mere']) &&!empty($_POST['tuteur'])&&!empty($_POST['autre'])&&!empty($_POST['profession'])&&!empty($_POST['situation'])&&!empty($_POST['adresse_resp'])
      &&!empty($_POST['postal_resp'])&&!empty($_POST['commune_resp'])&&!empty($_POST['phone'])&&!empty($_POST['mobile'])&&!empty($_POST['mobilepro'])&&!empty($_POST['mail'])
      &&!empty($_POST['urgent'])
  ){
    echo "Veuillez remplir les informations";

  }else{
      addFormStudent($userId,$_FILES['photoeleve'],$_POST['annee_scolaire'],$_POST['niveau'],$_POST['etablissement'],$_POST['classe'],$_POST['name_student'],$_POST['lastname_student'],
          $_POST['sexe'],$_POST['nationalite'],$_POST['lieu'],$_POST['adresse_student'],$_POST['postal_student']
          ,$_POST['commune_student'],$_POST['nom_resp'],$_POST['prenom_resp'],$pere,$mere,$tuteur,$autre,$_POST['profession'],
          $_POST['situation'],$_POST['adresse_resp'],$_POST['postal_resp'],$_POST['commune_resp'],$_POST['phone'],$_POST['mobile'],$_POST['mobilepro']
          ,$_POST['mail'],$_POST['urgent']
      );



  }

    header('Location:../views/confirmRegistrationView.php');
    exit();

}

require_once('views/studentRegistrationFormView.php');


}
