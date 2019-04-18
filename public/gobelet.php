<?php
require "api.php";
require "../vendor/autoload.php";

if(session_status() === PHP_SESSION_NONE) session_start();
$egg = $_SESSION['egg'];
$var = (bool)$_SESSION['gobelet'];
?>

<?php if($var === true):?>
<!-- Carte gagnante -->
<div class="col-4">
    <div class="card" data-toggle="modal" data-target="#win" style="width: 17rem;">
        <img class="card-img" src="https://content.pearl.fr/media/cache/default/article_large_high_nocrop/shared/images/articles/K/KT2/figurine-lapins-cretins-soutif-ref_KT2576_1.jpg">
    </div>


</div>
<?php else: ?>
<!-- Carte perdante -->
<div class="col-4">
    <div class="card" data-toggle="modal" data-target="#loose" style="width: 17rem;">
        <img class="card-img" src="https://content.pearl.fr/media/cache/default/article_large_high_nocrop/shared/images/articles/K/KT2/figurine-lapins-cretins-soutif-ref_KT2576_1.jpg">
    </div>
</div>
<?php endif ?>


<!-- Modal gagnant-->
<div class="modal fade" id="win" tabindex="-1" role="dialog" aria-labelledby="win" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="row d-flex justify-content-center">
                    <h1>C'est gagné tête d'oeuf !</h1>
                </div>
                <div class="row d-flex justify-content-center">
                    <img src="<?= $_SESSION['egg']['image'] ?>" width="auto" height="300">
                </div>
                <div class="row d-flex justify-content-center">
                    <h6><?= $_SESSION['egg']['name'] ?></h6>
                </div>
            </div>

            <div class="modal-footer">
                <form action="jeu.php" method="post">
                    <button type="submit" id="play" name="play" class="btn btn-secondary" data-dismiss="modal" onclick="javascript:window.location.reload()">On s'en refait une ?</button>
                </form>
            </div>
        </div>
    </div>
</div>



<!-- Modal perdant -->
<div class="modal fade" id="loose" tabindex="-1" role="dialog" aria-labelledby="win" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="row d-flex justify-content-center">
                    <h1>C'est perdu, rejoue encore !</h1>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">On s'en refait une ?</button>
            </div>
        </div>
    </div>
</div>

