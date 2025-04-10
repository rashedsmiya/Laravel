<?php

namespace App\Controllers;

use App\Models\User;
use App\Config\Database;


class ProfileController
{
    private $db;
    private $userModel;

    public function __construct()
    {
        session_start();
        if (!isset($_SESSION['user_name'])) {
            header("Location: /login");
        }
        $database = new Database();
        $this->db = $database->getConnection();
        $this->userModel = new User($this->db);
    }

    public function profile()
    {
        $user = $this->userModel->getUser($_SESSION['user_id']);
        require_once "../App/Views/Profile/index.php";
    }

    // public function profileUpdate()
    // {
    //     if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    //         // Sanitize input
    //         $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
    //         $name = trim($_POST['name']);
    //         $designation = trim($_POST['designation']);
    //         $present_address = trim($_POST['present_address']);
    //         $permanent_address = trim($_POST['permanent_address']);
    //         $bio = trim($_POST['bio']);

    //         $image = $_FILES['image'];

    //         if ($image['size'] > 0) {
    //             $store_path = "../storage/uploads/";
    //             if (!file_exists($store_path)) {
    //                 mkdir($store_path, 0777, true);
    //             }
    //             $file_name = $image['name'];
    //             $file_tmp = $image['tmp_name'];
    //             $file_path = $store_path . $file_name;
    //             move_uploaded_file($file_tmp, $file_path);
    //         }

    //         $id = $_SESSION['user_id'];
    //         $errors = [];

    //         // Validation checks
    //         if (empty($name)) {
    //             $errors[] = "Name field is required.";
    //         }
    //         if (empty($email)) {
    //             $errors[] = "Email field is required.";
    //         }

    //         if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    //             $errors[] = "Invalid email format.";
    //         }
    //         $existingUser = $this->userModel->checkEmailUnique($email, $id);
    //         if ($existingUser) {
    //             $errors[] = "Email is already taken.";
    //         }

    //         if (!empty($password) && strlen($password) < 6) {
    //             $errors[] = "Password must be at least 6 characters long.";
    //         }

    //         if (!empty($password) && $password !== $confirm_password) {
    //             $errors[] = "Passwords do not match.";
    //         }

    //         if (!empty($errors)) {
    //             $_SESSION['errors'] = $errors;
    //             header("Location: /user/profile");
    //         } else {

    //             // if($image['size'] > 0) {    
    //             //     $target_dir = "../storage/uploads/";
    //             //     $upload_dir = "uploads/"; 
    //             //     if(!is_dir($target_dir)) {
    //             //         mkdir($target_dir, 0777, true);
    //             //     }

    //             //     $target_dir = $storage_dir . $upload_dir;
    //             //     if(is_dir($target_dir)) {
    //             //         $file = basename($image["name"]);
    //             //         $target_file = $target_dir . $file;
    //             //         move_uploaded_file($image["tmp_name"], $target_file);

    //             //         $this->userModel->image = $target_file; 
    //             //     }  
    //             // } 

    //             $this->userModel->email = $email;
    //             $this->userModel->name = $name;
    //             $this->userModel->designation = $designation;
    //             $this->userModel->present_address = $present_address;
    //             $this->userModel->permanent_address = $permanent_address;
    //             $this->userModel->bio = $bio;
    //             if ($this->userModel->profileUpdate($id)) {
    //                 $_SESSION['success'] = "User updated successfully.";
    //                 header("Location: /user/profile");
    //             } else {
    //                 $_SESSION['error'] = "Something went wrong, please try again.";
    //                 header("Location: /user/profile");
    //             }
    //         }
    //     }
    // }

    public function profileUpdate()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Sanitize input
            $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
            $name = trim($_POST['name']);
            $designation = trim($_POST['designation']);
            $present_address = trim($_POST['present_address']);
            $permanent_address = trim($_POST['permanent_address']);
            $bio = trim($_POST['bio']);

            $image = $_FILES['image'];
            $imagePath = null;

            if ($image['size'] > 0) {
                $store_path = "../storage/uploads/";
                if (!file_exists($store_path)) {
                    mkdir($store_path, 0777, true);
                }

                $file_name = uniqid() . "_" . basename($image['name']);
                $file_tmp = $image['tmp_name'];
                $file_path = $store_path . $file_name;

                if (move_uploaded_file($file_tmp, $file_path)) {
                    $imagePath = "/storage/uploads/" . $file_name;
                }
            }

            $id = $_SESSION['user_id'];
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

            if (!empty($errors)) {
                $_SESSION['errors'] = $errors;
                header("Location: /user/profile");
            } else {
                // Set the image path if a file was uploaded
                $this->userModel->email = $email;
                $this->userModel->name = $name;
                $this->userModel->designation = $designation;
                $this->userModel->present_address = $present_address;
                $this->userModel->permanent_address = $permanent_address;
                $this->userModel->bio = $bio;
                $this->userModel->image = $imagePath; // Save image path

                if ($this->userModel->profileUpdate($id)) {
                    $_SESSION['success'] = "User updated successfully.";
                    header("Location: /user/profile");
                } else {
                    $_SESSION['error'] = "Something went wrong, please try again.";
                    header("Location: /user/profile");
                }
            }
        }
    }
}
