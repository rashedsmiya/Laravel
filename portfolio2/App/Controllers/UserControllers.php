<?php 

namespace App\Controllers;  

  use App\Config\Database;
  use App\Models\User; 

class UserControllers{

    private $db;
    private $userModel; 

    public function __construct(){

      session_start();   
        if (!isset($_SESSION['user_name'])) {
            header("Location: /login");
        }
         
        // Create a new instance of the Database class
        $database = new Database();
        // Get the database connection
        $this->db = $database->getConnection(); 
        // Create a new instance of the User model
        $this->userModel = new User($this->db);
    }
    public function index(){
         $users = $this->userModel->users();           
         require_once "../App/Views/User/index.php";   
    }
    public function create(){
            
      require_once "../App/Views/User/create.php";   
 }

 public function store()
 {
     if ($_SERVER['REQUEST_METHOD'] === 'POST') {
         // Sanitize input
         $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
         $name = trim($_POST['name']);
         $password = trim($_POST['password']);
         $confirm_password = trim($_POST['confirm_password']);
         $errors = [];

         // Validation checks
         if (empty($name)) {
             $errors[] = "Name field is required.";
         }
         if (empty($email)) {
             $errors[] = "Email field is required.";
         }

         if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
             $errors[] = "Invalid email format.";
         }
         $existingUser = $this->userModel->checkEmailUnique($email);
         if ($existingUser) {
             $errors[] = "Email is already taken.";
         }

         if (empty($password)) {
             $errors[] = "Password field is required.";
         }
         if (!empty($password) && strlen($password) < 6) {
             $errors[] = "Password must be at least 6 characters long.";
         }

         if (empty($confirm_password)) {
             $errors[] = "Confirm Password field is required.";
         }

         if (!empty($password) && $password !== $confirm_password) {
             $errors[] = "Passwords do not match.";
         }

         if (!empty($errors)) {
             $_SESSION['errors'] = $errors;
             header("Location: /user/create");
         } else {
             $this->userModel->email = $email;
             $this->userModel->name = $name;
             $this->userModel->password = password_hash($password, PASSWORD_DEFAULT);
             if ($this->userModel->create()) {
                 $_SESSION['success'] = "User created successfully.";
                 header("Location: /user/index");
             } else {
                 $_SESSION['error'] = "Something went wrong, please try again.";
                 header("Location: /user/create");
             }
         }
     }
 }  
 

 public function edit($id)
 {
     $user = $this->userModel->getUser($id);
     require_once "../App/Views/User/edit.php";
 }


 public function update($id)
 {
     if ($_SERVER['REQUEST_METHOD'] === 'POST') {
         // Sanitize input
         $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
         $name = trim($_POST['name']);
         $password = trim($_POST['password']);
         $confirm_password = trim($_POST['confirm_password']);
         $errors = [];

         // Validation checks
         if (empty($name)) {
             $errors[] = "Name field is required.";
         }
         if (empty($email)) {
             $errors[] = "Email field is required.";
         }

         if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
             $errors[] = "Invalid email format.";
         }
         $existingUser = $this->userModel->checkEmailUnique($email, $id);
         if ($existingUser) {
             $errors[] = "Email is already taken.";
         }

         if (!empty($password) && strlen($password) < 6) {
             $errors[] = "Password must be at least 6 characters long.";
         }

         if (!empty($password) && $password !== $confirm_password) {
             $errors[] = "Passwords do not match.";
         }



         if (!empty($errors)) {
             $_SESSION['errors'] = $errors;
             header("Location: /user/edit/$id");
         } else {
             $this->userModel->email = $email;
             $this->userModel->name = $name;
             if ($password) {
                 $this->userModel->password = password_hash($password, PASSWORD_DEFAULT);
             }
             if ($this->userModel->update($id)) {
                 $_SESSION['success'] = "User updated successfully.";
                 header("Location: /user/index");
             } else {
                 $_SESSION['error'] = "Something went wrong, please try again.";
                 header("Location: /user/edit/$id");
             }
         }
     }
 }

 public function delete($id)
 {
     if ($this->userModel->delete($id)) {
         $_SESSION['success'] = "User deleted successfully.";
     } else {
         $_SESSION['error'] = "Something went wrong, please try again.";
     }

     header("Location: /user/index");
 }

 public function status($id)
 {
     if ($this->userModel->status($id)) {
         $_SESSION['success'] = "User status updated successfully.";
     } else {
         $_SESSION['error'] = "Something went wrong, please try again.";
     }
     header("Location: /user/index");
 }
}
