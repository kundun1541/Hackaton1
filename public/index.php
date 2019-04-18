<?php
if(session_status() === PHP_SESSION_NONE) session_start();

if(!empty($_POST['name'])) {
   $_SESSION['joueur'] = $_POST['name'];
   header("location: http://localhost:8000/reglesjeu.php");
}
?>

<!doctype html>
<html lang="fr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="assets/css/styleIndex.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Wild Easter</title>
  </head>
  <body>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <div class="card-img d-flex align-content-center">
                            <img src="https://www.ludo.fr/image/ludo_web_hero_recommended_tablet/rabbid-egg-dodoraptor-cmyk.png"
                        </div>
                        <div class="card-title">
                            <h1>Viens passer un moment cool avec moi !</h1>
                            <h2 class="mt-5">Comment t'appelles-tu mon lapinou ?</h2>
                        </div>
                        <div class="card-text">
                            <form method="POST">
                                <input type="text" name="name" id="name" placeholder="Ton prénom" title="Mets ton prénom petit rigolo"><br>
                                <?php   if (empty($_POST['name']))
                                {
                                    echo "<Mets ton nom petit rigolo<br/>";
                                }
                                else {

                                    echo "C'est parti";

                                }
                                ?>

                                <div class="text-center"><button class="btn btn-light btn-sx mt-3" type="submit">Jouer</button></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>


