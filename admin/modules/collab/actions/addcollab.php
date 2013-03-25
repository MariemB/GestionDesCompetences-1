<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

$user = array(
                    'login' => $_POST['login'],
                    'pwd' => $_POST['pwd1'],
                    'email' => $_POST['email'],
                    'nom_user' => $_POST['nom'],
                    'prenom_user' => $_POST['prenom'],
                    'hire_date' => "2013-01-01",
                    'id_service' => 1,
                    'privilege' => 0,
                    'date_naiss' => $_POST['date_naiss'],
                    'etat_civil' => $_POST['etat_civil'],
                    'adresse' => $_POST['adresse'],
                    'tel_mobile' => $_POST['tel_mobile'],
                    'diplome' => $_POST['diplome'],
                    'annee_dip' => "2006",
                    'last_login' => "2013-01-01",
                    'expire_date' => "2014-01-01",
                    'active' => $_POST['state']
                  );
$user = new User($user);

$result = DAOFactory::getDAOFactory()->getUserDAO()->insertUser($user);
if($result) {
    echo 1;
}else {
    echo 0;
}

?>
