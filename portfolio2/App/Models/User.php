<?php

namespace App\Models;

use PDO;


class User
{

    private $conn;
    private $table = "users";

    public $id;
    public $name;
    public $email;
    public $password;
    public $designation;
    public $bio;
    public $present_address;
    public $permanent_address;
    public $image;


    public function __construct($db)
    {
        $this->conn = $db;
    }

    public function loginCheck($email, $password)
    {
        $query = "SELECT * FROM " . $this->table . " WHERE email = :email LIMIT 1";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":email", $email, PDO::PARAM_STR);
        $stmt->execute();

        // Fetch user data
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        // If user found and password is correct
        if ($user && password_verify($password, $user['password'])) {
            return $user; // Return user data for session handling
        }

        return false; // Login failed
    }

    /**
     * Get all users.
     *
     * @return array
     */
    public function users()
    {
        $query = "SELECT * FROM " . $this->table;
        $users = $this->conn->prepare($query);
        $users->execute();
        $users = $users->fetchAll(PDO::FETCH_ASSOC);
        return $users;
    }


    public function checkEmailUnique($email, $userId = null)
    {
        $query = "SELECT * FROM " . $this->table . " WHERE email = :email";
        if ($userId) {
            $query .= " AND id != :id";
        }

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);

        if ($userId) {
            $stmt->bindParam(':id', $userId, PDO::PARAM_INT);
        }

        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function create()
    {
        $query = "INSERT INTO " . $this->table . " SET name = :name, email = :email, password = :password";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':name', $this->name);
        $stmt->bindParam(':email', $this->email);
        $stmt->bindParam(':password', $this->password);
        var_dump($this->image);
        // image store setup 
        $stmt->execute();
        return $stmt;
    }

    public function getUser($id)
    {
        $query = "SELECT * FROM " . $this->table . " WHERE id = :id LIMIT 1";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        return $user;
    }

    public function update($id)
    {
        $query = "UPDATE " . $this->table . " SET name = :name, email = :email";
        if ($this->password) {
            $query .= ", password = :password";
        }
        $query .= " WHERE id = :id";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':name', $this->name);
        $stmt->bindParam(':email', $this->email);
        if ($this->password) {
            $stmt->bindParam(':password', $this->password);
        }
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt;
    }

    public function delete($id)
    {
        $query = "DELETE FROM " . $this->table . " WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt;
    }

    public function status($id)
    {
        $user = $this->getUser($id);

        $status = !$user['status'];

        $query = "UPDATE " . $this->table . " SET status = :status WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':status', $status);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt;
    }


    public function profileUpdate($id)
    {
        $query = "UPDATE " . $this->table . " SET name = :name, email = :email, designation = :designation, present_address = :present_address, permanent_address = :permanent_address, bio = :bio";

        if ($this->image) {
            $query .= ", image = :image"; // Add the image column to the update query
        }

        $query .= " WHERE id = :id";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':name', $this->name);
        $stmt->bindParam(':email', $this->email);
        $stmt->bindParam(':designation', $this->designation);
        $stmt->bindParam(':present_address', $this->present_address);
        $stmt->bindParam(':permanent_address', $this->permanent_address);
        $stmt->bindParam(':bio', $this->bio);

        if ($this->image) {
            $stmt->bindParam(':image', $this->image); // Bind the image path
        }

        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt;
    }
}
