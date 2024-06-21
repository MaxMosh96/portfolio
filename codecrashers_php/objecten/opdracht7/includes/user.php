<form method="POST" action="">
    <div>
<label for="name">Naam</label>
<input type="text" id="name" name="name" placeholder="Uw gebruikersnaam" required></div><br>
<div>
<label for="password">Wachtwoord</label>
<input type="password" id="password" name="password" placeholder="Uw wachtwoord" required></div><br>
<div>
<label for="email">E-mailadres</label>
<input type="email" id="email" name="email" placeholder="Uw e-mailadres" required></div><br>
<div>
<label for="birthdate">Geboortedatum</label>
<input type="date" id="birthdate" name="birthdate" required></div><br>
<div>
<label for="active">Actief</label>
<input type="checkbox" id="active" name="active" checked></div><br>
<button type="submit">User aanmaken</button>
</form>

<?php
    class newUser {
        private $name;
        private $password;
        private $email;
        private $birthdate;
        private $active;

        public function __construct($name, $password, $email, $birthdate, $active)
        {
            $this->name = $name;
            $this->password = $password;
            $this->email = $email;
            $this->birthdate = $birthdate;
            $this->active = $active;
        }

        public function showData() {
            $statusClass = $this->active ? 'active' : 'inactive';
            $html = "<table class='user-table $statusClass' style='border-collapse: collapse;'>";
            $html .= "<tr><th>Naam</th><td>{$this->name}</td></tr>";
            $html .= "<tr><th>Wachtwoord</th><td>{$this->password}</td></tr>";
            $html .= "<tr><th>Email</th><td>{$this->email}</td></tr>";
            $html .= "<tr><th>Leeftijd</th><td>{$this->birthdate}</td></tr>";
            $html .= "</table>";
            echo $html;
        }
    }

    // Verwerk het formulier
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $name = $_POST["name"];
        $password = $_POST["password"];
        $email = $_POST["email"];
        $birthdate = $_POST["birthdate"];
        $active = isset($_POST["active"]);

        // Bereken de leeftijd op basis van de geboortedatum
        $birthdateObj = new DateTime($birthdate);
        $today = new DateTime();
        $age = $today->diff($birthdateObj)->y;

        // Maak een nieuw User object aan
        $newUser = new User($name, $password, $email, $age, $active);

        // Toon de gegevens van de gebruiker
        $newUser->showData();
    }
?>

