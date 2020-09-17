<?php require_once APPROOT .'/config/config.php';



    class User{
        private $db;
        private $user_log;

        public function __construct(){
            $this->db = new Database;
            $this->user_log = TB_USERLOG;
        }

        public function isUserValid($email,$password){
            $isValid = false;
            $row = $this->findUserByEmail($email);
            if(isset($row) and isset($row->password)){
                $hashed_password = $row->password;
                if($password == $hashed_password)
                    $isValid = true;
            }
            
            return $isValid;
            

        }

        public function findUserByEmail($email){

            $this->db->query("SELECT * FROM $this->user_log WHERE email = :email");
            $this->db->bind(':email', $email);
            $row = $this->db->single();
            return $row;
            
        }

        public function getUserType($username){
            $row = $this->findUserByEmail($username);
            return $row->usertype;

            
        }


       

    }