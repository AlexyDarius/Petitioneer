<!DOCTYPE html>

<?php include $_SERVER['DOCUMENT_ROOT']. '/pwd/connectDBPetition.php'?>
<?php include $_SERVER['DOCUMENT_ROOT']. '/data/petitiondragData.php'?>
<?php require $_SERVER['DOCUMENT_ROOT']. '/DariusDev/petition/form.php'?>
<?php include $_SERVER['DOCUMENT_ROOT']. '/DariusDev/petition/compteur.php'?>

<?php
require $_SERVER['DOCUMENT_ROOT']. "/php/header.php";
?>
    <title>Furie Française - Pétiton lectures drag</title>
    <meta name="description" content="Signez notre pétition contre les lectures drags financées par la mairie de Toulouse !">
    <link rel="canonical" href="https://www.furiefrancaise.fr/petitiondrag">
</head>

<body style="background: var(--bs-gray-900);">
    
<?php
require $_SERVER['DOCUMENT_ROOT']. "/php/navbar-site.php";
?>

<div style="margin-top: 20px;">
  <p class="text-center" style="color: var(--bs-white);font-weight: bold;font-size: 28px;"><?php echo $message ?></p>
</div>

<div class="container" style="color: var(--bs-white);margin-top: 20px;margin-bottom: 0;font-family: 'Advent Pro', sans-serif;">
<div class="row">
<div class="col-md-12">
  <section class="position-relative py-4 py-xl-5">
  <div class="container position-relative">
  <div class="row">
  <div class="col-md-8 col-xl-6 text-center mx-auto">
    <h1 style="color: var(--bs-white);font-weight: bold;font-size: 28px;">Signez notre pétition contre les lectures drag aux 3-6 ans à Toulouse !</h1>
    <img class="img-fluid" src="/img/drag.jpg">
    <p class="w-lg-50">Toi aussi tu en as marre de ces dégénerés ? Signe ici&nbsp;</p>
  </div>
  </div>
    <div class="row d-flex justify-content-center">
    <div class="col-md-6 col-lg-5 col-xl-4">
    <div>
      <div class="card mb-5">
      <div class="card-body p-sm-5">
        <h2 class="text-center mb-4" style="color: var(--bs-black);">Signez ici:</h2>
                                            
        <form action="petitiondrag.php" method="post">
          <div class="form-group">
            <label style="color: var(--bs-black)">Nom</label>
            <input type="text" name="nom" class="form-control form-control-lg" placeholder="Nom" value="<?php echo $nom; ?>">
          </div>
          <div class="form-group">
            <label style="color: var(--bs-black)">Prénom</label>
            <input type="text" name="prenom" class="form-control form-control-lg" placeholder="Prénom" value="<?php echo $prenom; ?>">
          </div>
          <div class="form-group">
            <label style="color: var(--bs-black)">Email</label>
            <input type="email" name="email" class="form-control form-control-lg" placeholder="Email" value="<?php echo $email; ?>">
          </div>
          <div class="form-group">
            <label style="color: var(--bs-black)">Ville (optionnel)</label>
            <input type="text" name="ville" class="form-control form-control-lg" placeholder="Ville" value="<?php echo $ville; ?>">
          </div>
          <div class="form-group">
            <label style="color: var(--bs-black)">Age (optionnel)</label>
            <input type="number" name="age" class="form-control form-control-lg" placeholder="Age" value="<?php echo $age; ?>">
          </div>
          <div class="form-group">
            <label style="color: var(--bs-black)">Commentaire (optionnel)</label>
            <textarea type="text" name="commentaire" rows="5" class="form-control form-control-lg" placeholder="1000 caractères maximum" value="<?php echo $commentaire; ?>"></textarea>
          </div>
          <div class="form-group" style="padding-top:10px">
            <button class="btn btn-primary d-block w-100" type="submit" name="signup-btn" style="background: #f02045;">Signer</button>
          </div>
        </form>

      </div>
      </div>
    </div>

      <div class="row text-center d-md-flex">
      <div class="col">
      <div>
        <h1 style="color: var(--bs-white);font-weight: bold;font-size: 28px;">Nombre de signatures: <?php echo $row['COUNT(*)']; ?></h1>
      </div>
      </div>
      </div>

    </div>
    </div>
    </div>
  </section>
</div>
</div>
</div>

<?php
require $_SERVER['DOCUMENT_ROOT']. "/php/footer.php";
?>