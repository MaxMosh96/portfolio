<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>Opdracht 7</title>
</head>
<body>
<?php

class User {
    private $name;
    private $password;
    private $email;
    private $age;
    private $active = true;

    public function __construct($name, $password, $email, $age, $active = true) {
        $this->name = $name;
        $this->password = $password;
        $this->email = $email;
        $this->age = $age;
        $this->active = $active;
    }

    // Getters
    public function getName() {
        return $this->name;
    }

    public function getPassword() {
        return $this->password;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getAge() {
        return $this->age;
    }

    public function getActive() {
        return $this->active;
    }

    // Setters
    public function setName($name) {
        $this->name = $name;
    }

    public function setPassword($password) {
        $this->password = $password;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setAge($age) {
        $this->age = $age;
    }

    public function setActive($active) {
        $this->active = $active;
    }

    // Method to show user data in HTML table
    public function showData() {
        $statusClass = $this->active ? 'active' : 'inactive';
        $html = "<table class='user-table $statusClass' style='border-collapse: collapse;'>";
        $html .= "<tr><th>Naam</th><td>{$this->name}</td></tr>";
        $html .= "<tr><th>Wachtwoord</th><td>{$this->password}</td></tr>";
        $html .= "<tr><th>Email</th><td>{$this->email}</td></tr>";
        $html .= "<tr><th>Leeftijd</th><td>{$this->age}</td></tr>";
        $html .= "</table>";
        echo $html; // <-- Hier voeren we de gegenereerde HTML uit met echo
    }
}

// Voorbeeldgebruik
$user1 = new User("Tom", "welkom123", "tom@codecrashers.nl", 35, true); // Actieve gebruiker
$user2 = new User("Jan-Peter", "PolitiekIsLeuk!", "jp.balkenende@hotmail.com", 66, false); // Inactieve gebruiker

// Toon de gebruikersgegevens in HTML-tabelvorm
$user1->showData();
$user2 -> showData();

include './includes/user.php';

?>

</body>
</html>