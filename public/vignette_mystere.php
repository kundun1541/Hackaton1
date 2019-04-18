<?php
require "api.php";
require "../vendor/autoload.php";
require "perso_mystere.php";

if(session_status() === PHP_SESSION_NONE) session_start();
$tab = $_SESSION['mystere'];
$id = 'Yavuz'
?>


<div class="col-xs-12 col-sm-6 col-md-4">
    <div class="image-flip" ontouchstart="this.classList.toggle("hover");">
        <div class="mainflip">
            <div class="frontside">
                <div class="card">
                    <div class="card-body text-center">
                        <p><img class=" img-fluid" src="<?=$tab[$id]['image']?>" alt="<?=$tab[$id]['nom']?>"></p>
                        <h4 class="card-title"><?=$tab[$id]['nom']?></h4>
                        <p class="card-text">Presentation de <?=$tab[$id]['nom']?></p>
                        <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
                    </div>
                </div>
            </div>
            <div class="backside">
                <div class="card">
                    <div class="card-body text-center mt-4">
                        <h4 class="card-title"><?=$tab[$id]['nom']?></h4>
                        <p class="card-text"><?=$tab[$id]['description']?></p>
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <a class="social-icon text-xs-center" target="_blank" href="#">
                                    <i class="fa fa-facebook"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a class="social-icon text-xs-center" target="_blank" href="#">
                                    <i class="fa fa-twitter"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a class="social-icon text-xs-center" target="_blank" href="#">
                                    <i class="fa fa-skype"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a class="social-icon text-xs-center" target="_blank" href="#">
                                    <i class="fa fa-google"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>