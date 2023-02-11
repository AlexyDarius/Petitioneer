<?php

$conn = new mysqli($host_name, $db_username, $pwd, $database);

if (isset($_GET['token'])) {
    $token = $_GET['token'];
    $sql = "SELECT * FROM $dbTable WHERE token='$token' LIMIT 1";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $user = mysqli_fetch_assoc($result);
        $query = "UPDATE $dbTable SET verified=1 WHERE token='$token'";
        if (mysqli_query($conn, $query)) {
            $_SESSION['id'] = $user['id'];
            $_SESSION['nom'] = $user['nom'];
            $_SESSION['prenom'] = $user['prenom'];
            $_SESSION['email'] = $user['email'];
            $_SESSION['verified'] = true;
            $message = "Signature validée!";
        }

    } else {
        $message = "Utilisateur introuvable. Si le problème persiste, merci de nous contacter.";
    }
} else {
    $message = "Aucun token fourni. Si le problème persiste, merci de nous contacter.";
}

?>

<?php
include $_SERVER['DOCUMENT_ROOT']. '/php/header.php';
?>

<title>Furie Française - Signature vérifiée</title>
<meta name="description" content="Furie Française est un mouvement militant de jeunesse toulousain situé à Toulouse. Votre signature a bien été vérifiée.">
</head>

<?php
include $_SERVER['DOCUMENT_ROOT']. '/php/navbar-site.php';
?>

<body style="background: var(--bs-gray-900);">
    
    <div class="container" style="margin-top: 50px;margin-bottom: 50px;">
        <div class="row">
            <div class="col-md-12">
                <p style="--bs-body-color: var(--bs-white);color: var(--bs-white);font-family: 'Advent Pro', sans-serif;font-size: 29px;text-align: justify;"><?php echo $message ?></p>
                <div>
                    <p style="text-align: center;font-size: 20px;"><a href="<?php echo $petitionLink ?>" style="text-align: center;">Cliquez ici pour revenir à la pétition</a></p>
                </div>
            </div>
        </div>
    </div>

<?php
include $_SERVER['DOCUMENT_ROOT']. '/php/footer.php';
?>