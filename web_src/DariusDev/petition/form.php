<?php require $_SERVER['DOCUMENT_ROOT']. '/DariusDev/petition/sendMail.php'?>

<?php

$conn = new mysqli($host_name, $db_username, $pwd, $database);

if (isset($_POST['signup-btn'])) {
    if (empty($_POST['nom'])) {
        $errors['nom'] = 'Nom requis';
    }
    if (empty($_POST['prenom'])) {
        $errors['prenom'] = 'Prénom requis';
    }
    if (empty($_POST['email'])) {
        $errors['email'] = 'Email requis';
    }

    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $ville = $_POST['ville'];
    $age = $_POST['age'];
    $commentaire = $_POST['commentaire'];
    $token = bin2hex(random_bytes(50));

    // Check if email already exists
    $sql = "SELECT * FROM test WHERE email='$email' LIMIT 1";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        $message = 'Pétition déjà signée';
    }
    else {
    $query = "INSERT INTO test SET nom=?, prenom=?, email=?, ville=?, age=?, commentaire=?, token=?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param('sssssss', $nom, $prenom, $email, $ville, $age, $commentaire, $token);
    $result = $stmt->execute();

    if ($result) {
        $user_id = $stmt->insert_id;
        $stmt->close();

        sendmail($email, $token, $prenom);
        $message = "Signature enregistrée, consultez vos mails pour la valider.";

    } else {
        echo 'Erreur: Impossible de signer la pétition. Si le problème persiste, merci de nous contacter.';
    }
  }
}

?>