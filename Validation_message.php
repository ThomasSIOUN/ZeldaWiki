<?php
    $prenom = $_POST["prenom"];
    $nom = $_POST["Nom"];
    $Message = $_POST["MessageU"];
    echo "<h1>Bonjour $prenom $nom</h1>";
    echo "<p>Voulez-vous validé votre message :</p>";
    echo "<p>$Message</p>";
?>