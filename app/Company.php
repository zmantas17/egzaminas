<?php

namespace Imones;

use PDO;
use PDOException;

class Company {
    protected $pdo;
    private $name;
    private $code;
    private $pvm_code;
    private $address;
    private $phone;
    private $email;
    private $activity;
    private $owner;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function createCompany($company){
        $this->name = $company['name'];
        $this->code = $company['code'];
        $this->pvm_code = $company['pvm_code'];
        $this->address = $company['address'];
        $this->phone = $company['phone'];
        $this->email = $company['email'];
        $this->activity = $company['activity'];
        $this->owner = $company['owner'];

        $this->insertCompany();
    }
    
    public function insertCompany(){
        try {
            $query = "INSERT INTO `imones` (`pavadinimas`, `kodas`, `pvm_kodas`, `adresas`, `telefonas`, 
            `elpastas`, `veikla`, `vadovas`) VALUES (:name, :code, :pvm_code, :address, :phone, :email, 
            :activity, :owner)";
            $stmt = $this->pdo->prepare($query);
            $stmt->bindParam(':name', $this->name, PDO::PARAM_STR);
            $stmt->bindParam(':code', $this->code, PDO::PARAM_STR);
            $stmt->bindParam(':pvm_code', $this->pvm_code, PDO::PARAM_STR);
            $stmt->bindParam(':address', $this->address, PDO::PARAM_STR);
            $stmt->bindParam(':phone', $this->phone, PDO::PARAM_STR);
            $stmt->bindParam(':email', $this->email, PDO::PARAM_STR);
            $stmt->bindParam(':activity', $this->activity, PDO::PARAM_STR);
            $stmt->bindParam(':owner', $this->owner, PDO::PARAM_STR);

            $stmt->execute();

            header('Location: /');
        } catch (PDOException $ex) {
            echo $ex->getMessage();
        }
    }
    
    public function allCompanies($page){
        $stmt = $this->pdo->prepare('SELECT * FROM imones LIMIT 6 OFFSET ' . ($page - 1) * 6);

        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }


    public function viewCompany($id){
        try {
            $stmt = $this->pdo->prepare("SELECT * FROM imones WHERE `id` = :id");
            $stmt->bindValue(":id", $id, PDO::PARAM_INT);
            $stmt->execute();

            return $stmt->fetch(PDO::FETCH_ASSOC);
        } catch(PDOException $ex) {
            echo $ex->getMessage();
        }
    }

    public function deleteCompany($id) {
        try {
            $stmt = $this->pdo->prepare("DELETE FROM imones WHERE `id` = :id");
            $stmt->bindValue(":id", $id, PDO::PARAM_INT);
            $stmt->execute();
            header('Location:/');

        } catch(PDOException $ex) {
            echo $ex->getMessage();
        }
    }

    public function searchCompany($searchString) {
        try {
            $search = '%'.$searchString['search'].'%';
            $stmt = $this->pdo->prepare("SELECT * FROM imones WHERE `pavadinimas` LIKE :searchString OR `kodas` LIKE :searchString");
            $stmt->bindValue(":searchString", $search, PDO::PARAM_STR);
            $stmt->execute();

            $result = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($result == []) {
                echo "❌ Rezultatų nerasta ❌";
            } else {
                header('Location:/imone/'.$result['id']);
            }
            
        } catch(PDOException $ex) {
            echo $ex->getMessage();
        }
    }

    public function editCompany($id, $formData){
        try {
            $query = "UPDATE `imones` SET `pavadinimas` = :name, `kodas` = :code, `pvm_kodas` = :pvm_code, `adresas` = :address, `telefonas` = :phone, `elpastas` = :email, `veikla` = :activity, `vadovas` = :owner WHERE `id` = :id";
            $stmt = $this->pdo->prepare($query);
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            $stmt->bindParam(':name', $formData['name'], PDO::PARAM_STR);
            $stmt->bindParam(':code', $formData['code'], PDO::PARAM_STR);
            $stmt->bindParam(':pvm_code', $formData['pvm_code'], PDO::PARAM_STR);
            $stmt->bindParam(':address', $formData['address'], PDO::PARAM_STR);
            $stmt->bindParam(':phone', $formData['phone'], PDO::PARAM_STR);
            $stmt->bindParam(':email', $formData['email'], PDO::PARAM_STR);
            $stmt->bindParam(':activity', $formData['activity'], PDO::PARAM_STR);
            $stmt->bindParam(':owner', $formData['owner'], PDO::PARAM_STR);

            $stmt->execute();
            header('Location: /');

        } catch (PDOException $ex) {
            echo $ex->getMessage();
        }
    }


}