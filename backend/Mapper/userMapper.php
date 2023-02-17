<?php
include_once 'dbh.class.php';

class UserMapper extends Dbh
{

    private $conn;
    private $query;

    public function __construct()
    {
        $this->conn = $this->getConnection();
    }

    public function getUserByID($userId)
    {
        $query = "SELECT * from userclass where userId=:userId";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":userId", $userId);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return  $result;
    }

    public function getUserByUsername($username)
    {
        $query = "SELECT * from userclass where username=:username";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":username", $username);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result;
    }

    public function getUserByRole($role)
    {
        $query = "SELECT * from userclass where role=:role";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $result = $stmt->fetchAll();
    }

    public function getNrUsers()
    {
        $query = "SELECT count(*) as nrUsers from userclass";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $result = $stmt->fetchAll();
    }

    public function getAllUsers()
    {
        $query = "SELECT * from userclass";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        $result = $stmt->fetchAll();
        return $result;
    }

    public function insertUser(\SimpleUser $user)
    {
        $query = "INSERT INTO userclass(username,password,email,role) VALUES(:name,:pass,:email,:role)";

        $stmt = $this->conn->prepare($query);

        $username = $user->getUsername();
        $pass = $user->getPassword();
        $email = $user->getEmail();
        $role = $user->getRole();

        $passwordEncrypted = password_hash($pass, PASSWORD_BCRYPT);

        $stmt->bindParam(":name", $username);
        $stmt->bindParam(":pass", $passwordEncrypted);
        $stmt->bindParam(":email", $email);
        $stmt->bindParam(":role", $role);
        $stmt->execute();
    }

    public function deleteUser($userId)
    {
        $this->query = "delete from userclass where userId=:userId";
        $statement = $this->conn->prepare($this->query);
        $statement->bindParam(":userId", $userId);
        $statement->execute();
    }

    public function editUser(\SimpleUser $user, $userId)
    {
        $query = "UPDATE userclass SET username=:username,email=:email
        ,role=:role WHERE userId=:userId";
        var_dump($user);
        $statement = $this->conn->prepare($query);
        $name = $user->getUsername();
        $email = $user->getEmail();
        $role = $user->getRole();

        $statement->bindParam(":username", $name);
        $statement->bindParam(":email", $email);
        $statement->bindParam(":role", $role);
        $statement->bindParam(":userId", $userId);
        $statement->execute();
    }
}
