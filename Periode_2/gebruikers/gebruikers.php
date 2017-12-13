<?php
class User{
    private $username = "";
    private $password = "";

    public function __construct($username, $password){
        $this->username = $username;
        $this->password = $password;
    }

    public function getUsername(){
        return $this->username . "<br>";
    }

    public function getPassword(){
        return $this->password . "<br>";
    }

    public function passwordCheck($password){
        if($this->password === $password){
            return 'This is the right password! <br>';
        } else {
            return 'This is the wrong password! <br>';
        }
    }

    public function changePassword($password, $changePassword){
        if($this->password === $password){
            $hashedPassword = $this->encryptPassword($changePassword);
            $this->password = $hashedPassword;
        } else {
            return 'No valid password! <br>';
        }
    }

    private function encryptPassword($password) {
        return (password_hash($password, PASSWORD_BCRYPT));
    }
}
class SuperUser extends User{
    public function doSuperviserStuff(){
        return 'Superviser Stuff <br>';
    }
}
class NormalUser extends User{
    public function doNormalUserStuff(){
        return 'Normal Stuff <br>';
    }
}
?>