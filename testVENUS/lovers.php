<?php

require_once "index_controller.php";
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/d89aa1e4ce.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Site de rencontre VENUS</title>
</head>

<body>





<div class="products" id="all-products">
            <div class="row justify-content-center" id="prod">
                <h1 class="col-sm text-center mt-5 mb-4">Nos produits</h1>
            </div>
            <!-- Sous-Catégorie Plantes d'intérieur -->
            <section id="plantesInt">
                <div class="row justify-content-center">
                    <h2 class="col-sm text-center my-5">Plantes d'intérieur</h2>
                </div>
                <div class="row justify-content-center" id="housePlant">
                    <div class="col-sm-2">
                        <div class="card mb-4">
                            <div class="card-body">
                                <h3 class="card-title text-center">Roger</h3>
                                <img class="card-img-top btn" src="assets/img/monstera.png" alt="Plante Monstera en pot"
                                    type="button" data-toggle="modal" data-target="#exampleModal">
                                <div class="row">
                                    <div class="col text-left mt-3">
                                        <span class="card-text">15 €</span>
                                    </div>
                                    <div class="col text-right mt-3">
                                        <a href="" class="card-link article" data-ref="ref. 123" data-name="Roger"
                                            data-price="15">
                                            <i class="fas fa-cart-plus fa-lg"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="card mb-4">
                            <div class="card-body">
                                <h3 class="card-title text-center">Josette</h3>
                                <img class="card-img-top btn" src="assets/img/begoniamaculata.jpg"
                                    alt="Plante Begonia Maculata en pot" type="button" data-toggle="modal"
                                    data-target="#exampleModal">
                                <div class="row">
                                    <div class="col text-left mt-3">
                                        <span class="card-text">12.50 €</span>
                                    </div>
                                    <div class="col text-right mt-3">
                                        <a href="#" class="card-link article" data-ref="ref. 456" data-name="Josette"
                                            data-price="12.5">
                                            <i class="fas fa-cart-plus fa-lg"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="card mb-4">
                            <div class="card-body">
                                <h3 class="card-title text-center">Antoine</h3>
                                <img class="card-img-top btn" src="assets/img/aphelandra.jpg"
                                    alt="Plante Alephandra en pot" type="button" data-toggle="modal"
                                    data-target="#exampleModal">
                                <div class="row">
                                    <div class="col text-left mt-3">
                                        <span class="card-text">20 €</span>
                                    </div>
                                    <div class="col text-right mt-3">
                                        <a href="#" class="card-link article" data-ref="ref. 789" data-name="Antoine"
                                            data-price="20">
                                            <i class="fas fa-cart-plus fa-lg"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="card mb-4">
                            <div class="card-body">
                                <h3 class="card-title text-center">Mireille</h3>
                                <img class="card-img-top btn" src="assets/img/zamioculcas.jpg"
                                    alt="Plante Zamioculcas en pot" type="button" data-toggle="modal"
                                    data-target="#exampleModal">
                                <div class="row">
                                    <div class="col text-left mt-3">
                                        <span class="card-text">15 €</span>
                                    </div>
                                    <div class="col text-right mt-3">
                                        <a href="#" class="card-link article" data-ref="ref. 112" data-name="Mireille"
                                            data-price="15">
                                            <i class="fas fa-cart-plus fa-lg"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Sous-Catégorie Plantes d'extérieur -->
            <section id="plantesExt">
                <div class="row justify-content-center">
                    <h2 class="col-sm text-center my-5">Plantes d'extérieur</h2>
                </div>
                <div class="row justify-content-center" id="housePlant">
                    <div class="col-sm-2">
                        <div class="card mb-4">
                            <div class="card-body">
                                <h3 class="card-title text-center">Solange</h3>
                                <img class="card-img-top btn" src="assets/img/herbechat.jpg"
                                    alt="Plante d'herbe à chat en pot" type="button" data-toggle="modal"
                                    data-target="#exampleModal">
                                <div class="row">
                                    <div class="col text-left mt-3">
                                        <span class="card-text">4.50 €</span>
                                    </div>
                                    <div class="col text-right mt-3">
                                        <a href="" class="card-link article" data-ref="ref. 345" data-name="Solange"
                                            data-price="4.5">
                                            <i class="fas fa-cart-plus fa-lg"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="card mb-4">
                            <div class="card-body">
                                <h3 class="card-title text-center">Jean-Claude</h3>
                                <img class="card-img-top btn" src="assets/img/pernettyaext.jpg"
                                    alt="Plante Pernettya en pot" type="button" data-toggle="modal"
                                    data-target="#exampleModal">
                                <div class="row">
                                    <div class="col text-left mt-3">
                                        <span class="card-text">7.50 €</span>
                                    </div>
                                    <div class="col text-right mt-3">
                                        <a href="#" class="card-link article" data-ref="ref. 678"
                                            data-name="Jean-Claude" data-price="7.5">
                                            <i class="fas fa-cart-plus fa-lg"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="card mb-4">
                            <div class="card-body">
                                <h3 class="card-title text-center">Laurette</h3>
                                <img class="card-img-top btn" src="assets/img/helleborusext.jpg"
                                    alt="Plante Helleborus en pot" type="button" data-toggle="modal"
                                    data-target="#exampleModal">
                                <div class="row">
                                    <div class="col text-left mt-3">
                                        <span class="card-text">20 €</span>
                                    </div>
                                    <div class="col text-right mt-3">
                                        <a href="#" class="card-link article" data-ref="ref. 901" data-name="Laurette"
                                            data-price="20">
                                            <i class="fas fa-cart-plus fa-lg"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="card mb-4">
                            <div class="card-body">
                                <h3 class="card-title text-center">René</h3>
                                <img class="card-img-top btn" src="assets/img/aloevera.jpg"
                                    alt="Plante Aloe Vera en pot" type="button" data-toggle="modal"
                                    data-target="#exampleModal">
                                <div class="row">
                                    <div class="col text-left mt-3">
                                        <span class="card-text">11.50 €</span>
                                    </div>
                                    <div class="col text-right mt-3">
                                        <a href="#" class="card-link article" data-ref="ref. 2234" data-name="René"
                                            data-price="11.5">
                                            <i class="fas fa-cart-plus fa-lg"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>




    <a href="index.php">index</a>
    <a href="user.php">user</a>







    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>