<?php 


    class Database{

        //attributs
        private $_connexion;
       
        //constructeur
        public function __construct()
            {
                //le chemin vers le serveur
                $PARAM_hote='mariadb'; // localhost
                // le port de connection a al base de donnée
                $PARAM_port='3306';
                // le nom de ma base de donnée
                $PARAM_nom_bd='Ballades';
                // le nom de user pour se connecter
                $PARAM_utilisateur='admin';
                //mot de passse du user pour se connecter
                $PARAM_mot_passe='admin1234';
    
                try
                {//le code qu'on essaye de faire 
                   $this->_connexion = new PDO(
                                                'mysql:host='.$PARAM_hote.';dbname='.$PARAM_nom_bd,
                                                 $PARAM_utilisateur,
                                                 $PARAM_mot_passe
                                              );                      
                } // si il échoue 
                catch(Exception $e)
                {
                    echo 'Erreur: '.$e->getMessage().'<br/>';
                    echo 'Code '.$e->getCode();
                }
    
                
            }
        //methodes - comportement
        public function getConnexion()
        {
            return $this->_connexion;
        }

        
    }





   















?>