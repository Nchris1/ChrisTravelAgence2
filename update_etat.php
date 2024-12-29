<?php  
    $servername = "localhost";  
    $username = "root";  
    $password = "";  
    $dbname = "agence";  
        
    // Créer une connexion à la base de données  
    $conn = new mysqli($servername, $username, $password, $dbname);  

    $id = $_GET['id'];
    $verife = $_GET['verife'];
    if($verife == 'En attente'){
        $verife = "Validé";
    } else {
        $verife = "En attente";
    }

    // Vérifier si l'utilisateur existe dans la base de données
    
    $sql = "UPDATE reservation SET etat = '$verife' WHERE id = '$id'";
    $result = $conn->query($sql);

    header('Location: admin.php');  

    // Fermer la connexion à la base de données
    $conn->close();  
?>