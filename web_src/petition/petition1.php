<!DOCTYPE html>

<?php 

require $_SERVER['DOCUMENT_ROOT']. '/pwd/connectDBPetition.php';
require $_SERVER['DOCUMENT_ROOT']. '/data/petition1_data.php';
include $_SERVER['DOCUMENT_ROOT']. '/DariusDev/petition/form.php';
include $_SERVER['DOCUMENT_ROOT']. '/DariusDev/petition/compteur.php';

?>

<head>
  <link rel="stylesheet" href="https://alexyroman.online/bootstrap/css/bootstrap.css">
  <title>Pétition</title>
</head>

<body style="background: var(--bs-gray-900);">

<div style="margin-top: 20px;">
  <p class="text-center" style="color: var(--bs-white);font-weight: bold;font-size: 28px;"><?php echo $message ?></p>
</div>

<div class="container" style="color: var(--bs-white);margin-top: 20px;margin-bottom: 0">
<div class="row">
<div class="col-md-12">
  <section class="position-relative py-4 py-xl-5">
  <div class="container position-relative">
  <div class="row">
  <div class="col-md-8 col-xl-6 text-center mx-auto">
    <h1 style="color: var(--bs-white);font-weight: bold;font-size: 28px;">Signez notre pétition !</h1>
    <img class="img-fluid" src="/">
    <p class="w-lg-50">Text</p>
  </div>
  </div>
    <div class="row d-flex justify-content-center">
    <div class="col-md-6 col-lg-5 col-xl-4">
    <div>
      <div class="card mb-5">
      <div class="card-body p-sm-5">
        <h2 class="text-center mb-4" style="color: var(--bs-black);">Signez ici:</h2>
                                            
        <form action="petition1.php" method="post">
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