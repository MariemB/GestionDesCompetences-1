<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of User
 *
 * @author Med Amine
 */
class User{

// Attributs
   //id:
  private $user = array(
                    'id_user' => null,
                    'login' => null,
                    'pwd' => null,
                    'email' => null,
                    'nom_user' => null,
                    'prenom_user' => null,
                    'hire_date' => null,
                    'id_service' => null,
                    'privilege' => null,
                    'date_naiss' => null,
                    'etat_civil' => null,
                    'adresse' => null,
                    'tel_mobile' => null,
                    'diplome' => null,
                    'annee_dip' => null,
                    'last_login' => null,
                    'expire_date' => null,
                    'active' => null
                  );

  // Constructeurs

    function __construct($user = array()){
            $this->user['login'] = isset($user['login'])? $user['login'] : '' ;
            $this->user['pwd'] = isset($user['pwd'])? $user['pwd'] : '' ;
            $this->user['email'] = isset($user['email'])? $user['email'] : '' ;
            $this->user['nom_user'] = isset($user['nom_user'])? $user['nom_user'] : '' ;
            $this->user['prenom_user'] = isset($user['prenom_user'])? $user['prenom_user'] : '' ;
            $this->user['genre'] = isset($user['genre'])? $user['genre'] : '' ;
            $this->user['hire_date'] = isset($user['hire_date'])? $user['hire_date'] : '' ;
            $this->user['id_service'] = isset($user['id_service'])? $user['id_service'] : 0 ;
            $this->user['privilege'] = isset($user['privilege'])? $user['privilege'] : -1 ;
            $this->user['date_naiss'] = isset($user['date_naiss'])? $user['date_naiss'] : '' ;
            $this->user['etat_civil'] = isset($user['etat_civil'])? $user['etat_civil'] : '' ;
            $this->user['adresse'] = isset($user['adresse'])? $user['adresse'] : '' ;
            $this->user['tel_mobile'] = isset($user['tel_mobile'])? $user['tel_mobile'] : '' ;
            $this->user['diplome'] = isset($user['diplome'])? $user['diplome'] : '' ;
            $this->user['annee_dip'] = isset($user['annee_dip'])? $user['annee_dip'] : 1930 ;
            $this->user['last_login'] = isset($user['last_login'])? $user['last_login'] : '' ;
            $this->user['expire_date'] = isset($user['expire_date'])? $user['expire_date'] : '' ;
            $this->user['active'] = isset($user['active'])? $user['active'] : 2 ;

	}

	//Getters

        public function getId_User(){
            return $this->user['id_user'];
        }

        public function getLogin(){
            return $this->user['login'];
        }

        public function getPwd(){
            return $this->user['pwd'];
        }

        public function getEmail(){
            return $this->user['email'];
        }
        
	public function getNom_User(){
            return $this->user['nom_user'];
        }

	public function getPrenom_User(){
            return $this->user['prenom_user'];
        }

        public function getGenre(){
            return $this->user['genre'];
        }

        public function getHire_Date(){
            return $this->user['hire_date'];
        }

        public function getId_Service(){
            return $this->user['id_service'];
        }

        public function getPrivilege(){
            return $this->user['privilege'];
        }

	public function getDate_Naiss(){
            return $this->user['date_naiss'];
        }

        public function getEtat_Civil(){
            return $this->user['etat_civil'];
        }

        public function getAdresse(){
            return $this->user['adresse'];
        }

        public function getTel_Mobile(){
            return $this->user['date_naiss'];
        }

        public function getDiplome(){
            return $this->user['diplome'];
        }

        public function getAnnee_Dip(){
            return $this->user['annee_dip'];
        }

        public function getLast_Login(){
            return $this->user['last_login'];
        }

        public function getExpire_Date(){
            return $this->user['expire_date'];
        }

        public function getActive(){
            return $this->user['active'];
        }

	// Setters

	public function setId_User($id){
            $this->user['id_user'] = $id;
        }

        public function setLogin($login){
            $this->user['login'] = $login;
        }

        public function setPwd($pwd){
            $this->user['pwd'] = $pwd;
        }

        public function setEmail($email){
            $this->user['email'] = $email;
        }

	public function setNom_User($nom_user){
            $this->user['nom_user'] = $nom_user;
        }

	public function setPrenom_User($prenom_user){
            $this->user['prenom_user'] = $prenom_user;
        }

        public function setGenre($genre){
            $this->user['genre'] = $genre;
        }

        public function setHire_Date($hire_date){
            $this->user['hire_date'] = $hire_date;
        }

        public function setId_Service($id_service){
            $this->user['id_service'] = $id_service;
        }

        public function setPrivilege($privilege){
            $this->user['privilege'] = $privilege;
        }

	public function setDate_Naiss($date_naiss){
            $this->user['date_naiss'] = $date_naiss;
        }

        public function setEtat_Civil($etat_civil){
            $this->user['etat_civil'] = $etat_civil;
        }

        public function setAdresse($adresse){
            $this->user['adresse'] = $adresse;
        }

        public function setTel_Mobile($tel_mobile){
            $this->user['date_naiss'] = $tel_mobile;
        }

        public function setDiplome($diplome){
            $this->user['diplome'] = $diplome;
        }

        public function setAnnee_Dip($annee_dip){
            $this->user['annee_dip'] = $annee_dip;
        }

        public function setLast_Login($last_login){
            $this->user['last_login'] = $last_login;
        }

        public function setExpire_Date($expire_date){
            $this->user['expire_date'] = $expire_date;
        }

        public function setActive($active){
            $this->user['active'] = $active;
        }

	/*public function Ajouter(){
	//connexion à la base:
	try {
  $engine = 'mysql:host=localhost;dbname=novatrice';
  $user = 'root';
  $password = '';
  $options = array(PDO::MYSQL_ATTR_INIT_COMMAND    => "SET NAMES utf8");
  $connection = new PDO( $engine, $user, $password, $options);
} catch ( Exception $e )
 {
  echo "Connection à MySQL impossible : ", $e->getMessage();
  die();
}
	//création de la requête SQL:
	$requete = 'INSERT INTO user(nom_user, prenom_user, date_naiss, adresse, etat_civil, tel_mobile, diplome, annee_dip, hire_date, last_login, expire_date, privilege) VALUES(? , ? , ? , ? , ? , ? , ? , ? , ? , ? , ? , ?)';
	$prepa = $connexion->prepare($requete);
	$fichier = file('ajouterCollaborateur.html');
	foreach ($fichier as $ligne ){
		$l = str_getcsv($ligne, '|');
			$prepa->execute($l);
			}
			$prepa->closeCursor();
				//VALUES ( '".$nom_user->getNom()."', '".$prenom_user->getPrenom()."', '".$date_naiss->getDateNaiss()."', '".$etat_civil->getEtat()."', '".$adresse->getAdresse()."', '".$tel_mobile->getTel()."', '".$diplome->getDiplome()."', '".$annee_dip->getAnneeDip()."', '".$hire_date->getHire()."', '".$last_login->getLast()."', '".$expire_date->getExpire()."', '".$privilege->getPri()."')" ;

		}
	}
	$user = new User();*/
}
?>
