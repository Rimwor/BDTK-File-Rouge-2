<?php

    class User { // Beata

        // PROPRIETES //////////////////////////////////////////////////////// //
        private $utilisateur_id;
        private $utilisateur_mdp;
        private $utilisateur_login;
        private $utilisateur_mail;
        private $utilisateur_nom;
        private $utilisateur_prenom;
        private $utilisateur_adr_num_rue;
        private $utilisateur_adr_cp;
        private $utilisateur_tel;
        private $ville_id;
        private $role_id;
        
        // CONSTRUCT ///////////////////////////////////////////////////////// //
        /**
         * Object Construction
         *
         * @param string $utilisateur_id                ID UTILISATEUR
         * @param string $utilisateur_mdp               MDP UTILISATEUR
         * @param string $utilisateur_login             LOGIN UTILISATEUR
         * @param string $utilisateur_mail              MAIL UTILISATEUR
         * @param string $utilisateur_nom               NOM UTILISATEUR
         * @param string $utilisateur_prenom            PRENOM ID UTILISATEUR
         * @param string $utilisateur_adr_num_rue       ADRESSE ID UTILISATEUR
         * @param string $utilisateur_adr_cp            CODE POSTALE DE LA VILLE 
         * @param string $utilisateur_tel               NUMERO DE TELEPHONE UTILISATEUR
         * @param string $ville_id                      VILLE ID DE LA UTILISATEUR
         * @param string $role_id                       ROLE ID DE LA UTILISATEUR
         */
        public function __construct(string $utilisateur_id,
                                    string $utilisateur_mdp,
                                    string $utilisateur_login,
                                    string $utilisateur_mail,
                                    string $utilisateur_nom,
                                    string $utilisateur_prenom,
                                    string $utilisateur_adr_num_rue,
                                    string $utilisateur_adr_cp,
                                    string $utilisateur_tel,
                                    string $ville_id,
                                    string $role_id) {

            $this->setID($utilisateur_id);
            $this->setMDP($utilisateur_mdp);
            $this->setLOGIN($utilisateur_login);
            $this->setMAIL($utilisateur_mail);
            $this->setNOM($utilisateur_nom);
            $this->setPRENOM($utilisateur_prenom);
            $this->setADR($utilisateur_adr_num_rue);
            $this->setCP($utilisateur_adr_cp);
            $this->setTEL($utilisateur_tel);
            $this->setVILLE($ville_id);
            $this->setROLE($role_id);
        }
        
        // GETTERS* and SETTERS* /////////////////////////////// // ACCESSEURS //
        public function getID() {                                // GET ID     
            return $this->utilisateur_id;                        // SET ID
        }
        private function setID($utilisateur_id) {
            $this->pil = $utilisateur_id;
        }
        
        public function getMDP() {                               // GET MDP
            return $this->utilisateur_mdp;                       // SET MDP
        }
        private function setMDP($utilisateur_mdp) {
            $this->pil = $utilisateur_mdp;
        }

        public function getLOGIN() {                             // GET LOGIN
            return $this->utilisateur_login;                     // SET LOGIN
        }
        private function setLOGIN($utilisateur_login) {
            $this->pil = $utilisateur_login;
        }

        public function getMAIL() {                              // GET MAIL
            return $this->utilisateur_mail;                      // SET MAIL
        }
        private function setMAIL($utilisateur_mail) {
            $this->pil = $utilisateur_mail;
        }

        public function getNOM() {                               // GET NOM
            return $this->utilisateur_nom;                     // SET NOM
        }
        private function setNOM($utilisateur_nom) {
            $this->pil = $utilisateur_nom;
        }

        public function getPRENOM() {                            // GET PRENOM
            return $this->utilisateur_prenom;                     // SET PRENOM
        }
        private function setPRENOM($utilisateur_prenom) {
            $this->pil = $utilisateur_prenom;
        }

        public function getADR() {                               // GET ADR_NUM_RUE
            return $this->utilisateur_adr_num_rue;               // SET ADR_NUM_RUE
        }
        private function setADR($utilisateur_adr_num_rue) {
            $this->pil = $utilisateur_adr_num_rue;
        }

        public function getCP() {                                // GET ADR_CP
            return $this->utilisateur_adr_cp;                    // SET ADR_CP
        }
        private function setCP($utilisateur_adr_cp) {
            $this->pil = $utilisateur_adr_cp;
        }

        public function getTEL() {                               // GET TEL
            return $this->utilisateur_tel;                       // SET TEL
        }
        private function setTEL($utilisateur_tel) {
            $this->pil = $utilisateur_tel;
        }

        public function getVILLE() {                             // GET VILLE ID
            return $this->ville_id;                              // SET VILLE ID
        }
        private function setVILLE($ville_id) {
            $this->pil = $ville_id;
        }

        public function getROLE() {                              // GET ROLE ID
            return $this->role_id;                               // SET ROLE ID
        }
        private function setROLE($role_id) {
            $this->pil = $role_id;
        }
        
        // STRING ............................................................ //
        /**
         * DESCRIPTION
         *
         * @return string
         */
        public function __toString() {
            $message = 
                        "<form method='POST' action='index.php?action=affichageDetails'>"
                        . "<table class='table table-striped table-light'>"

                            . "<thead>"

                                . "<tr>"
                                    . "<th scope='col'>" . "Nom" . "</th>"
                                    . "<th scope='col'>" . "Prenom" . "</th>"
                                    . "<th scope='col'>" . "Mail" . "</th>"
                                    . "<th scope='col'>" . "Tel" . "</th>"
                                    . "<th scope='col'>" . "Role" . "</th>"
                                    . "<th scope='col'>" . "Détails" . "</th>"
                                . "</tr>"

                            . "</thead>"

                            . "<tbody>"

                                . "<td>" . $this->getNOM() . "</td>"
                                . "<td>" . $this->getPRENOM() . "</td>"
                                . "<td>" . $this->getMAIL() . "</td>"
                                . "<td>" . $this->getTEL() . "</td>"
                                . "<td>" . $this->getROLE() . "</td>"
                                . "<input type='hidden' name='id' value='" . $this->getID() . "'>"
                                . "<input type='hidden' name='mdp' value='" . $this->getMDP() . "'>"
                                . "<input type='hidden' name='login' value='" . $this->getLOGIN() . "'>"
                                . "<input type='hidden' name='mail' value='" . $this->getMAIL() . "'>"
                                . "<input type='hidden' name='nom' value='" . $this->getNOM() . "'>"
                                . "<input type='hidden' name='prenom' value='" . $this->getPRENOM() . "'>"
                                . "<input type='hidden' name='adr' value='" . $this->getADR() . "'>"
                                . "<input type='hidden' name='cp' value='" . $this->getCP() . "'>"
                                . "<input type='hidden' name='tel' value='" . $this->getTEL() . "'>"
                                . "<input type='hidden' name='ville' value='" . $this->getVILLE() . "'>"
                                . "<input type='hidden' name='role' value='" . $this->getROLE() . "'>"
                                . "<td>" . "<input type='submit' value='voir'>" . "</td>"
                            . "</tbody>"

                        . "</table>"
                        . "</form>";

            return $message;
        }
    }

?>