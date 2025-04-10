<?php 



namespace App\Controllers;

class DashboardController
{

    public function __construct()
    {
        session_start();
        if (!isset($_SESSION['user_name'])) {
            header("Location: /login");
        }
    }
    public function dashboard()
    {
        require_once '../App/Views/dashboard.php';
    }
}



  