<?php
    include_once '../backend/SuperClass/AdminUser.php';
    include_once '../backend/SuperClass/SimpleUser.php';
    require_once '../backend/Mapper/userMapper.php';


    if(isset($_POST['login-btn'])){
        session_start();
        $login = new Login ($_POST);
        $login->verifyData();
    }
    else{
        header("Location:../HTMLfiles/Login.php");
    }

    class Login {
        private $username="";
        private $password="";
    

        public function __construct($fromData){
            $this->username=$fromData['username'];
            $this->password=$fromData['password'];
        }

        public function verifyData(){
            if($this->variablesNotDefinedWell($this->username, $this->password)){
                header("Location:../HTMLfiles/Login.php?error=VariablesNotDefinedWell");
            }
            else if ($this->usernameAndPasswordCorrect($this->username, $this->password)){
                header("Location:../HTMLfiles/Homepage.php?success=LoggedIn");
            }
            else{
                header("Location:../HTMLfiles/Login.php?error=SQL_ERROR");
            }
        }

        private function variablesNotDefinedWell($username, $password){
            if(empty($username) || empty($password)){
                return true;
            }
            return false;
        }

        private function usernameAndPasswordCorrect($username, $password){
            $mapper = new UserMapper();
            $user = $mapper->getUserByUsername($username);

            if ($user == null || count($user) == 0) return false;
            else if (password_verify($password, $user['password'])){
                if ($user['role'] == 1) {
                    $obj = new AdminUser($user['userid'], $user['username'],$user['email'] , $user['password'], $user['role']);
                    $obj->setSession();
                } else {
                    $obj = new SimpleUser($user['userid'], $user['username'], $user['email'],$user['password'], $user['role']);
                    $obj->setSession();
                }
                return true;
            }
            else{
                return false;
            }
        }
    }
?>