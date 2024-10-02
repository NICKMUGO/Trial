<?php

class User {
    private $username;
    private $email;
    private $password;

    // Constructor to initialize user details
    public function __construct($username, $email, $password) {
        $this->username = $username;
        $this->email = $email;
        $this->password = password_hash($password, PASSWORD_BCRYPT); // Hash the password
    }

    // Function to save the user in the database
    public function save() {
        // Database connection (replace with your own database details)
        $servername = "localhost";
        $dbname = "signup_db";
        $db_username = "root";
        $db_password = "";

        try {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $db_username, $db_password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $sql = "INSERT INTO users (username, email, password) VALUES (:username, :email, :password)";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':username', $this->username);
            $stmt->bindParam(':email', $this->email);
            $stmt->bindParam(':password', $this->password);

            $stmt->execute();
            return true;
        } catch(PDOException $e) {
            echo "Error: " . $e->getMessage();
            return false;
        }
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    if ($password === $confirm_password) {
        $user = new User($username, $email, $password);

        if ($user->save()) {
            echo "User registered successfully!";
        } else {
            echo "An error occurred during registration.";
        }
    } else {
        echo "Passwords do not match!";
    }
}
?>
