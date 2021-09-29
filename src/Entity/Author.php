<?php
    namespace App\Entity;

    class Author
    {
        // variables
        private $id;
        private $authFirstName;
        private $authLastName;
        private $authUsername;
        private $authEmail;
        private $authPhoneNumber;
        private $authPassword;
        private $questions;
        private $answers;

        //functions

        // Id Getter and Setter
        public function getId(){return $this->id;} // getters
        public function setId($id){return $this->id = $id;} // setters
        
        // First Name Getter and Setter
        public function getauthFirstName(){return $this->authFirstName;}
        public function setauthFirstName($authFirstName) {return $this->authFirstName = $authFirstName; }
        
        // Last Name Getter and Setter
        public function getauthLastName(){return $this->authLastName;}
        public function setauthLastName($authLastName) {return $this->authLastName = $authLastName; }

        // Username Getter and Setter
        public function getauthUsername(){return $this->authUsername;}
        public function setauthUsername($authUsername) {return $this->authUsername = $authUsername; }

        // Email Getter and Setter
        public function getauthEmail(){return $this->authEmail;}
        public function setauthEmail($authEmail) {return $this->authEmail = $authEmail; }

        // Phone Number Getter and Setter
        public function getauthPhoneNumber(){return $this->authPhoneNumber;}
        public function setauthPhoneNumber($authPhoneNumber) {return $this->authPhoneNumber = $authPhoneNumber; }

        // PAssword Getter and Setter
        public function getauthPassword(){return $this->authPassword;}
        public function setauthPassword($authPassword) {return $this->authPassword = $authPassword; }

        // Questions Getter and Setter
        public function getQuestions()
        {
            if($this->questions== null){
                $this->questions = array();
            }
            return $this->questions;
        }

        public function setQuestions($questions)
        {
            if($this->questions == null){
                $this->questions = array();
            }
            array_push($this->questions, $questions);

        }

        // Answers Getter and Setter
        public function getAnswers()
        {
            if($this->answers== null){
                $this->answers = array();
            }
            return $this->answers;
        }
    
        public function setAnswers($answers)
        {
            if($this->answers == null){
                $this->answers
                 = array();
            }
            array_push($this->answers, $answers);
    
        }
    }

?>