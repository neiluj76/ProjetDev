<?php
class pdom
{
    private static $serveur='mysql:host=localhost';
    private static $user='admin';
    private static $bdd='dbname=getmeanswers';
    private static $leMdp='AzertY!59000';
    private static $monPdo;
    private static $monPdoGsb = null;

    /**
     * Constructeur privé, crée l'instance de PDO qui sera sollicitée
     * pour toutes les méthodes de la classe
     */
    private function __construct(){
        pdom::$monPdo = new PDO(pdom::$serveur.';'.pdom::$bdd, pdom::$user, pdom::$leMdp);
        pdom::$monPdo->query("SET CHARACTER SET utf8");

    }
    public function _destruct(){
        pdom::$monPdo = null;
    }
    /**
     * Fonction statique qui crée l'unique instance de la classe

     * Appel : $instancePdoGsb = PdoGsb::getPdoGsb();

     * @return l'unique objet de la classe PdoGsb
     */
    public  static function getPdo(){
        if(pdom::$monPdoGsb==null){
            pdom::$monPdoGsb= new pdom();
        }
        return pdom::$monPdoGsb;
    }


    function connexionUser($data)
    {
        $id = $data['params']['id'];
        $mdp = $data['params']['mdp'];

        $mysqli = new mysqli("localhost", "admin", "AzertY!59000", "getmeanswers");


        $mysqli->real_query("SELECT * FROM `utilisateurs` WHERE login = '.$id.' and mdp = '.$mdp.'");
        $res = $mysqli->use_result();

        var_dump($res);
        echo $res[1];

    }
}

?>