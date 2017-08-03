<?php





if (isset($_REQUEST['fonction']) && $_REQUEST['fonction'] != '')
{
	$_REQUEST['fonction']($_REQUEST);
}


function connexion()
{

    $mysqli = new mysqli("localhost", "admin", "AzertY!59000", "getmeanswers");
    if ($mysqli->connect_errno) {
        echo "Echec lors de la connexion � MySQL : (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    }
    else{
        $mysqli->set_charset('utf8');

        return $mysqli;
    }
}

function addUser()
{
    $mysqli = connexion();


    $mysqli->real_query("INSERT INTO `utilisateurs` (`id`, `login`, `mdp`, `nom`) VALUES (NULL, 'alexis', 'alexis', 'alexis')");


}



function connexionUserOld($data)
{
    $id = $data['params']['id'];
    $mdp = $data['params']['mdp'];

    $mysqli = connexion();


    $mysqli->real_query("SELECT * FROM `utilisateurs` WHERE login = '.$id.' and mdp = '.$mdp.'");
    //echo "SELECT * FROM `utilisateurs` WHERE login = '".$id."' and mdp = '".$mdp."'";
    $res = $mysqli->use_result();
    //var_dump($res);
    //var_dump($mysqli);
    $resultat = $res->fetch_array();
    var_dump($resultat);
    $fin = [];

    while ($row = $res->fetch_assoc()) {
        $fin['nom'] = $row['nom'];
        $fin['prenom'] = $row['prenom'];
        echo $fin;
        var_dump($fin);
    }


}

/*
$data = [];
$data2 = [];
$data2['id'] = "alexis";
$data2['mdp'] = "alexis";
$data['params'] = $data2;

connexionUser($data); */


function connexionUser($data)
{
    session_start();
    $id = $data['params']['id'];
    $mdp = $data['params']['mdp'];
    $mysqli = connexion();
    $query = "SELECT * FROM `utilisateurs` WHERE login = '".$id."' and mdp = '".$mdp."'";
    if ($mysqli->multi_query($query)) {
            /* Stockage du premier jeu de résultats */
            if ($result = $mysqli->use_result()) {
                while ($row = $result->fetch_row()) {
                    //printf("%s\n", $row[0]);
                    //var_dump($row);
                    $_SESSION['id'] = $row[0];

                    $_SESSION['mdp'] = $row[1];
                    $_SESSION['nom'] = $row[2];
                    $_SESSION['prenom'] = $row[4];
                    $_SESSION['rang'] = $row[10];
                    echo "nom : ". $_SESSION['nom'];

                    echo json_encode($row);
                }
                $result->close();
        }
    }
    else
    {
        echo json_encode("");
    }

    /* Fermeture de la connexion */
    $mysqli->close();
}


function inscriptionUser($data)
{
    session_start();
    $nom = $data['params']['nom'];
    $prenom = $data['params']['prenom'];
    $login = $data['params']['login'];
    $mdp = $data['params']['mdpSub'];
    $mysqli = connexion();
    //$query = "SELECT * FROM `utilisateurs` WHERE login = '".$id."' and mdp = '".$mdp."'";
    $query = "INSERT INTO `utilisateurs` (`id`, `login`, `mdp`, `nom`,`prenom`, `nombrejeton`, `dateconnexion`, `dateinscription`, `datenaissance`, `listeamis`, `rang`, `lieux`) VALUES (NULL, '".$login."', '".$mdp."','".$nom."','".$prenom."', '10', NULL, NULL, NULL, NULL, '0', NULL);";
    if ($mysqli->multi_query($query)) {
        echo json_encode(true);


        $_SESSION['mdp'] = $mdp;
        $_SESSION['nom'] = $nom;
        $_SESSION['prenom'] = $prenom;
        $_SESSION['rang'] = 2;
        /* Stockage du premier jeu de résultats */
       /* if ($result = $mysqli->use_result()) {
            while ($row = $result->fetch_row()) {
                //printf("%s\n", $row[0]);
                //var_dump($row);
                $_SESSION['id'] = $row[0];

                $_SESSION['mdp'] = $row[1];
                $_SESSION['nom'] = $row[2];
                $_SESSION['prenom'] = $row[4];

                echo "nom : ". $_SESSION['nom'];

                //echo json_encode($row);

            }
            $result->close();
        }*/
    }
    else
    {
        echo json_encode("");
    }

    /* Fermeture de la connexion */
    $mysqli->close();
}

function deconnexionUser($data)
{
    // Note : cela détruira la session et pas seulement les données de session !
    if (ini_get("session.use_cookies")) {
        $params = session_get_cookie_params();
        setcookie(session_name(), '', time() - 42000,
            $params["path"], $params["domain"],
            $params["secure"], $params["httponly"]
        );
    }

    // Finalement, on détruit la session.
    session_destroy();

   echo json_encode(null);

}
