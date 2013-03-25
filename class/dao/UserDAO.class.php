<?php

require_once "class/business/User.php";

include_once "lib/functions.php";
include_once(TECH_PATH. "/Singleton.class.php" );

include "IUserDAO.interface.php";

/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of MYSQLAdminDAO
 *
 * @author Med Amine
 */

final class UserDAO implements IUserDAO {
    private $table = "user";
    private static $instance = null;
    private $cnx;

    public function __construct(){
        try{
            $this->cnx = Singleton::getInstance()->getConnection();
        }catch(PDOException $e) {
            echo "Error : ".$e->getMessage()."<br />";
            echo "Code : ".$e->getCode();
            die();
        }
    }

    public static function getUserDAO() {
        if(!self::$instance instanceof self){
            self::$instance = new UserDAO();
        }
        return self::$instance;
    }

    public function insertUser($user){
        // return boolean
        $added = false;
        $test_exist_user = new User(array($user['email']));
        if(findUser($test_exist_user)) {
            return $added;
        } elseif(!findUser($test_exist_user)){
            try {
                $this->cnx->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $stmt = $this->cnx->prepare(insertQuery($user, $this->table)." LIMIT 1");
                bindValQuery($user, $this->table, $stmt);
                $stmt->execute();
                $added = $stmt->fetch(PDO::FETCH_OBJ);
                $stmt->closeCursor();

                return $added;

            } catch (PDOException $e) {
                echo $e->getMessage();
                return $added;
            }
        }
    }

    /*public function deleteUser($id){
        // return boolean
    }*/


	public  function listUser($privilege){
		
		$this->cnx->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$stmt = $this->cnx->prepare("SELECT nom_user,prenom_user,hire_date FROM user where privilege= :privilege ");
		$stmt->bindValue(':privilege', $privilege);
		$stmt->setFetchMode(PDO::FETCH_ASSOC);
		$stmt->execute();
		$arrValues = $stmt->fetchAll();
		return $arrValues;
		
		 
	}
	
	
    public function findUser($user){
        // return boolean
        $exist = false;
        try {
            $this->cnx->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stmt = $this->cnx->prepare(selectQuery($user, $this->table)." LIMIT 1");
            bindValQuery($user, $this->table, $stmt);
            $stmt->execute();
            $user = $stmt->fetch(PDO::FETCH_OBJ);

            if ($user) {
                $exist = true;
            }

            $stmt->closeCursor();

        } catch (PDOException $e) {
            echo $e->getMessage();
            return $exist;
        }
    }

    /*public function updateUser($user){
        // return User
    }*/

    public function selectUser($user){
        // return User
        try {
            $this->cnx->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stmt = $this->cnx->prepare(selectQuery($user, $this->table)." LIMIT 1");
            bindValQuery($user, $this->table, $stmt);
            $stmt->execute();
            $user = $stmt->fetch(PDO::FETCH_OBJ);
            
            $stmt->closeCursor();

            return $user;

        } catch (PDOException $e) {
            echo $e->getMessage();
            return $user;
        }
    }

    /*public function selectUsers($filtre){
        // return array of Users
    }*/

}
?>
