<?php 

     namespace App\Controllers;
     use App\Models\User;
     use App\Models\UserModels;

     class UserController{
          
        private $db;
        private $userModel;

        public function __construct()
        {
            session_start();
            if(!isset($_SESSION['user_name'])){ 
                header("Location: /login");
            }

            $database = new Database();
            $this->db = $database->getConnection();
            $this->userModel = new UserModels($this->db);
        }

        public function index(){
            $stmt = $this->userModel->users();
            $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
            require_once '../App/Views/user/index.php';
        }
    } 


