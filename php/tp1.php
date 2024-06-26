<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="weight-scale.svg" type="image/svg+xml" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
      integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <title>Document</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container px-5">
        <a class="navbar-brand" href="#!"
          ><i class="fa-solid fa-weight-scale me-3"></i> Calculer IMC</a
        >
      </div>
    </nav>
    <div class="container p-5">
      <div class="col-4">
        <form method="post" action="tp1-imc.php">
        <input
          type="text"
          class="form-control"
          name="poids"
          placeholder="Poids en kg "
        />
        <input
          type="text"
          class="form-control my-3"
          name="taille"
          placeholder="Poids en mètre "
        />
        <button class="btn btn-primary" id="btnCalculer" type="submit">Calculer</button>
        </form>
        <div class="alert alert-success mt-3" role="alert">
        <?php

          $imc = $_POST['poids'] / ($_POST['taille'] * $_POST['taille']);
          echo "Votre IMC est " . number_format($imc, 2) . "<br />";
          if ($imc < 18.5) {
            echo "tranche : Insuffisance pondérale<br />";
            echo "conseil : Vous devriez consulter un professionnel de santé pour des conseils.";
        } elseif ($imc >= 18.5 && $imc < 24.9) {
            echo "tranche : Poids normal<br />";
            echo "conseil : Continuez à maintenir un mode de vie sain.";
        } elseif ($imc >= 25 && $imc < 29.9) {
            echo "tranche : Surpoids<br />";
            echo "conseil : Essayez de faire plus d'exercice et de suivre une alimentation équilibrée.";
        } else {
            echo "tranche : Obésité<br />";
            echo "conseil : Consultez un professionnel de santé pour obtenir des conseils personnalisés.";
        }
          ?>
        </div>
      </div>
    </div>
    <footer class="py-5 bg-dark">
      <div class="container px-4 px-lg-5">
        <p class="m-0 text-center text-white">Copyright &copy;IMC 2023</p>
      </div>
    </footer>

  </body>
</html>
