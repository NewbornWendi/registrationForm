<?php
session_start();
class UserData{
    public $pdo;
    public function __construct(PDO $pdo){
        $this->pdo=$pdo;        
    }
    public function findOneUser($login, $password){
        $q="SELECT * FROM  users WHERE login= :login and password = :password";
        $stmt=$this->pdo->prepare($q);
        $stmt->execute(["login"=>$login, "password"=>$password]);
        return $stmt->fetch();

    }
    public function loginUser($login, $password){
        $res=$this->findOneUser($login, $password);
        if($res){
            $_SESSION["auth"]=true;
            $_SESSION["id_user"]=$res->id_user;
            $_SESSION["nickname"]=$res->nickname;
        }
        else{
            $_SESSION["auth"]=false;
        }
    }
    public function regUser($data)
    {
        $res = $this->findOneUser($data["login"], $data["password"]);
        if ($res) {
            $_SESSION["error"] = "Такой пользователь уже существует";
        } else {
            $q = "INSERT INTO users(login, password, nickname) VALUES(:login, :password, :nickname)";
            $stmt = $this->pdo->prepare($q);
            $stmt->execute([
                "login" => $data["login"],
                "password" => $data["password"],
                "nickname" => $data["nickname"]]);
            $_SESSION["error"] = "";
            $_SESSION["auth"]=true;
            $_SESSION["id_user"]=$this->pdo->lastInsertId();
        }
    }
    public function getImgUser($id_user){
        $q="SELECT name_img FROM  images, users WHERE users.id_user=images.id_user and users.id_user = :id_user";
        $stmt=$this->pdo->prepare($q);
        $stmt->execute(["id_user"=>$id_user]);
        return $stmt->fetchAll();
    }
    public function addImgUser($nameIMG){
        $id = $this->pdo->lastInsertId();

        $z="INSERT INTO images(id_user,name_img) VALUES (:id, :img)";
        $stmt=$this->pdo->prepare($z);
        $stmt->execute(["id"=>$id, "img"=>$nameIMG]);
    }
    public function logout(){
        unset($_SESSION["auth"]);
        session_destroy;
    }
}