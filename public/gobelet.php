<?php
require "api.php";
require "../vendor/autoload.php";

if(session_status() === PHP_SESSION_NONE) session_start();
$egg = $_SESSION['egg'];
?>


<div class="col-4">
    <div class="card" data-toggle="modal" data-target="#win" style="width: 17rem;">
        <img class="card-img" src="https://content.pearl.fr/media/cache/default/article_large_high_nocrop/shared/images/articles/K/KT2/figurine-lapins-cretins-soutif-ref_KT2576_1.jpg">
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="win" tabindex="-1" role="dialog" aria-labelledby="win" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <h1>C'est gagné tête d'oeuf !</h1>
                <img src="<?= $_SESSION['egg']['image'] ?>" width="100">
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">On s'en refait une ?</button>
            </div>
        </div>
    </div>
</div>


